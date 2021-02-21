<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminModelController extends Controller
{
    
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }

    // show all data
    public function index()
    {
        $data = [
            'surat' => $this->AdminModel->allData()
        ];
        return view('admin/v_dashboardAdmin', $data);
    }

    // detail data
    public function detailSurat($id_surat)
    {
        if (!$this->AdminModel->detailData($id_surat)) {
            return abort(404);
        }
        $data = [
            'surat' =>  $this->AdminModel->detailData($id_surat)
        ];
        return view('admin/v_detailSurat', $data);
    }

    // add data
    public function addSurat()
    {
        return view('admin/v_addSurat');
    }
    // insert
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
        ],[
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
        $data=[
            'nik'       =>  request()->nik,
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
        $this->AdminModel->addData($data);
        return redirect()->route('admin')->with('alert','Data berhasil ditambahkan');
    }

    public function editSurat($id_surat)
    {
        if (!$this->AdminModel->detailData($id_surat)) {
            abort(404);
        }
        $data = [
            'surat' =>  $this->AdminModel->detailData($id_surat)
        ];
        return view('admin/v_editSurat', $data);
    }

    public function updateSurat($id_surat)
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
            'keperluan'         =>  'required'
        ],[
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
            'keperluan.required'         =>  'Keperluan wajib diisi'
        ]);
        $data=[
            'nik'       =>  request()->nik,
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
        $this->AdminModel->editData($id_surat, $data);
        return redirect()->route('admin')->with('alert','Data berhasil diubah');
    }

    public function deleteSurat($id_surat)
    {
        $this->AdminModel->deleteData($id_surat);
        return redirect()->route('admin')->with('alert', 'Data berhasil dihapus');
    }
}
