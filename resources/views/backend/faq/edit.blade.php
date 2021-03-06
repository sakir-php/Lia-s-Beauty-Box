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

            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">Update FAQ</h4>
                </div>
                <div class="card-body">
                <form action="{{ route('backend.questionaire.update',$questionaire) }}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="form-body">
                        <div class="card-body">
                            <div class="row pt-3">
                            <div class="col-md-6">
                            <div class="form-group has-danger">
                                    <label class="form-label">Question  <b class="text-danger">*</b></label>
                                    <input type="text" id="question" name="question" class="form-control" placeholder="Question" value="{{ $questionaire->question }}" required>
                                        @error('question')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror                                    
                                    </div>
                                </div>
                               
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Answer</label>
                                        <textarea class="form-control" id="answer" name="answer" rows="3"
                                                    placeholder="Write Answer Here">{{ $questionaire->answer }}</textarea>
                                    </div>
                                </div>
                              





                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                                <button type="reset" class="btn btn-danger">Reset form</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')

@endpush

@push('foot')

@endpush
