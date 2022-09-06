<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{   
    public function eduGames() {
       echo '<center>Marbel Edu Games<br>
        <a href ="https://www.educastudio.com/category/marbel-edu-games">Click Here To The Pages</a>';
    }

    public function kidsGames() {
        echo '<center>Marbel and Friends Kids Games<br>
        <a href ="https://www.educastudio.com/category/marbel-and-friends-kids-games">Click Here To The Pages</a>';
    }

    public function storyBooks() {
        echo '<center>Riri Story Books<br>
        <a href ="https://www.educastudio.com/category/riri-story-books">Click Here To The Pages</a>';
    }

    public function kidsSongs() {
        echo '<center>Kolak Kids Songs<br>
        <a href ="https://www.educastudio.com/category/kolak-kids-songs">Click Here To The Pages</a>';
    }

}

