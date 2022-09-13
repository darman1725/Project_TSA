<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $pegawai = $pegawai = DB::table('pegawai')->get(); // Mengambil semua isi tabel
        $posts = Pegawai::orderBy('nomor_pegawai', 'desc')->paginate(6);
        return view('pegawai.index', compact('pegawai'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
        'nomor_pegawai' => 'required',
        'nama' => 'required',
        'divisi' => 'required',
        'jabatan' => 'required', 
    ]);
    //fungsi eloquent untuk menambah data
    Pegawai::create($request->all());

    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('pegawai.index')
    ->with('success', 'Data Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nomor_pegawai)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Pegawai
        $Pegawai = Pegawai::find($nomor_pegawai);
        return view('pegawai.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nomor_pegawai)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nomor Pegawai untuk diedit
        $Pegawai = DB::table('pegawai')->where('nomor_pegawai', $nomor_pegawai)->first();
        return view('pegawai.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nomor_pegawai)
    {
        //melakukan validasi data
        $request->validate([
       'nomor_pegawai' => 'required',
       'nama' => 'required',
       'divisi' => 'required',
       'jabatan' => 'required', 
    ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Pegawai::find($nomor_pegawai)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pegawai.index')
        ->with('success', 'Data Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nomor_pegawai)
    {
        //fungsi eloquent untuk menghapus data
        Pegawai::find($nomor_pegawai)->delete();
        return redirect()->route('pegawai.index')
        ->with('success', 'Data Pegawai Berhasil Dihapus');
    }
}
