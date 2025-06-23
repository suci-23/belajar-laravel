<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return view('aritmatika');
    }

    //TAMBAH
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
        $error = null;
        $jumlah = null;

        if (!is_numeric($angka1) || !is_numeric($angka2)) {
            $error = 'Data Kudu Angka!';
        } else {
            $jumlah = $angka1 + $angka2;
        }

        if ($error == null) {

            Count::create([
                'jenis' => $request->jenis,
                'angka1' => $angka1,
                'angka2' => $angka2,
                'hasil' => $request->jumlah

            ]);
        }

        return view('tambah', compact('jumlah', 'angka1', 'angka2'));
    }

    //KURANG
    public function kurang()
    {
        $title = "Kurang - Kurangan";
        $pengurangan = 0;
        return view('kurang', compact('title', 'pengurangan'));
    }

    public function kurangAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $pengurangan = $angka1 - $angka2;

        return view('kurang', compact('pengurangan', 'angka1', 'angka2'));
    }

    //KALI
    public function kali()
    {
        $title = "Perkalian";
        $perkalian = 0;
        return view('kali', compact('title', 'perkalian'));
    }

    public function kaliAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $perkalian = $angka1 * $angka2;

        return view('kali', compact('perkalian', 'angka1', 'angka2'));
    }

    //BAGI
    public function bagi()
    {
        $title = "Pembagian";
        $pembagian = 0;
        return view('bagi', compact('title', 'pembagian'));
    }

    public function bagiAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $pembagian = $angka1 / $angka2;

        return view('bagi', compact('pembagian', 'angka1', 'angka2'));
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
