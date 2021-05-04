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
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($cctv as $row)

                                <tr>
                                    <td> {{ $i }}</td>
                                    <td>{{ $row->cus_fname }}</td>

                                    <td>{{ $row->cus_lname }}</td>

                                    <td>{{ $row->cctv_event_info }}</td>
                                    <td>
                                        <a href="{{ route('cctv_edit', ['id' => $row->id]) }}"
                                            class="btn btn-primary">แก้ไขข้อมูล</a>
                                    </td>

                                </tr>


                            @endforeach
                        </tbody>
                    </table>
                    {{ $cctv->links() }}
                </div>
            </div>
        </div>
    </div>


@endsection
