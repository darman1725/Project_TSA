@extends('master')

@section('title')
    
@endsection

@section('content')
<body><br><br>
    <h2 style="text-align: center"> <br><br>Data Kantor Cabang - Sock <br></h2>
    <table class="table table-striped">
    <thead>
        <tr>
            <th style="text-align: center">Nama</th>
            <th style="text-align: center">Alamat</th>
            <th style="text-align: center">Kontak</th>
            <th style="text-align: center">Tahun</th>
        </tr>
    </thead>
        @foreach ($office as $o)
        <tr>
            <td style="text-align: center">{{ $o->nama }}</td>
            <td style="text-align: center">{{ $o->alamat }}</td>
            <td style="text-align: center">{{ $o->kontak }}</td>
            <td style="text-align: center">{{ $o->tahun }}</td>
            <td>
        </tr>
        @endforeach
    </table>
</body>
@endsection