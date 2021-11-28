<?php

namespace App\Http\Controllers\Api;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KaryawanResource;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{
    public function login_karyawan(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'username'  => 'required',
                'password'  => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'msg'    => $validator->errors()
            ], 400);
        }
        $username = $request->input('username');
        $password = $request->input('password');
        $karyawan = Karyawan::where([
            ['username', $username],
        ])->first();
        if (is_null($karyawan)) {
            return response()->json([
                'status' => FALSE,
                'msg'    => 'Username tidak ditemukan'
            ], 200);
        }
        if (password_verify($password, $karyawan->password)) {
            return response()->json([
                'status'  => TRUE,
                'karyawan' => new KaryawanResource($karyawan)
            ], 200);
        } else {
            return response()->json([
                'status'  => FALSE,
                'msg'     => 'Password tidak sesuai'
            ], 400);
        }
    }
}
