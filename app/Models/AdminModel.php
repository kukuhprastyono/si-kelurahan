<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_surat')->get();
    }

    public function detailData($id_surat)
    {
        return DB::table('tbl_surat')->where('id_surat', $id_surat)->first();
    }

    public function addData($data)
    {
        return DB::table('tbl_surat')->insert($data);
    }
}
