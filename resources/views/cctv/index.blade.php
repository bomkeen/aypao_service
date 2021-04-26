@extends('layouts.master')
@section('title', 'CCTV')
@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('cctv') }}">Cctv</a></li>

        </ol>
    </nav>

    <div class="container">
        <div class="card ">
            <div class="card-header Secondary">
                <h5>บันทึกการขอดูข้อมูล CCTV</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('cctv_add') }}" class="btn btn-outline-secondary">เพิ่มข้อมูล</a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
