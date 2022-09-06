<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function karir() {
        echo '<center>Looking for Carrier, Here<br>
        <a href="https://www.educastudio.com/program/karir">Click Here To The Pages</a>';
    }

    public function magang() {
        echo '<center>Looking for Magang, Here<br>
        <a href="https://www.educastudio.com/program/magang">Click Here To The Pages</a>';
    }

    public function kunjunganIndustri() {
        echo '<center>Looking for Industri, Here<br>
        <a href="https://www.educastudio.com/program/kunjungan-industri">Click Here To The Pages</a>';
    }
}
