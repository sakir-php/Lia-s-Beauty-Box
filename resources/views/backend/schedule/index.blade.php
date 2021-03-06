@extends('layouts.backend.app')

@section('title') Schedule @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Schedule Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Schedule Page</li>
                </ol>
                <a href="{{ route('backend.schedule.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i
                        class="fa fa-plus-circle"></i> Create
                    New</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @foreach ($schedule_days as $schedule)
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header @if ($loop->odd) bg-success @else bg-info @endif">
                        <h4 class="mb-0 text-white "> {{ $loop->iteration }}) Schedule List
                            ({{ $schedule['day_name'] }})</h4>
                    </div>
                    <div class="card-body">
                        <table class="table color-bordered-table primary-bordered-table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Start</th>
                                    <th scope="col">End</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedule['data'] as $schedule_data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ date('h:i A', strtotime($schedule_data->starting_time)) }}</td>
                                        <td>{{ date('h:i A', strtotime($schedule_data->ending_time)) }}</td>
                                        <td>{{ $schedule_data->title }}</td>
                                        <td>
                                            <a href="{{ route('backend.schedule.show', $schedule_data) }}" class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </a>
                                            <a href="{{ route('backend.schedule.edit', $schedule_data) }}"
                                                class="btn btn-warning btn-circle"><i class="fa fa-pen"></i> </a>
                                            <button value="{{ route('backend.schedule.destroy', $schedule_data) }}"
                                                class="btn btn-danger btn-circle delete-btn"><i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-lg-12 col-xlg-6">
            <div class="card text-white bg-primary">
                <div class="card-header text-center">
                    <h4 class="m-b-0 text-white">Note for this page</h4>
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title">Please delete depended appointments, before delete schedule.</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')

@endpush

@push('foot')

@endpush
