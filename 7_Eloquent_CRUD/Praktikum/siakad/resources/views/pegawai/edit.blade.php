@extends('pegawai.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada sesuatu yang salah dengan inputan anda<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pegawai.update', $Pegawai->nomor_pegawai) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nomor_pegawai">Nomor Pegawai</label>
                        <input type="number" name="nomor_pegawai" class="form-control" id="nomor_pegawai" value="{{ $Pegawai->nomor_pegawai }}" aria-describedby="nomor_pegawai" placeholder="Silahkan isi nomor pegawai">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}" aria-describedby="nama" placeholder="Silahkan isi nama anda">
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <input type="text" name="divisi" class="form-control" id="divisi" value="{{ $Pegawai->divisi }}" aria-describedby="divisi" placeholder="Silahkan isi divisi anda">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $Pegawai->jabatan }}" aria-describedby="jabatan" placeholder="Silahkan isi jabatan anda">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection