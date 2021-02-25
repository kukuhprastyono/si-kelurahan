@extends('template/v_templateDashboardAdmin')
@section('title', 'Dashboard')
@section('custom-css')
<!-- Custom styles for this page -->
<link href="{{url('sb-admin-2')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
@if(session('alert'))
<div class="alert alert-success">{{session('alert')}}</div>
@endif
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan</h6>

    </div>
    <div class="card-body ">
        <a href="/admin/add" class="btn btn-primary btn-icon-split mb-4 float-right">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </a>
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($surat as $items)
                    <tr>
                        <td>{{$items->id_surat}}</td>
                        <td>{{$items->nik}}</td>
                        <td>{{$items->nomor_kk}}</td>
                        <td>{{$items->nama_lengkap}}</td>
                        <td>{{$items->jenis_kelamin}}</td>
                        <td>{{$items->tempat_lahir}}</td>
                        <td>{{$items->tanggal_lahir}}</td>
                        <td>{{$items->agama}}</td>
                        <td>
                            <a href="/admin/print/{{$items->id_surat}}" class="badge badge-primary"><span>Print</span></a>
                            <a href="/admin/detail/{{$items->id_surat}}" class="badge badge-info"><span>Detail</span></a>
                            <a href="/admin/edit/{{$items->id_surat}}" class="badge badge-warning"><span>Edit</span></a>
                            <!-- <a href="/admin/delete/{{$items->id_surat}}" class="badge badge-danger"><span>Hapus</span></a> -->
                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#modal{{$items->id_surat}}"><span>Hapus</span></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button> -->
        @foreach($surat as $data)
        
        <!-- Modal -->
        <div class="modal fade" id="modal{{$data->id_surat}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-light" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah data yakin dihapus?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="/admin/delete/{{$data->id_surat}}" type="button" class="btn btn-danger">Hapus</a>
                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- <div class="row justify-content-center">
    <div class="col-sm-12">
        
    </div>
</div> -->
@endsection
@section('custom-js')
<!-- Page level plugins -->
<script src="{{url('sb-admin-2')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('sb-admin-2')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{url('sb-admin-2')}}/js/demo/datatables-demo.js"></script>
@endsection