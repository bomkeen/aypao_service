<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cctv_service extends Model
{

    use HasFactory;
    protected $fillable = [
        'cus_tname',
        'cus_fname',
        'cus_lname',
        'cus_cid',
        'cus_addr',
        'cus_tel',
        'cus_age',
        'service_type',
        'service_subtype_id',
        'cctv_event_area',
        'cctv_event_date',
        'cctv_event_time',
        'cctv_event_info',
        'person_type',
        'out_person_doc',
        'out_person_etc',
        'aypao_person_doc',
        'aypao_person_etc',
        'techno_event_type',
        'techno_event_cctv_num',
        'techno_event_info',
        'techno_event_etc',
        'techno_event_cctv_time'
    ];
}
