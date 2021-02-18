@extends('template/v_templateDashboardAdmin')
@section('title', 'Detail Data')
@section('custom-css')
<!-- Custom styles for this page -->
<link href="{{url('sb-admin-2')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan</h6>

    </div>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>
                        <th>KK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                        <th>Tempat Tinggal</th>
                        <th>Status Perkawinan</th>
                        <th>Keperluan</th>
                        <th>Keterangan Lain</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$surat->id_surat}}</td>
                        <td>{{$surat->nik}}</td>
                        <td>{{$surat->nomor_kk}}</td>
                        <td>{{$surat->nama_lengkap}}</td>
                        <td>{{$surat->jenis_kelamin}}</td>
                        <td>{{$surat->tempat_lahir}}</td>
                        <td>{{$surat->tanggal_lahir}}</td>
                        <td>{{$surat->agama}}</td>
                        <td>{{$surat->pekerjaan}}</td>
                        <td>{{$surat->tempat_tinggal}}</td>
                        <td>{{$surat->status_perkawinan}}</td>
                        <td>{{$surat->keperluan}}</td>
                        <td>{{$surat->keterangan_lain}}</td>
                        <td>
                            <a href="" class="badge badge-info"><span>Detail</span></a>
                            <a href="" class="badge badge-warning"><span>Edit</span></a>
                            <a href="" class="badge badge-danger"><span>Hapus</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('custom-js')
<!-- Page level plugins -->
<script src="{{url('sb-admin-2')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('sb-admin-2')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{url('sb-admin-2')}}/js/demo/datatables-demo.js"></script>
@endsection