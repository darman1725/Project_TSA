@extends('pegawai.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pegawai - BPS Kota Malang
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nomor Pegawai: </b>{{$Pegawai->nomor_pegawai}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Pegawai->nama}}</li>
                    <li class="list-group-item"><b>Divisi: </b>{{$Pegawai->divisi}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$Pegawai->jabatan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pegawai.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection