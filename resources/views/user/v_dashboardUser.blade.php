@extends('template/v_templateDashboardUser')
@section('title', 'Dashboard')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="head"><b> Yang bertanda tangan dibawah ini, menerangkan bahwa:
                            </b></label>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" aria-describedby="nama_lengkap" name="nama_lengkap">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kleamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" aria-describedby="tempat_lahir" name="tempat_lahir">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir" name="tanggal_lahir">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" aria-describedby="agama" name="agama">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" aria-describedby="pekerjaan" name="pekerjaan">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="tempat_tinggal">Tempat Tinggal</label>
                        <input type="text" class="form-control" id="tempat_tinggal" aria-describedby="tempat_tinggal" name="tempat_tinggal">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="status_perkawinan">Status</label>
                        <select class="form-control" id="status" name="status_perkawinan">
                            <option value="Belum Kawin">Belum kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomor_kk">Nomor KK</label>
                        <input type="text" class="form-control" id="nomor_kk" aria-describedby="nomor_kk" name="nomor_kk">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" aria-describedby="nik" name="nik">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" aria-describedby="keperluan" name="keperluan">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="keterangan_lain">Keterangan Lain</label>
                        <textarea class="form-control" id="keterangan_lain" rows="3" name="keterangan_lain"></textarea>
                    </div>
                    <div class="form-group">
                        <label for=""><b>Demikian untuk menjadikan maklum bagi yang berkepentingan</b></label>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection