@extends('pegawai.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h3 style="text-align: center">Data Pegawai - Badan Pusat Statistik (BPS) Kota Malang</h3>
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
    <tr style="text-align: center" class="thead-light">
        <th>No</th>
        <th>Nomor Pegawai</th>
        <th>Nama</th>
        <th>Divisi</th>
        <th>Jabatan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pegawai as $pgw)
    <tr style="text-align: center">
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pgw ->nomor_pegawai }}</td>
        <td>{{ $pgw ->nama }}</td>
        <td>{{ $pgw ->divisi }}</td>
        <td>{{ $pgw ->jabatan }}</td>
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
@endsection