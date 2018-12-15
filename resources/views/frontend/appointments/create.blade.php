@extends('frontend.layouts.app')
@push('styles')
<style>
.site-header{
    position: relative;
    padding: 18px 0 140px;
    background-color: #f0f4f8;

    font-size: 60px;
    font-weight: 600;
    color: #404040;
}
.header-img{
    width: 100%
}
}
</style>
@endpush
@section('content')

    </header><!-- .site-header -->
    </header><!-- .site-header -->

    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="contact-info h-100">
                        <h2 class="d-flex align-items-center">Contact Info</h2>

                        <ul class="p-0 m-0">
                            <li><span>Addtress:</span>Mitlton Str. 26-27 London UK</li>
                            <li><span>Phone:</span>+53 345 7953 32453</li>
                            <li><span>Email:</span>yourmail@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="opening-hours h-100">
                        <h2 class="d-flex align-items-center">Opening Hours</h2>

                        <ul class="p-0 m-0">
                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                            <li>Friday <span>8.00 - 18.30</span></li>
                            <li>Saturday <span>9.30 - 17.00</span></li>
                            <li>Sunday <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="emergency-box h-100">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="{{asset('images/emergency-call.png')}}"> +34 586 778 8892</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include('doctors.layouts.messages')
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Book an appointment with Dr {{$doctor->name}}</h2>
                </div>
                <form action="{{route('appointment.store')}}" method="post">
                    {{ csrf_field() }}

                 <div class="form-group">
                        Name<input type="text" class="form-control" name="name" id="name" placeholder="name">
                 </div>
                <div class="form-group">
                <label>Select A Day</label>
                <select name="date" class="form-control" id="day">
                <option value=""> select</option>
                 @foreach ($doctor->schedule as $schedule)
                 <option id="{{$schedule->id}}" value="{{$schedule->day}}"> {{$schedule->day}}</option>
                 @endforeach
                 </select>
                 </div>
                 <div class="form-group">
                <label>Select A Time</label>
                <select name="time" id="time" class="form-control">
                 <option value=""> select </option>
                </select>
                 </div>



                 <div class="form-group" style="display:none">
                        doctor<input type="text" class="form-control" name="doctor_id" value="{{$doctor->id}}" id="name" placeholder="name">
                 </div>

                <div class="col-12">
                    <input type="submit" name="" value="Submit" class="button gradient-bg">
                </div>
                </form>
            </div><!-- row -->
        </div>
    </div><!-- contact-form -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-page-map">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div><!-- map -->
            </div>
        </div>
    </div>

  @endsection
  @push('after-scripts')

  <script>
      $(document).ready(function(){

  $('#day').change(function() {
    var day = $('#day option:selected').val();
    axios.get('/appointment/available-time/'+day).then(function (response) {
    var times=response.data;
    $("#time").find('option').remove(); //remove old options
    $("#time").append(new Option('select', '0'));

        times.forEach(function(entry) {
        $("#time").append(new Option(entry, entry));

            });

  })
  .catch(function (error) {
    console.log(error);
  });
    console.log(day)
    });
});

</script>

  @endpush
