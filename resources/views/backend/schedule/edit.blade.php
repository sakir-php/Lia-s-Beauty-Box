@extends('layouts.backend.app')

@section('title') Schedule Edit @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Schedule Edit Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Schedule Edit Page</li>
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
                    <h4 class="mb-0 text-white">Edit schedule</h4>
                </div>
                <form action="{{ route('backend.schedule.update', $schedule) }}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Schedule title <b class="text-danger">*</b> </label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Schedule title" value="{{ $schedule->title }}" required>
                                        @error('title')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="form-label" for="maximum_booking">Maximum participant</label>
                                        <input type="number" id="maximum_participant" name="maximum_participant" class="form-control form-control-danger" placeholder="3/5/10" value="{{ $schedule->maximum_participant }}">
                                        @error('maximum_participant')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group has-danger">
                                        <label class="form-label" for="maximum_booking">Starting time <b class="text-danger">*</b></label>
                                        <input type="time" id="starting_time" name="starting_time" class="form-control form-control-danger" value="{{ $schedule->starting_time }}" required>
                                        @error('starting_time')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group has-danger">
                                        <label class="form-label" for="maximum_booking">Ending time <b class="text-danger">*</b></label>
                                        <input type="time" id="ending_time" name="ending_time" class="form-control form-control-danger" value="{{ $schedule->ending_time }}" required>
                                        @error('ending_time')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group has-danger">
                                        <label class="form-label" for="maximum_booking">Schedule day  <b class="text-danger">*</b></label>
                                        <div class="row m-3">
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="saturday" id="saturday" @if($schedule->schedule_day == 'saturday') checked @endif>
                                                <label class="form-check-label" for="saturday">
                                                    Saturday
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="sunday" id="sunday" @if($schedule->schedule_day == 'sunday') checked @endif>
                                                <label class="form-check-label" for="sunday">
                                                    Sunday
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="monday" id="monday" @if($schedule->schedule_day == 'monday') checked @endif>
                                                <label class="form-check-label" for="monday">
                                                    Monday
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="tuesday" id="tuesday" @if($schedule->schedule_day == 'tuesday') checked @endif>
                                                <label class="form-check-label" for="tuesday">
                                                    Tuesday
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="wednesday" id="wednesday" @if($schedule->schedule_day == 'wednesday') checked @endif>
                                                <label class="form-check-label" for="wednesday">
                                                    Wednesday
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="thursday" id="thursday" @if($schedule->schedule_day == 'thursday') checked @endif>
                                                <label class="form-check-label" for="thursday">
                                                    Thursday
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="radio" name="schedule_day" value="friday" id="friday" @if($schedule->schedule_day == 'friday') checked @endif>
                                                <label class="form-check-label" for="friday">
                                                    Friday
                                                </label>
                                            </div>
                                        </div>
                                        @error('schedule_day')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Update</button>
                                <button type="reset" class="btn btn-danger">Reset form</button>
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
