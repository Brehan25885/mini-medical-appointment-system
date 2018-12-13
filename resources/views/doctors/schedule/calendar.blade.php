@extends('doctors.layouts.main')

@section('content')


                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"></h2>
                                    <a class="btn btn-primary" href="/schedule/create">Add</a>


                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                                        <div id='calendar'>
                                        </div>
                        </div>










@endsection
@push('after-scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
<script>
$(function() {

        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here

            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->description }}',
                    start : '{{ $task->day }}T{{$task->from}}',
                    end : '{{ $task->day }}T{{$task->to}}',
                    url : '{{ route('schedule.edit', $task->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>
@endpush
