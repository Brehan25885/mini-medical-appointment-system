@extends('doctors.layouts.main')

@section('content')


                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"></h2>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">

                        </div>










@endsection
@push('after-scripts')
<script>
$(function() {

// page is now ready, initialize the calendar...

$('#calendar').fullCalendar({
  // put your options and callbacks here
})

});
</script>
@endpush
