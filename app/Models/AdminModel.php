<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_surat')
            ->get();
    }

    public function detailData($id_surat)
    {
        return DB::table('tbl_surat')->where('id_surat', $id_surat)->first();
    }

    public function addData($data)
    {
        return DB::table('tbl_surat')->insert($data);
    }

    public function editData($id_surat, $data)
    {
        return DB::table('tbl_surat')->where('id_surat', $id_surat)->update($data);
    }

    public function deleteData($id_surat)
    {
        return DB::table('tbl_surat')->where('id_surat', $id_surat)->delete();
    }

    public function totalData()
    {
        return DB::table('tbl_surat')->count();
    }

    public function totalDataPrinted()
    {
        return DB::table('tbl_surat')->where('status', 'printed')->count();
    }

    public function totalDataPending()
    {
        return DB::table('tbl_surat')->where('status', 'pending')->count();
    }

    public function totalDataRejected()
    {
        return DB::table('tbl_surat')->where('status', 'rejected')->count();
    }
}
