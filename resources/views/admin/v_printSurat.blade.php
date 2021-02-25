<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print | {{$surat->id_surat}}</title>
    <!-- Custom fonts for this template-->
    <link href="{{url('sb-admin-2')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('sb-admin-2')}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid text-lg">
        <div class="row mt-5">
            <div class="col-sm-12 text-center">
                <h5 class="font-weight-bolder">PEMERINTAH KABUPATEN KLATEN</h5>
                <h5 class="font-weight-bolder">KECAMATAN KARANGDOWO</h5>
                <h5 class="font-weight-bolder">DESA PUGERAN</h5>
                <!-- Divider -->
                <hr class="sidebar-divider my-4" style="border: solid;">
            </div>
            <div class="col-sm-12 text-center">
                <h5>SURAT KETERANGAN</h5>
                <h5>Nomor: {{$surat->id_surat}} / SK / {{date('M / Y')}}</h5>
                <p class="mt-4">Yang bertanda tangan di bawah ini, menerangkan bahwa :</p>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Nama</div>
            <div class="col-sm-8">: {{$surat->nama_lengkap}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Jenis Kelamin</div>
            <div class="col-sm-8">: {{$surat->jenis_kelamin}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Tempat & Tanggal lahir</div>
            <div class="col-sm-8">: {{$surat->tempat_lahir}}, {{$surat->tanggal_lahir}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Agama</div>
            <div class="col-sm-8">: {{$surat->agama}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Pekerjaan</div>
            <div class="col-sm-8">: {{$surat->pekerjaan}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Tempat Tinggal</div>
            <div class="col-sm-8">: {{$surat->tempat_tinggal}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Status Perkawinan</div>
            <div class="col-sm-8">: {{$surat->status_perkawinan}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Surat bukti diri</div>
            <div class="col-sm-8">: No.KK {{$surat->nomor_kk}}</div>
            <div class="col-sm-4 px-5"></div>
            <div class="col-sm-8">: NIK {{$surat->nik}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Keperluan</div>
            <div class="col-sm-8">: {{$surat->keperluan}}</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 px-5">Keterangan Lain</div>
            <div class="col-sm-8">: {{$surat->keterangan_lain}}</div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 text-center">
                <p>Demikian untuk menjadikan maklum bagi yang berkepentingan</p>
            </div>
        </div>
        <div class="row justify-content-end mt-5">
            <div class="col-sm-5 text-center">
                <p>Mengetahui</p>
                <p>Pugeran, {{date('d M Y')}}</p>
                <p>Kepala Desa</p>
                <p class="mt-5 pt-3">Fajar</p>
            </div>
        </div>
    </div>
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>