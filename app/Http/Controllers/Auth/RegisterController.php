<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Patient;
use App\Models\Auth\Doctor;
use App\Models\Department\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:patient');
        $this->middleware('guest:doctor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:patients'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }


    public function showRegisterationForm(){

        $departments= Department::all();

        return view('frontend.auth.doctors-register',compact('departments'));

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Auth\Patient
     */
    protected function create(array $data)
    {


        return patient::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image'    =>'Default.png'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Auth\Doctor
     */
    protected function createDoctors(Request $request)
    {
        $request->validate([
                'name'          => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:doctors'],
                'password'      => ['required', 'string', 'min:6', 'confirmed'],
                'department_id' =>['required']
                    ]);

        $request['doctor_image'] = 'Default.png';

        if($request->profile_image){
            $request['doctor_image'] = md5(time()).'.'.$request->profile_image->extension();
            $request->profile_image->storeAs('public/uploads/doctors' , $request['doctor_image']);
            }

        $doctor= Doctor::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'image'             => $request->doctor_image,
            'department_id'     => $request->department_id,
            'personal_statement' => $request->about


        ]);
        if($doctor){
            Auth::guard('doctor')->login($doctor);
            return redirect()->route('home');
        }
    }
}
