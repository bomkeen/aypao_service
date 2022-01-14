@extends('layouts.setting')
@section('title', 'CCTV-setting-project')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('cctv_setting') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">ข้อมูลโครงการ</li>
        </ol>
    </nav>
    <h5 class="display-5 fw-bold">ข้อมูลโครงการ</h5>
    <div class="container">

        <div class="card">
            <form action="{{ route('setting_project_insert') }}" method="post">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-4 ">
                            <input type="text" class="form-control" name="cctv_setting_project_name"
                                id="cctv_setting_project_name">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-block btn-primary">เพิ่มข้อมูล</button>
                        </div>
                    </div>
                </div>

        </div>



        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <table class="table ">
                        <thead class="bg-aypao-header-sub">
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">ชื่อโครงการ</th>
                                <th scope="col">แก้ไขข้อมูล</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $row)

                                <tr>
                                    <td>{{ $row->cctv_setting_project_id }}</td>
                                    <td>{{ $row->cctv_setting_project_name }}</td>

                                    <td>
                                        <a href="{{ route('setting_project_edit', ['id' => $row->cctv_setting_project_id]) }}"
                                            class="btn btn-outline-success"><span class="fas fa-edit"></span>
                                            แก้ไขข้อมูล</a>
                                    </td>

                                </tr>


                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    </form>
    </div>
    </div>

@endsection
