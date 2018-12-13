@extends('doctors.layouts.main')

@section('content')


    <div class="row">
        <form action="{{route('schedule.update')}}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="description" value={{$task->description}}>
         </div>
         <div class="form-group">
            <label for="day">Date</label>
            <input type="date" class="form-control" name="day" id="day" value={{$task->day}}>
         </div>

         <div class="form-group">
            <label for="time_from">From</label>
            <input type="time" class="form-control" name="from" id="time_from" value={{$task->from}}>
         </div>

           <div class="form-group">
            <label for="time_to">To</label>
            <input type="time" class="form-control" name="to" id="time_to" value={{$task->to}}>
         </div>
         <br>
         <button type="submit" class="btn btn-primary">update</button>

        </form>

     </div>










@endsection
@push('after-scripts')

@endpush
