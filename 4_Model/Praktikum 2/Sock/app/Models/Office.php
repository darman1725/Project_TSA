<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "office";
    protected $fillable = ['nama','alamat','kontak','tahun'];
}