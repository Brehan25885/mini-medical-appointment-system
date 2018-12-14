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
                             <div class="table-responsive">
                                    <table class="table dataTable">
                                <thead>
                                <tr>
                                    <th> date </th>
                                    <th> from </th>
                                    <th> patient </th>
                                    <th>Confirm</th>

                                </tr>
                                </thead>
                                <tbody id="tableitems">
                                @foreach ($appointments as $appointment)
                                <tr class="rowitem">
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->time }}</td>
                                        <td>{{$appointment->patient->name}}</td>
                                        @if($appointment->is_confirmed==0)
                                        <td>
                                        {!! $appointment->action_buttons !!}
                                        </td>
                                        @else
                                        <td>
                                            Confirmed
                                        </td>
                                        @endif

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        </div>










@endsection
@push('after-scripts')
<script src="{{ asset('js/dataTable.js') }}"></script>

<script>
$(function() {


    });
</script>
@endpush
