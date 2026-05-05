<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        return view('pasien', compact('data'));
    }

    public function tambah()
    {
        return view('editan.tambah');
    }

    //MENYIMPAN DATA DARI FORM CREATE
    public function simpan(Request $request)
    {
        // Eloquent ORM: Menyimpan data ke database berdasarkan input (name) di form HTML
        Pasien::create([
            'no_rekam_medis' => $request->no_rekam_medis,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur
        ]);
        return redirect()->route('pasien.index');
}
}
