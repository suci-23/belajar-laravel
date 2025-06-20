<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return view('aritmatika');
    }


    public function tambah()
    {
        $title = "Tambah - Tambahan";
        $jumlah = 0;
        return view('tambah', compact('title', 'jumlah'));
    }

    public function tambahAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $jumlah = $angka1 + $angka2;

        return view('tambah', compact('jumlah', 'angka1', 'angka2'));
    }

    public function update($name)
    {
        return "Welcome $name";
    }

    public function trololo()
    {
        return "hello";
    }
}
