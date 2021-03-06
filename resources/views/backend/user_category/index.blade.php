@extends('layouts.backend.app')

@section('title') Customer privilege @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Customer privilege</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Customer privilege</li>
                </ol>
                <a href="{{ route('backend.userCategory.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create
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
                                <th scope="col">Customer privilege Name</th>
                                <th scope="col">VAT %</th>
                                <th scope="col">OFF %</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userCategories as $userCategory)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $userCategory->name }}</td>
                                    <td>{{ $userCategory->vat_percentage }}</td>
                                    <td>{{ $userCategory->discount_percentage }}</td>
                                    <td>{{ $userCategory->created_at->format('d/m/Y') }}</td>
                                    <td>
                                    <a  class="btn btn-warning btn-circle" href="{{ route('backend.userCategory.edit', $userCategory) }}">
                                        <i class="fa fa-pen" ></i>
                                    </a>
                                    <button  class="btn btn-danger btn-circle delete-btn" value="{{ route('backend.userCategory.show', $userCategory) }}">
                                        <i class="fa fa-trash" ></i>
                                    </button>

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
