@extends('layouts.backend.app')

@section('title') Dashboard @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <a href="{{ route('booking') }}" target="_blank" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> New Appointment</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <!-- Column -->
    @foreach ($dashboard_items as $dashboard_item)
    <div class="col-md-6 col-lg-4 col-xlg-2">
        <div class="card">
            <div class="box @if($loop->odd) bg-info @else bg-success @endif text-center">
                <h1 class="font-light text-white">{{ $dashboard_item['count'] }}</h1>
                <h6 class="text-white">{{ $dashboard_item['title'] }}</h6>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Chart -->
</div>
@endsection

@push('head')

@endpush

@push('foot')

@endpush
