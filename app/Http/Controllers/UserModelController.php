<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserModelController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    // insert
    public function index()
    {
        return view('user.v_dashboardUser');
    }
    public function insertSurat()
    {
        
        Request()->validate([
            'nik'               =>  'required',
            'nomor_kk'          =>  'required',
            'nama_lengkap'      =>  'required',
            'jenis_kelamin'     =>  'required',
            'tempat_lahir'      =>  'required',
            'tanggal_lahir'     =>  'required',
            'agama'             =>  'required',
            'pekerjaan'         =>  'required',
            'tempat_tinggal'    =>  'required',
            'status_perkawinan' =>  'required',
            'keperluan'         =>  'required',
            'keterangan_lain'   =>  'required'
        ], [
            'nik.required'               =>  'NIK wajib diisi',
            'nomor_kk.required'          =>  'Nomor kk wajib diisi',
            'nama_lengkap.required'      =>  'Nama lengkap wajib diisi',
            'jenis_kelamin.required'     =>  'Jenis kelamin wajib diisi',
            'tempat_lahir.required'      =>  'Tempat lahir wajib diisi',
            'tanggal_lahir.required'     =>  'Tanggal lahir wajib diisi',
            'agama.required'             =>  'Agama wajib diisi',
            'pekerjaan.required'         =>  'Pekerjaan wajib diisi',
            'tempat_tinggal.required'    =>  'Tempat tinggal wajib diisi',
            'status_perkawinan.required' =>  'Status perkawinan wajib diisi',
            'keperluan.required'         =>  'Keperluan wajib diisi',
            'keterangan_lain.required'   =>  'Keterangan wajib diisi'
        ]);
        $data = [
            'nik'       =>  request()->nik,
            'status'       =>  'pending',
            'nomor_kk'  =>  request()->nomor_kk,
            'nama_lengkap'  =>  request()->nama_lengkap,
            'jenis_kelamin' =>  request()->jenis_kelamin,
            'tempat_lahir'  =>  request()->tempat_lahir,
            'tanggal_lahir' =>  request()->tanggal_lahir,
            'agama'         =>  request()->agama,
            'pekerjaan'     =>  request()->pekerjaan,
            'tempat_tinggal'    =>  request()->tempat_tinggal,
            'status_perkawinan' =>  request()->status_perkawinan,
            'keperluan'         =>  request()->keperluan,
            'keterangan_lain'   =>  request()->keterangan_lain
        ];
        $this->UserModel->addData($data);
        return redirect()->route('user')->with('alert', 'Data berhasil ditambahkan');
    }
}
