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
}
