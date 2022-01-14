<?php

namespace App\Http\Controllers;

use App\Models\CctvSettingProject;
use Illuminate\Http\Request;

class CctvsettingController extends Controller
{
    public function index()
    {

        return view('cctv_setting.index');
    }

    ///////////////project///////////////////
    public function setting_project()
    {
        $data = CctvSettingProject::all();
        return view('cctv_setting.setting_project', compact('data'));
    }
    public function setting_project_insert(Request $request)
    {
        $project = new CctvSettingProject;
        $project->cctv_setting_project_name = $request->cctv_setting_project_name;
        $project->save();
        $data = CctvSettingProject::all();
        return redirect()->route('cctv_setting_project');
    }
    public function setting_project_edit($id)
    {
        $data = CctvSettingProject::all();
        return view('cctv_setting.setting_project', compact('data'));
    }
    ////////////////end project/////////////

    public function setting_ipc()
    {
        return view('cctv_setting.setting_ipc');
    }
}
