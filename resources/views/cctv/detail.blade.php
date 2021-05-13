@extends('layouts.master')
@section('title', 'CCTV Edit')
@section('content')
    {{-- @include('inc.thaidate') --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2 border-bottom">
            <li class="breadcrumb-item"><a href="{{ route('cctv') }}">Cctv</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cctv Detail</li>

        </ol>
    </nav>
    <div class="container">
        <div class="card">
            <div class="card-header bg-aypao-header text-white">
                รายละเอียด ::
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-5 ">
                        <div class="card">
                            <div class="card-header bg-aypao-header-sub text-white">
                                ข้อมูลผู้ขอใช้บริการ
                            </div>
                            <div class="card-body">
                                <ul class="list-style9 no-margin">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                {{-- <i class="fas fa-align-justify text-aypao"></i> --}}
                                                <strong class="margin-10px-left text-aypao">ชื่อ-สกุล:</strong>
                                            </div>
                                            <div class="col-md-8 col-8">
                                                <p>{{ $cctv->cus_tname }} {{ $cctv->cus_fname }}
                                                    {{ $cctv->cus_lname }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                {{-- <i class="fas fa-align-justify text-aypao"></i> --}}
                                                <strong class="margin-10px-left text-aypao">ที่อยู่:</strong>
                                            </div>
                                            <div class="col-md-8 col-8">
                                                <p>{{ $cctv->cus_addr }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                <i class="fas fa-phone-alt text-aypao"></i>
                                                <strong class="margin-10px-left text-aypao">:</strong>
                                            </div>
                                            <div class="col-md-8 col-8">
                                                <p>{{ $cctv->cus_tel }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 ">
                        <div class="card">
                            <div class="card-header bg-orange text-white">
                                ข้อมูลบริการ
                            </div>
                            <div class="card-body">
                                <ul class="list-style9 no-margin">

                                    <li>
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                {{-- <i class="fas fa-graduation-cap text-orange"></i> --}}
                                                <strong class="margin-10px-left text-orange">การขอใช้บริการ
                                                    :</strong>
                                            </div>
                                            <div class="col-md-8 col-8">
                                                <p>
                                                    @if ($cctv->service_type == 1)
                                                        ขอดูข้อมูลการบันทึกภาพกล้องโทรทัศน์วงจรปิด
                                                    @else
                                                        ขอสำเนาแฟ้มภาพ
                                                        @foreach ($service_subtype as $item)
                                                            <p> -- {{ $item->service_suptype_name }}</p>
                                                        @endforeach
                                                    @endif

                                                </p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-3 col-3">
                                                <i class="bi-alarm"></i>
                                                <strong class="margin-10px-left text-orange">ข้อมูลเหตุการณ์ :</strong>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                <i class="far fa-calendar-alt text-orange"></i>
                                                <strong class="margin-10px-left">: {{ $cctv->cctv_event_date }}</strong>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')

        <style>
            .bg-orange {
                background-color: #ffbb93;
                /* border-color: #ff0080; */

            }

            .text-orange {
                color: #e95601
            }

            .text-aypao {
                color: #ff53ff
            }

            .list-style9 {
                list-style: none;
                padding: 0
            }

            .list-style9 li {
                position: relative;
                padding: 0 0 0 0;
                margin: 0 0 10px 0;
                border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
            }

            .list-style9 li:last-child {
                border-bottom: none;
                padding-bottom: 0;
                margin-bottom: 0
            }

        </style>
    @endpush
@endsection
