<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        echo "Nama: Farid Maulana <br>";
        echo "NIM: 1941720012 <br>";
        echo "Kelas: Web A";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan ID $id";
    }
}
