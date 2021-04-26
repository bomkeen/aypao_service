@extends('layouts.master')
@section('title', 'CCTV add')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2 border-bottom">
            <li class="breadcrumb-item"><a href="{{ route('cctv') }}">Cctv</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cctv Add</li>

        </ol>
    </nav>
    <div class="container">

        <div class="card">
            <div class="card-header bg-aypao-header text-white">
                บันทึกข้อมูล
            </div>
            <form action="{{ route('cctv_insert') }}" method="post">
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
                                        <div class="col-3">
                                            <div class="text-center">
                                                <img id="myImg"
                                                    src="data:image/jpeg;base64,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"
                                                    class="avatar img-thumbnail"
                                                    style="max-height: 188px; overflow: hidden;" alt="avatar">
                                            </div>
                                        </div>

                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="cid">เลขประจำตัวประชาชน</label>
                                                    <input type="text" class="form-control" name="cid" id="cid"
                                                        placeholder="cid">
                                                </div>
                                                <div class="col-2">
                                                    <label for="age">อายุ</label>
                                                    <input type="text" class="form-control" name="age" id="age">
                                                </div>
                                                <div class="col-3">
                                                    <label for="birthdate">วันเกิด</label>
                                                    <input type="text" class="form-control" name="birthdate" id="birthdate">
                                                </div>
                                                <div class="col-3">
                                                    <label for="mobile">เบอร์ติดต่อ</label>
                                                    <input type="text" class="form-control" name="mobile" id="mobile">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="title">คำนำ</label>
                                                    <input type="text" class="form-control" name="title" id="title">
                                                </div>
                                                <div class="col-5">
                                                    <label for="first_name">ชื่อ</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" placeholder="ชื่อ">
                                                </div>
                                                <div class="col-5">
                                                    <label for="last_name">นามสกุล</label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name"
                                                        placeholder="นามสกุล">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="email">ที่อยู่</label>
                                                <input type="text" class="form-control" name="location" id="location"
                                                    placeholder="ที่อยู่ติดต่อได้">
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
                                                        id="service_type1" value="1">
                                                    <label class="form-check-label" for="service_type1">
                                                        ขอดูข้อมูลการบันทึกภาพกล้องโทรทัศน์วงจรปิด
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="service_type"
                                                        id="service_type2" value="2">
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
                                                                value="1">
                                                            <label class="form-check-label" for="service_suptype_id1">
                                                                ขอถ่ายวีดีโอด้วยโทรศัพย์มือถือ
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_suptype_id[]" id="service_suptype_id2"
                                                                value="2">
                                                            <label class="form-check-label" for="service_suptype_id2">
                                                                อุปกรณ์จัดเก็บข้อมูลภายนอก (External Hardisk)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_suptype_id[]" id="service_suptype_id3"
                                                                value="3">
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
                                                            class="cctv_event_date form-control" />
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="cctv_event_time"
                                                            class="form-label">เวลาที่เกิดเหตุ</label>
                                                        {{-- <input id="cctv_event_time" name="cctv_event_time" width="150" /> --}}
                                                        <input class="form-control" type="text" name="cctv_event_time"
                                                            id="cctv_event_time" placeholder="เวลาโดยประมาณ...">

                                                    </div>
                                                    <div class="col-7">
                                                        <label for="cctv_event_area" class="form-label">บริเวณ</label>
                                                        <input type="text" class="form-control" name="cctv_event_area"
                                                            id="cctv_event_area">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">

                                                        <label for="cctv_event_info">เนื่องจาก</label>
                                                        <textarea class="form-control" id="cctv_event_info"
                                                            name="cctv_event_info" rows="2"></textarea>

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
                                                                id="person_type1" value="1" required>
                                                            <label class="form-check-label" for="person_type1">
                                                                บุคคลทัวไป
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="person_type"
                                                                id="person_type2" value="2" required>
                                                            <label class="form-check-label" for="person_type2">
                                                                เจ้าหน้าท่ี่ อบจ.อย.
                                                            </label>
                                                        </div>
                                                    </div>

                                                    {{-- //// type person out --}}

                                                    <div id="out_person" class="col-8 subtype">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="out_person_doc" id="out_person_doc1" value="1">
                                                            <label class="form-check-label" for="out_person_doc1">
                                                                สำเนาบันทึกแจ้งความ/บันทึกประจำวัน
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="out_person_doc" id="out_person_doc2" value="2">
                                                            <label class="form-check-label" for="out_person_doc2">
                                                                สำเนาบัตรประชาชน/หนังสือเดินทาง
                                                            </label>
                                                        </div>
                                                        <input class="form-control" type="text" name="out_person_etc"
                                                            id="out_person_etc" placeholder="อื่นๆ">
                                                    </div>
                                                    {{-- //// end type person out --}}

                                                    {{-- //// type person aypao --}}

                                                    <div id="aypao_person" class="col-8 subtype">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="aypao_person_doc" id="aypao_person_doc" value="1">
                                                            <label class="form-check-label" for="aypao_person_doc">
                                                                สำเนาบันทึกแจ้งความ/บันทึกประจำวัน
                                                            </label>
                                                        </div>
                                                        <input class="form-control" type="text" name="aypao_person_etc"
                                                            id="aypao_person_etc" placeholder="อื่นๆ">
                                                    </div>
                                                    {{-- //// end type person aypao --}}

                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="techno_event_type" id="techno_event_type1" value="1">
                                                            <label class="form-check-label" for="techno_event_type1">
                                                                พบเหตุการณ์
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="techno_event_type" id="techno_event_type2" value="2">
                                                            <label class="form-check-label" for="techno_event_type2">
                                                                ไมพบเหตุการณ์
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <input class="form-control" type="text"
                                                                    name="techno_event_info" id="techno_event_info"
                                                                    placeholder="รายละเอียด...">
                                                            </div>
                                                        </div>

                                                        {{-- พบเหตุการณ์ --}}
                                                        <div id="got" class=" subtype">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input class="form-control" type="text"
                                                                        name="techno_event_cctv_num"
                                                                        id="techno_event_cctv_num"
                                                                        placeholder="กล้องหมายเลข...">
                                                                </div>
                                                                <div class="col-6">
                                                                    <input class="form-control" type="text"
                                                                        name="techno_event_cctv_time"
                                                                        id="techno_event_cctv_time"
                                                                        placeholder="เวลาโดยประมาณ...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end พบเหตุการณ์ --}}
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="techno_event_etc"
                                                            id="techno_event_etc" placeholder="อื่น...">
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
        <script>
            $("#connectBtn").click(function(event) {
                wstool.connect();
                return false;
            });

            $("#resetBtn").click(function(event) {

                console.log("reset btn click");
                clearForm();
            });

            function clearForm() {
                $("#card_reader_no").val("");
                $("#cid").val("");
                $("#title").val("");
                $("#first_name").val("");
                $("#last_name").val("");
                $("#location").val("");
                $("#birthdate").val("");
                $("#age").val("");

                $("#mobile").val("");
                $("#process_time").val("");

                $("#card_reader_no1").val("");
                $("#cid1").val("");
                $("#title1").val("");
                $("#first_name1").val("");
                $("#last_name1").val("");

                $("#location1").val("");
                $("#birthdate1").val("");
                $("#age1").val("");

                $("#mobile1").val("");
                $("#process_time1").val("");
                document.getElementById("myImg").src =
                    'data:image/png;base64, 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';
            }
            clearForm();
            wstool.connect();

        </script>

        {{-- /////// from event --}}
        <script type="text/javascript">
            $(document).ready(function() {
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
        {{-- /////// end from event --}}

        {{-- time picker --}}
        {{-- <script>
            $('#cctv_event_time').timepicker({
                mode: '24hr',
                // uiLibrary: 'bootstrap'
            });

        </script> --}}
        {{-- time picker --}}

    @endpush
@endsection
