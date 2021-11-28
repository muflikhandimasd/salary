<?php

namespace App\Http\Controllers;

use App\Jabatan;
use App\Karyawan;
use App\Tunjangan;
use App\Penggajian;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PenggajianController extends Controller
{
    public function index(Request $request)
    {
        $karyawan = Karyawan::paginate(3);
        return view('penggajian.index', compact('karyawan'));
    }

    public function create_penggajian($id)
    {
        $karyawan = Karyawan::find($id);
        $tunjangan = Tunjangan::all();
        // id bakal dimasukkin ke array, maka bakal dicompact
        return view('penggajian.create', compact('karyawan', 'tunjangan', 'id'));
    }
}
