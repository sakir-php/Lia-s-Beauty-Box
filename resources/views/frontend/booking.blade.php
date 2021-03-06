@extends('layouts.frontend.app')
@push('title') Booking @endpush
@section('content')
    <!-- INNER PAGE BANNER -->
   <!-- <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/frontend/images/banner/product-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Booking</h1>
            </div>
        </div>
    </div>-->
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Booking</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <!-- SIDE BAR START -->
                    <div class="col-md-3">
                        <aside class="side-bar">
                            <!-- 2. RECENT POSTS -->
                            <div class="widget bg-white  recent-posts-entry">
                                <h4 class="widget-title">Booking</h4>
                                <div class="section-content">
                                    <div class="wt-tabs tabs-default border">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab"
                                                    href="#web-design-1">Calendar</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="web-design-1" class="tab-pane active ">
                                                <div class="widget-post-bx">
                                                    <div class="calendar-wrapper">{{-- Calender show using jQuery --}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </aside>

                    </div>
                    <!-- SIDE BAR END -->
                    <div class="col-md-9">
                        <!-- TITLE START -->
                        <div class="p-b10">
                            <h3 class="text-uppercase">Available Schedule</h3>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <div class="row" id="schedule">
                            {{-- Schedules show using jQuery --}}
                            <div class="alert alert-success text-center m-3"
                                style="border: 2px solid red; padding: 10px; border-radius: 50px 20px;" role="alert">
                                <h3>Please pick a date from calendar</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

    <div class="modal fade" id="booking_modal" aria-hidden="true" aria-labelledby="booking_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="schedule_title">Title</h5>
                    <b class="modal-title" id="schedule_date">Date</b> &nbsp; <b class="modal-title"
                        id="schedule_time">Sub Title</b>
                </div>
                <div class="modal-body">
                    <div class="m-a30 wt-box border-2">
                        {{-- date value set by jQuery --}}
                        <input type="hidden" id="appointment_data" name="appointment_data">
                        <input type="hidden" id="schedule_id" name="schedule">
                        <form class="cons-contact-form" id="appointment_form">
                            <div class="row">
                                @guest
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input name="name" type="text" required="" class="form-control"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input name="phone" type="text" required="" class="form-control"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="email" type="email" class="form-control" required=""
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                        <input type="text"  name="address" class="form-control" placeholder="Address" >

                                        </div>
                                    </div>
                                </div>
                                @endguest
                                <div class="col-md-12">
                                    <h5><i>{{ get_static_option('advance_message') }}</i></h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="transaction_id" type="text" class="form-control" required=""
                                                placeholder="Transaction ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            <input name="advance_amount" type="number" class="form-control" required=""
                                                placeholder="Minimum Advance {{ get_static_option('advance_amount') }} Taka">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                            <select name="service" class="form-control" required="">
                                                <option value="" selected disabled>Please chose a service</option>
                                                @foreach ($serviceCategories as $serviceCategory)
                                                    <optgroup label="{{ $serviceCategory->name }}">
                                                        @foreach ($serviceCategory->services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                            <textarea name="message" rows="4" class="form-control " required=""
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-right">
                                    <button name="submit" type="button" class="site-button  m-r15"
                                        id="appointment_submit_btn">Submit <i
                                            class="fa fa-angle-double-right"></i></button>
                                    <button name="Resat" type="reset" class="site-button ">Reset <i
                                            class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/frontend/calender/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/calender/theme.css') }}">
    <style>
        .schedule-box:hover {
            cursor: pointer;
            border: 2px solid #06ec5c;
            padding: 1px;
            border-radius: 12px;
        }

    </style>
@endpush

@push('foot')
    <script src="{{ asset('assets/frontend/calender/calendar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <script type="text/javascript">
        function selectDate(date) {

            $('.calendar-wrapper').updateCalendarOptions({
                date: date
            });

            // console.log(moment(new Date(date)).format("DD-MM-YYYY"));
            $('#appointment_data').val(moment(new Date(date)).format("DD-MM-YYYY"));

            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "{{ route('booking') }}",
                data: {
                    request_for: 'Schedules by Date',
                    appointment_data: moment(new Date(date)).format("DD-MM-YYYY"),
                },
                success: function(response) {
                    $('#schedule').html('')
                    $.each(response.schedules, function(schedule_index, schedule) {
                        var schedule_counter = 0;
                        $('#schedule_id').val(schedule.id);
                      var strtime= (new Date("1/1/1900 "+schedule.starting_time).toLocaleString()).split(',');
                      var starting_time =strtime[1];
                        var endtime = (new Date("1/1/1900 " + schedule.ending_time).toLocaleString()).split(',');
                        var ending_time=endtime[1];
                        var title = schedule.title;
                        var maximum_participant = schedule.maximum_participant;
                        var html = `<div class="widget bg-white recent-posts-entry schedule-box btn waves-effect waves-light btn-outline-primary"
                        onclick="bookingModal(` + schedule.id + `)">
                                    <div class="widget-post-bx">
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="/assets/frontend/images/booking.png" width="200" height="143" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title">` + title + `</h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author">` + starting_time + ` to ` +
                            ending_time + `</li>
                                                        <li class="post-comment"><i class="fa fa-comments"></i> ` +
                            maximum_participant + `</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                        $('#schedule').append(html);
                    });
                }
            });
        }

        var defaultConfig = {
            weekDayLength: 1,
            date: new Date(),
            onClickDate: selectDate,
            showYearDropdown: true,
            startOnMonday: true,
        };

        $('.calendar-wrapper').calendar(defaultConfig);

        function bookingModal(schedule_id) {
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "{{ route('booking') }}",
                data: {
                    request_for: 'Schedule Details',
                    schedule_id: schedule_id,
                    appointment_data: $("#appointment_data").val(),
                },
                success: function(response) {
                    console.log(response);
                    if (response.booking_count <= response.schedule.maximum_participant) {
                        var strtime= (new Date("1/1/1900 "+response.schedule.starting_time).toLocaleString()).split(',');
                      var starting_time =strtime[1];
                        var endtime = (new Date("1/1/1900 " + response.schedule.ending_time).toLocaleString()).split(',');
                        var ending_time=endtime[1];
                        $('#schedule_title').text(response.schedule.title);
                        $('#schedule_date').text($("#appointment_data").val());
                        $('#schedule_time').text(starting_time + ' To ' + ending_time);
                        $('#schedule_id').val(response.schedule.id);
                        $('#booking_modal').modal('show');
                    } else {
                        alert('Housefull');
                    }
                }
            });
        }

        $('#appointment_submit_btn').click(function() {
            $.ajax({
                method: "POST",
                url: "{{ route('booking') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    appointment_data: $("#appointment_data").val(),
                    schedule: $('#schedule_id').val(),
                    name: $("#appointment_form [name='name']").val(),
                    email: $("#appointment_form [name='email']").val(),
                    address: $("#appointment_form [name='address']").val(),
                    phone: $("#appointment_form [name='phone']").val(),
                    transaction_id: $("#appointment_form [name='transaction_id']").val(),
                    advance_amount: $("#appointment_form [name='advance_amount']").val(),
                    service: $("#appointment_form [name='service']").val(),
                    message: $("#appointment_form [name='message']").val(),
                },
                dataType: 'JSON',
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(data) {
                    // console.log(data)
                    $('#appointment_form').trigger("reset");
                    Swal.fire({
                        icon: data.type,
                        title: data.message,
                    });
                    $('#booking_modal').modal('hide');
                },
                error: function(error) {
                    validation_error(error);
                },
            });
        });
    </script>
@endpush
