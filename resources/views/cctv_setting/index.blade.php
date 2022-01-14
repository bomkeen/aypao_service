@extends('layouts.setting')
@section('title', 'CCTV-setting')
@section('content')
    <h5 class="display-5 fw-bold">ตั้งค่าการใช้งานระบบ CCtv Data</h5>
    <div class="container pt-2">
        <a href="{{ route('cctv_setting_project') }}" class="btn btn-lg btn-outline-primary">ข้อมูลโครงการ</a>
        <a href="{{ route('cctv_setting_ipc') }}" class="btn btn-lg btn-outline-primary">ข้อมูลกล้อง</a>

        {{-- <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button> --}}
    </div>

@endsection
