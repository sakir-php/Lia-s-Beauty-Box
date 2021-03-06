@extends('layouts.backend.app')

@section('title') FAQ @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">FAQ</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">FAQ</li>
                </ol>
                <a href="{{ route('backend.questionaire.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create
                    New</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table class="table color-bordered-table primary-bordered-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Question</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questionaires as $questionaire)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $questionaire->question ?? '#' }}</td>
                                    <td>{{ $questionaire->created_at->format('d/m/Y') }}</td>
                                    <td>
                                    <a  class="btn btn-warning btn-circle" href="{{ route('backend.questionaire.edit', $questionaire) }}">
                                        <i class="fa fa-pen" ></i>
                                    </a>
                                    <a  class="btn btn-danger btn-circle delete-btn" href="{{ route('backend.questionaire.show', $questionaire) }}">
                                        <i class="fa fa-trash" ></i>
                                    </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')

@endpush

@push('foot')

@endpush
