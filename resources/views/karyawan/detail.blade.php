@extends('layouts.template')
@section('tab')
    Detail Karyawan

@endsection

@section('title')
    Detail Karyawan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Karyawan
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Nama Karyawan</th>
                                <td>{{ $karyawan->nama_karyawan }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $karyawan->status }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>{{ $karyawan->tanggal_masuk }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Handphone</th>
                                <td>{{ $karyawan->nomor_hp }}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{ $karyawan->username }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
