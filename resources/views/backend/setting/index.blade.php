@extends('layouts.backend.app')

@section('title') Setting @endsection

@section('bread-crumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Settings Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Settings Page</li>
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
                    <h4 class="mb-0 text-white">Setting</h4>
                </div>
                <form action="{{ route('backend.setting') }}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Site Settings</h4>
                    </div>
                    <hr>
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="number" name="mobile" placeholder="Companies Mobile Number" value="{{ get_static_option('mobile') }}" id="mobile" class="form-control">
                                            @error('mobile')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" placeholder="Companies Email" value="{{ get_static_option('email') }}" id="email" class="form-control">
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                    <label for="address">Address</label>
                                            <textarea class="form-control" name="address"  id="address">{{ get_static_option('address') }}</textarea>
                                            @error('address')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook"  value="{{ get_static_option('facebook') }}" id="facebook" class="form-control">
                                            @error('facebook')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                            <input type="text" name="twitter" value="{{ get_static_option('twitter') }}" id="twitter" class="form-control">
                                            @error('twitter')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                            <input type="text" name="linkedin" value="{{ get_static_option('linkedin') }}" id="linkedin" class="form-control">
                                            @error('linkedin')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="google">Google</label>
                                            <input type="text" name="google" value="{{ get_static_option('google') }}" id="google" class="form-control">
                                            @error('google')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="rss">RSS</label>
                                            <input type="text" name="rss" value="{{ get_static_option('rss') }}" id="rss" class="form-control">
                                            @error('rss')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="facebook">Youtube</label>
                                            <input type="text" name="youtube" value="{{ get_static_option('youtube') }}" id="youtube" class="form-control">
                                            @error('youtube')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->

                            <!--/row-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="twitter">Instagram</label>
                                            <input type="text" name="instagram" value="{{ get_static_option('instagram') }}" id="instagram" class="form-control">
                                            @error('instagram')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                </div>
                                <!--/span-->
                                <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="banner_image">Logo image</label>
                                            <input type="file" name="logo" value="{{ get_static_option('logo') }}" id="logo" class="form-control">
                                            <div class="image">
                                                <img src="{{ asset(get_static_option('logo')) }}" width="100" class="img-circle elevation-2">
                                            </div>
                                            @error('logo')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                    <label for="facebook_page_id">Facebook page ID</label>
                                            <input type="text" name="facebook_page_id" value="{{ get_static_option('facebook_page_id') }}" id="facebook_page_id" class="form-control">
                                            @error('facebook_page_id')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="facebook_page_access_token">Facebook page Access token</label>
                                            <input type="text" name="facebook_page_access_token" value="{{ get_static_option('facebook_page_access_token') }}" id="facebook_page_access_token" class="form-control">
                                            @error('facebook_page_access_token')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">


                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                            <h4>Opening Hours</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="facebook_page_access_token">Day</label>
                                <input type="text" name="line1" placeholder="Saturday-Sunday" value="{{ get_static_option('line1') }}" id="line1" class="form-control">
                                <input type="text" name="line2" placeholder="Saturday-Sunday" value="{{ get_static_option('line2') }}" id="line2" class="form-control">
                                <input type="text" name="line3" placeholder="Saturday-Sunday" value="{{ get_static_option('line3') }}" id="line3" class="form-control">


                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="facebook_page_access_token">Time</label>
                                <input type="text" name="time1" placeholder="1:00 AM-3:00PM" value="{{ get_static_option('time1') }}" id="time1" class="form-control">
                                <input type="text" name="time2" placeholder="1:00 AM-3:00PM" value="{{ get_static_option('time2') }}" id="time2" class="form-control">
                                <input type="text" name="time3" placeholder="1:00 AM-3:00PM" value="{{ get_static_option('time3') }}" id="time3" class="form-control">

                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="address">About Company</label>
                                            <textarea class="ckeditor form-control" name="about">{{ get_static_option('about') }}</textarea>
                                            @error('about')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">


                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="address">Minimum Advance Amount</label>
                                         <input type="number" name="advance_amount" value="{{ get_static_option('advance_amount') }}" id="advance_amount" class="form-control">
                                            @error('advance_amount')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="address">Message</label>
                                            <textarea class="form-control" name="advance_message">{{ get_static_option('advance_message') }}</textarea>
                                            @error('advance_message')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror


                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <h4>Bridal Offer Section</h4>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="address">Title</label>
                                         <input type="text" name="offer_title" value="{{ get_static_option('offer_title') }}" id="offer_title" class="form-control">
                                            @error('offer_title')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                               
                                <!--/span-->
                                <div class="col-md-6">
                                <div class="form-group">

                                <label for="address">SubTitle</label>
                                         <input type="text" name="offer_subtitle" value="{{ get_static_option('offer_subtitle') }}" id="offer_subtitle" class="form-control">
                                            @error('offer_subtitle')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror


                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="address">Description</label>
                                            <textarea class="form-control" name="offer_details">{{ get_static_option('offer_details') }}</textarea>
                                            @error('offer_details')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                               
                                <!--/span-->
                                <div class="col-md-6">
                                <div class="form-group">

                                <label for="address">Link</label>
                                         <input type="text" name="offer_link" value="{{ get_static_option('offer_link') }}" id="offer_link" class="form-control">
                                            @error('offer_link')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror


                                </div>
                                <!--/span-->
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="banner_image">Backgorund image</label>
                                            <input type="file" name="offer_image" value="{{ get_static_option('offer_image') }}" id="offer_image" class="form-control">
                                            <div class="image">
                                                <img src="{{ asset(get_static_option('offer_image')) }}" width="100" class="img-circle elevation-2">
                                            </div>
                                            @error('offer_image')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <h4>Brand Video Link</h4>
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="address">Link</label>
                                            <input type="text" name="brand_link" value="{{ get_static_option('brand_link') }}" id="brand_link" class="form-control">
                                                @error('brand_link')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" name="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                                <button type="reset" class="btn btn-danger">Reset form</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection

@push('head')

@endpush

@push('foot')

@endpush
