@extends('doctors.layouts.main')

@section('content')


    <div class="row">
        <form action="{{route('schedule.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="description">
         </div>
         <div class="form-group">
            <label for="day">Date</label>
            <input type="date" class="form-control" name="day" id="day">
         </div>

         <div class="form-group">
            <label for="time_from">From</label>
            <input type="time" class="form-control" name="from" id="time_from">
         </div>

           <div class="form-group">
            <label for="time_to">To</label>
            <input type="time" class="form-control" name="to" id="time_to">
         </div>
         <br>
         <button type="submit" class="btn btn-primary">Save</button>

        </form>

     </div>










@endsection
@push('after-scripts')

@endpush
