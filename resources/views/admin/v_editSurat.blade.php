@extends('template/v_templateDashboardAdmin')
@section('title', 'Ubah Surat')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan</h6>
            </div>
            <div class="card-body">
                <form action="/admin/update/{{$surat->id_surat}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="head"><b> Yang bertanda tangan dibawah ini, menerangkan bahwa:
                            </b></label>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" aria-describedby="nama_lengkap" name="nama_lengkap" value="{{$surat->nama_lengkap}}">
                        @error('nama_lengkap')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Laki-laki" @if ($surat->jenis_kelamin == 'Laki-laki') selected="selected" @endif>Laki-laki</option>
                            <option value="Perempuan" @if ($surat->jenis_kelamin == 'Perempuan') selected="selected" @endif>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" aria-describedby="tempat_lahir" name="tempat_lahir" value="{{$surat->tempat_lahir}}">
                        @error('tempat_lahir')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir" name="tanggal_lahir" value="{{$surat->tanggal_lahir}}">
                        @error('tanggal_lahir')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" aria-describedby="agama" name="agama" value="{{$surat->agama}}">
                        @error('agama')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" aria-describedby="pekerjaan" name="pekerjaan" value="{{$surat->pekerjaan}}">
                        @error('pekerjaan')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_tinggal">Tempat Tinggal</label>
                        <input type="text" class="form-control" id="tempat_tinggal" aria-describedby="tempat_tinggal" name="tempat_tinggal" value="{{$surat->tempat_tinggal}}">
                        @error('tempat_tinggal')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status_perkawinan">Status</label>
                        <select class="form-control" id="status" name="status_perkawinan" >
                            <option value="Belum Kawin" @if ($surat->status_perkawinan == 'Belum Kawin') selected="selected" @endif>Belum kawin</option>
                            <option value="Kawin" @if ($surat->status_perkawinan == 'Kawin') selected="selected" @endif>Kawin</option>
                            <option value="Janda" @if ($surat->status_perkawinan == 'Janda') selected="selected" @endif>Janda</option>
                            <option value="Duda" @if ($surat->status_perkawinan == 'Duda') selected="selected" @endif>Duda</option>
                        </select>
                        @error('status_perkawinan')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_kk">Nomor KK</label>
                        <input type="text" class="form-control" id="nomor_kk" aria-describedby="nomor_kk" name="nomor_kk" value="{{$surat->nomor_kk}}">
                        @error('nomor_kk')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" aria-describedby="nik" name="nik" value="{{$surat->nik}}">
                        @error('nik')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" aria-describedby="keperluan" name="keperluan" value="{{$surat->keperluan}}">
                        @error('keperluan')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan_lain">Keterangan Lain</label>
                        <textarea class="form-control" id="keterangan_lain" rows="3" name="keterangan_lain" value="">{{$surat->keterangan_lain}}</textarea>
                        
                        @error('keterangan_lain')
                            <div class="text-danger"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><b>Demikian untuk menjadikan maklum bagi yang berkepentingan</b></label>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection