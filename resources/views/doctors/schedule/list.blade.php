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
                             <div class="table-responsive">
                                    <table class="table dataTable">
                                <thead>
                                <tr>
                                    <th> description </th>
                                    <th> date </th>
                                    <th> from </th>
                                    <th> to </th>
                                    <th> actions </th>

                                </tr>
                                </thead>
                                <tbody id="tableitems">
                                @foreach ($tasks as $task)
                                <tr class="rowitem">
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->day }}</td>
                                        <td>{{ $task->from }}</td>
                                        <td>{{ $task->to }}</td>
                                        <td>{!! $task->action_buttons !!}</td>

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
