@extends('layouts.master')
@section('title', 'CCTV Edit')
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2 border-bottom">
            <li class="breadcrumb-item"><a href="{{ route('cctv') }}">Cctv</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cctv Edit</li>

        </ol>
    </nav>
    <div class="container">
        <div class="card">
            <div class="card-header bg-aypao-header text-white ">
                แก้ไขข้อมูล
            </div>
            <form action="{{ route('cctv_update', ['id' => $cctv->id]) }}" method="post">
                @csrf

                <div class="card-body">
                    <div class="row">
                        {{-- col บัตร --}}
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header bg-aypao-header-sub">
                                    ข้อมูลส้่วนบุคคล
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="cid">เลขประจำตัวประชาชน</label>
                                                    <input type="text" class="form-control" name="cid" id="cid"
                                                        value="{{ $cctv->cus_cid }}" placeholder="cid">
                                                </div>
                                                <div class="col-2">
                                                    <label for="age">อายุ</label>
                                                    <input type="text" class="form-control" name="age" id="age"
                                                        value="{{ $cctv->cus_age }}">
                                                </div>

                                                <div class="col-3">
                                                    <label for="mobile">เบอร์ติดต่อ</label>
                                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                                        value="{{ $cctv->cus_tel }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="title">คำนำ</label>
                                                    <input type="text" class="form-control" name="title" id="title"
                                                        value="{{ $cctv->cus_tname }}">
                                                </div>
                                                <div class="col-5">
                                                    <label for="first_name">ชื่อ</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" placeholder="ชื่อ" value="{{ $cctv->cus_fname }}">
                                                </div>
                                                <div class="col-5">
                                                    <label for="last_name">นามสกุล</label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name"
                                                        placeholder="นามสกุล" value="{{ $cctv->cus_lname }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="email">ที่อยู่</label>
                                                <input type="text" class="form-control" name="location" id="location"
                                                    placeholder="ที่อยู่ติดต่อได้" value="{{ $cctv->cus_addr }}">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            {{-- end col บัตร --}}
                        </div>
                    </div>
                    <div class="row mt-3">

                        {{-- col ฝั่งขวา --}}
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header bg-aypao-header-sub">
                                    ข้อมูลบริการ

                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        @error('service_type')
                                            <div class="my-2">
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                                        <div class="col-12">
                                            <div class="p-1 border bg-light">
                                                <p><ins>วัตถุประสงค์ในการขอใช้บริการ</ins></p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="service_type"
                                                        id="service_type1" value="1"
                                                        {{ $cctv->service_type == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="service_type1">
                                                        ขอดูข้อมูลการบันทึกภาพกล้องโทรทัศน์วงจรปิด
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="service_type"
                                                        id="service_type2" value="2"
                                                        {{ $cctv->service_type == '2' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="service_type2">
                                                        ขอสำเนาแฟ้มภาพ บันทึกโดย
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- //// subtype list --}}
                                        <div id="sub_type_list" class="subtype">
                                            <div class="col-12 ">
                                                <div class="p-1 border bg-light">
                                                    <div class="container ms-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_suptype_id[]" id="service_suptype_id1"
                                                                value="1" @php
                                                                    $check1 = in_array('1', $service_subtype_id[0]);
                                                                    if ($check1) {
                                                                        echo 'checked';
                                                                    }
                                                                @endphp>
                                                            <label class="form-check-label" for="service_suptype_id1">
                                                                ขอถ่ายวีดีโอด้วยโทรศัพย์มือถือ
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_suptype_id[]" id="service_suptype_id2"
                                                                value="2" @php

                                                                    $check2 = in_array('2', $service_subtype_id[0]);
                                                                    if ($check2) {
                                                                        echo 'checked';
                                                                    }
                                                                @endphp>
                                                            <label class="form-check-label" for="service_suptype_id2">
                                                                อุปกรณ์จัดเก็บข้อมูลภายนอก (External Hardisk)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_suptype_id[]" id="service_suptype_id3"
                                                                value="3" @php
                                                                    $check3 = in_array('3', $service_subtype_id[0]);
                                                                    if ($check3) {
                                                                        echo 'checked';
                                                                    }
                                                                @endphp>
                                                            <label class="form-check-label" for="service_suptype_id3">
                                                                แผ่นดิจิทัลอเนกประสงค์ชนิดบันทึกได้ (DVD-R)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- //// end subtype list --}}
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">

                                            <div class="p-1 border bg-light">
                                                <p><ins>ข้อมูลเหตุการ</ins></p>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <label for="cctv_event_date"
                                                            class="form-label">วันที่เกิดเหตุ</label>
                                                        <input name="cctv_event_date" id="cctv_event_date"
                                                            class="cctv_event_date form-control" required
                                                            value="{{ $cctv->cctv_event_date }}" />
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="cctv_event_time"
                                                            class="form-label">เวลาที่เกิดเหตุ</label>
                                                        {{-- <input id="cctv_event_time" name="cctv_event_time" width="150" /> --}}
                                                        <input class="form-control" type="text" name="cctv_event_time"
                                                            value="{{ $cctv->cctv_event_time }}" id="cctv_event_time"
                                                            placeholder="เวลาโดยประมาณ..." required>

                                                    </div>
                                                    <div class="col-7">
                                                        <label for="cctv_event_area" class="form-label">บริเวณ</label>
                                                        <input type="text" class="form-control" name="cctv_event_area"
                                                            id="cctv_event_area" required
                                                            value="{{ $cctv->cctv_event_area }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">

                                                        <label for="cctv_event_info">เนื่องจาก</label>
                                                        <textarea class="form-control" id="cctv_event_info"
                                                            name="cctv_event_info" rows="2"
                                                            required>{{ $cctv->cctv_event_info }}</textarea>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    {{-- person data --}}
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="p-1 border bg-light">
                                                <p><ins>สำหรับเจ้าหน้าที่</ins></p>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="person_type"
                                                                id="person_type1" value="1" required
                                                                {{ $cctv->person_type == '1' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="person_type1">
                                                                บุคคลทัวไป
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="person_type"
                                                                id="person_type2" value="2" required
                                                                {{ $cctv->person_type == '2' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="person_type2">
                                                                เจ้าหน้าที่ อบจ.อย.
                                                            </label>
                                                        </div>
                                                    </div>

                                                    {{-- //// type person out --}}

                                                    <div id="out_person" class="col-8 subtype">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="out_person_doc[]" id="out_person_doc1" value="1"
                                                                {{ in_array('1', $out_person_doc[0]) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="out_person_doc1">
                                                                สำเนาบันทึกแจ้งความ/บันทึกประจำวัน
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="out_person_doc[]" id="out_person_doc2" value="2"
                                                                {{ in_array('2', $out_person_doc[0]) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="out_person_doc2">
                                                                สำเนาบัตรประชาชน/หนังสือเดินทาง
                                                            </label>
                                                        </div>
                                                        <input class="form-control" type="text" name="out_person_etc"
                                                            id="out_person_etc" placeholder="อื่นๆ"
                                                            value="{{ $cctv->out_person_etc }}">
                                                    </div>
                                                    {{-- //// end type person out --}}

                                                    {{-- //// type person aypao --}}

                                                    <div id="aypao_person" class="col-8 subtype">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="aypao_person_doc" id="aypao_person_doc" value="1"
                                                                {{ $cctv->aypao_person_doc == '1' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="aypao_person_doc">
                                                                สำเนาบันทึกแจ้งความ/บันทึกประจำวัน
                                                            </label>
                                                        </div>
                                                        <input class="form-control" type="text" name="aypao_person_etc"
                                                            id="aypao_person_etc" placeholder="อื่นๆ"
                                                            value="{{ $cctv->aypao_person_etc }}">
                                                    </div>
                                                    {{-- //// end type person aypao --}}

                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="techno_event_type" id="techno_event_type1" value="1"
                                                                required
                                                                {{ $cctv->techno_event_type == '1' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="techno_event_type1">
                                                                พบเหตุการณ์
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="techno_event_type" id="techno_event_type2" value="2"
                                                                required
                                                                {{ $cctv->techno_event_type == '2' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="techno_event_type2">
                                                                ไมพบเหตุการณ์
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="form-check-label" for="techno_event_info">
                                                                    รายละเอียด
                                                                </label>
                                                                <input class="form-control" type="text"
                                                                    name="techno_event_info" id="techno_event_info"
                                                                    placeholder="รายละเอียด..."
                                                                    value="{{ $cctv->techno_event_info }}">
                                                            </div>
                                                        </div>

                                                        {{-- พบเหตุการณ์ --}}
                                                        <div id="got" class=" subtype">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="form-check-label"
                                                                        for="techno_event_cctv_num">
                                                                        Cam No.
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="techno_event_cctv_num"
                                                                        id="techno_event_cctv_num"
                                                                        placeholder="กล้องหมายเลข..."
                                                                        value="{{ $cctv->techno_event_cctv_num }}">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="form-check-label"
                                                                        for="techno_event_cctv_time">
                                                                        เวลาโดยประมาณ
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="techno_event_cctv_time"
                                                                        id="techno_event_cctv_time"
                                                                        placeholder="เวลาโดยประมาณ..."
                                                                        value="{{ $cctv->techno_event_cctv_time }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end พบเหตุการณ์ --}}
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label class="form-check-label" for="techno_event_etc">
                                                            รายละเอียดอื่นๆ
                                                        </label>
                                                        <input class="form-control" type="text" name="techno_event_etc"
                                                            id="techno_event_etc" placeholder="อื่น..."
                                                            value="{{ $cctv->techno_event_etc }}">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- end person data --}}

                                </div>
                            </div>
                        </div>
                        {{-- end ข้อมูลบริการ --}}


                        <div class="row py-2 d-flex justify-content-center">
                            <div class="col-3 ">
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



    @push('script') <script type="text/javascript" src="{{ asset('asset/js/js.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('asset/js/reconnecting-websocket.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('asset/js/websocket.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        {{-- time picker --}}
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> --}}
        {{-- end time picker --}}

        {{-- date picker --}}
        <link href="https://cdn.jsdelivr.net/bootstrap.datepicker-fork/1.3.0/css/datepicker3.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/bootstrap.datepicker-fork/1.3.0/js/bootstrap-datepicker.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.datepicker-fork/1.3.0/js/locales/bootstrap-datepicker.th.js">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.datepicker.defaults.language = 'th';
                $('.cctv_event_date').datepicker({
                    format: 'yyyy-mm-dd',
                });

            });

        </script>
        {{-- end date picker --}}
        <style type="text/css">
            .subtype {
                display: none;
            }

        </style>
    @endpush
    @push('script-footer')
        {{-- /////// from event --}}
        <script type="text/javascript">
            $(document).ready(function() {
                var service_type2 = document.getElementById("service_type2");
                var person_type2 = document.getElementById("person_type2");
                var person_type1 = document.getElementById("person_type1");
                var techno_event_type1 = document.getElementById("techno_event_type1");
                var techno_event_type2 = document.getElementById("techno_event_type2");

                if (service_type2.checked == true) {
                    $("#sub_type_list").show();
                }

                if (person_type1.checked == true) {
                    $("#out_person").show();
                    // $("#aypao_person_doc").prop("checked", false);
                    // $("#aypao_person_etc").val("");
                    // $("#aypao_person").hide();
                }
                if (person_type2.checked == true) {
                    // $("#out_person_doc1").prop("checked", false);
                    // $("#out_person_doc2").prop("checked", false);
                    // $("#out_person_etc").val("");
                    // $("#out_person").hide();
                    $("#aypao_person").show();
                }
                if (techno_event_type1.checked == true) {
                    $("#got").show();
                }
                // if (techno_event_type2 == true) {
                //     $("#got").hide();
                // }

                $("input[id=service_type2]").on("change", function() {
                    $("#sub_type_list").show();
                });
                $("input[id=service_type1]").on("change", function() {
                    $("#service_suptype_id1").prop("checked", false);
                    $("#service_suptype_id2").prop("checked", false);
                    $("#service_suptype_id3").prop("checked", false);
                    $("#sub_type_list").hide();
                });
                $("input[id=person_type1]").on("change", function() {
                    $("#out_person").show();
                    $("#aypao_person_doc").prop("checked", false);
                    $("#aypao_person_etc").val("");
                    $("#aypao_person").hide();
                });
                $("input[id=person_type2]").on("change", function() {
                    $("#out_person_doc1").prop("checked", false);
                    $("#out_person_doc2").prop("checked", false);
                    $("#out_person_etc").val("");
                    $("#out_person").hide();
                    $("#aypao_person").show();

                });
                $("input[id=techno_event_type1]").on("change", function() {
                    $("#got").show();

                });
                $("input[id=techno_event_type2]").on("change", function() {
                    $("#got").hide();
                    $("#techno_event_cctv_num").val("");
                    $("#techno_event_cctv_time").val("");
                });
            });

        </script>
    @endpush
@endsection
