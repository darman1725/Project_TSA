@extends('pegawai.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h3 style="text-align: center">Data Pegawai - Badan Pusat Statistik (BPS) Kota Malang</h3><br>
        </div>

        <div class="float-right my-2">
            <div class="mx-auto pull-right">
                <div class="">
                    <form action="{{ route('pegawai.index') }}" method="GET" role="search">
                        <div class="input-group">
                            <span class="input-group-btn mr-5">
                                <button class="btn btn-info" type="submit" title="Cari Nama">
                                    <span class="fas fa-search">
                                        <label>Cari</label>
                                    </span>
                                </button>
                            </span>
                            <input type="text" class="form-control mr-2" name="term" placeholder="Cari Nama Pegawai..." id="terms">
                            <a href="{{ route('pegawai.index') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" tittle="Refresh halaman">
                                        <span class="fas fa-sync-alt">
                                            <label>Refresh</label>
                                        </span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input Pegawai</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<br>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr style="text-align: center" class="thead-light">
            <th>No</th>
            <th>Nomor Pegawai</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    @foreach ($pegawai as $pgw)
    <tr style="text-align: center">
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pgw ->nomor_pegawai }}</td>
        <td>{{ $pgw ->nama }}</td>
        <td>{{ $pgw ->divisi }}</td>
        <td>{{ $pgw ->jabatan }}</td>
        <td>{{ $pgw ->email }}</td>
        <td>{{ $pgw ->alamat }}</td>
        <td>{{ $pgw ->tanggal_lahir }}</td>
        <td>
            <form action="{{ route('pegawai.destroy',['pegawai'=>$pgw->nomor_pegawai]) }}" method="POST">

                <a class="btn btn-info" href="{{ route('pegawai.show',$pgw->nomor_pegawai) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('pegawai.edit',$pgw->nomor_pegawai) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex">
    {{$pegawai-> links() }}<br><br>
</div>
{{"Jumlah Pegawai = ".$pegawai-> total(). " orang"}}
@endsection