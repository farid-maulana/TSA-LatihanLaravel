<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        echo "Nama: Farid Maulana <br>";
        echo "NIM: 1941720012 <br>";
        echo "Kelas: Web A";
    }
}
