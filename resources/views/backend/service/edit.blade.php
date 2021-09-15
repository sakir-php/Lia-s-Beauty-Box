@extends('layouts.backend.app')

@section('title') Service Edit @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Service Edit Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Service Edit Page</li>
                </ol>

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">Update Service</h4>
                </div>
                <form action="{{ route('backend.service.update',$service) }}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Service title <b class="text-danger">*</b> </label>
                                        <input type="text" id="title" name="service_name" class="form-control"  value="{{ $service->name }}" required>
                                        @error('service_name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="form-label" for="price">Price</label>
                                        <input type="number" id="price" name="price" class="form-control form-control-danger" value="{{  $service->price }}">
                                        @error('price')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                    <label class="form-label">Service Category</label>
                                    <select name="category_id" class="form-select col-12" id="inlineFormCustomSelect">
                                    <option value="">--Select Category--</option>
                                    @foreach($serviceCategories as $serviceCategory)
                                    <option value="{{ $serviceCategory->id }}" @if($service->category_id== $serviceCategory->id) selected @endif >{{ $serviceCategory->name }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                    <label class="col-md-12" for="image">Service Image</label>
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control image-chose-btn image-importer" id="image">
                                        <img id="image_display" width="150" src="{{ asset($service->image ?? 'uploads/images/no_image.png') }}" class="image-display" alt="User image"/>
                                        @error('image')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                    <label for="example-month-input2" class="col-4 col-form-label">Description</label>
                                        <div class="col-10">
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $service->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-dark">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('head')

@endpush

@push('foot')

@endpush
