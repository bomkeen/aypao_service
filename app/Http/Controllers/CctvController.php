<?php

namespace App\Http\Controllers;

use App\Models\Cctv_service;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CctvController extends Controller
{
    public function index()
    {
        $cctv = Cctv_service::all();
        $cctv = Cctv_service::paginate(3);
        Paginator::useBootstrap();
        return view('cctv.index', compact('cctv'));
    }
    public function add()
    {

        return view('cctv.add');
    }
    public function edit($id)
    {
        $cctv = Cctv_service::find($id);
        $service_subtype_id[] = explode(",", $cctv->service_subtype_id);
        $out_person_doc[] = explode(",", $cctv->out_person_doc);
        return view('cctv.edit', compact('cctv', 'service_subtype_id', 'out_person_doc'));
    }
    public function update(Request $request, $id)
    {
        $cctv = Cctv_service::find($id);
        // cus data
        $cctv->cus_tname = $request->title;
        $cctv->cus_fname = $request->first_name;
        $cctv->cus_lname = $request->last_name;
        $cctv->cus_cid = $request->cid;
        $cctv->cus_age = $request->age;
        $cctv->cus_tel = $request->mobile;
        $cctv->cus_addr = $request->location;
        // end cus data
        // service data
        if ($request->service_type == 1) {
            $service_subtype_id = 0;
        } else {
            $service_subtype_id = implode(',', $request->service_suptype_id);
        }

        $cctv->service_type = $request->service_type;
        $cctv->service_subtype_id = $service_subtype_id;
        // end service data

        // cctv event data
        $cctv->cctv_event_area = $request->cctv_event_area;
        $cctv->cctv_event_date = $request->cctv_event_date;
        $cctv->cctv_event_time = $request->cctv_event_time;
        $cctv->cctv_event_info = $request->cctv_event_info;
        // end cctv event data

        // person data
        if ($request->person_type == 1) {
            $out_person_doc = implode(',', $request->out_person_doc);
        } else {

            $out_person_doc = 0;
        }
        $cctv->person_type = $request->person_type;
        $cctv->out_person_doc = $out_person_doc;
        $cctv->out_person_etc = $request->out_person_etc;
        $cctv->aypao_person_doc = $request->aypao_person_doc;
        $cctv->aypao_person_etc = $request->aypao_person_etc;

        // end person data

        // techno data
        $cctv->techno_event_type = $request->techno_event_type;
        $cctv->techno_event_cctv_num = $request->techno_event_cctv_num;
        $cctv->techno_event_info = $request->techno_event_info;
        $cctv->techno_event_etc = $request->techno_event_etc;
        $cctv->techno_event_cctv_time = $request->techno_event_cctv_time;

        // end techno data
        $cctv->save();
        return redirect()->route('cctv');
    }
    public function insert(Request $request)
    {
        ///ตรวจสอบข้อมูล
        $request->validate(
            [
                'service_type' => 'required',
            ],
            [
                'service_type.required' => 'โปรดเลือก วัตถุประสงค์ในการขอใช้บริการ',
                // 'department_name.required' => 'ค่าแผนกต้องไปม่เป็นค่าว่าง',
                // 'department_name.max' => 'ห้ามป้อนเกิน 255 ตัวอักษร',
                // 'department_name.unique' => 'ชื่อแผนกมีใช้อยู่แล้ว',
            ]
        );
        $cctv = new Cctv_service();
        // cus data
        $cctv->cus_tname = $request->title;
        $cctv->cus_fname = $request->first_name;
        $cctv->cus_lname = $request->last_name;
        $cctv->cus_cid = $request->cid;
        $cctv->cus_age = $request->age;
        $cctv->cus_tel = $request->mobile;
        $cctv->cus_addr = $request->location;
        // end cus data
        // service data
        if ($request->service_type == 1) {
            $service_subtype_id = 0;
        } else {
            $service_subtype_id = implode(',', $request->service_suptype_id);
        }

        $cctv->service_type = $request->service_type;
        $cctv->service_subtype_id = $service_subtype_id;
        // end service data

        // cctv event data
        $cctv->cctv_event_area = $request->cctv_event_area;
        $cctv->cctv_event_date = $request->cctv_event_date;
        $cctv->cctv_event_time = $request->cctv_event_time;
        $cctv->cctv_event_info = $request->cctv_event_info;
        // end cctv event data

        // person data
        if ($request->person_type == 1) {
            $out_person_doc = implode(',', $request->out_person_doc);
        } else {

            $out_person_doc = 0;
        }
        $cctv->person_type = $request->person_type;
        $cctv->out_person_doc = $out_person_doc;
        $cctv->out_person_etc = $request->out_person_etc;
        $cctv->aypao_person_doc = $request->aypao_person_doc;
        $cctv->aypao_person_etc = $request->aypao_person_etc;

        // end person data

        // techno data
        $cctv->techno_event_type = $request->techno_event_type;
        $cctv->techno_event_cctv_num = $request->techno_event_cctv_num;
        $cctv->techno_event_info = $request->techno_event_info;
        $cctv->techno_event_etc = $request->techno_event_etc;
        $cctv->techno_event_cctv_time = $request->techno_event_cctv_time;

        // end techno data
        $cctv->save();

        return view('cctv.index');
    }
}
