<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Pegawai extends Model //Definisi Model
{
    use HasFactory;
    protected $table='pegawai'; // Eloquent akan membuat model pegawai menyimpan record di tabel pegawai
    protected $primaryKey = 'nomor_pegawai'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'nomor_pegawai',
    'nama',
    'divisi',
    'jabatan',
    ];
}
