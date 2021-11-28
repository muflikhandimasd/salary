@extends('layouts.template')
@section('tab')
    Penggajian

@endsection

@section('title')
    Riwayat Penggajian
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Riwayat Penggajian
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
                        </table>
                    </div>
                    <div class="card-header">
                        Riwayat Penggajian
                    </div>
                    <div class="card-header">
                        <table class="table table-hover">
                            <tr>
                                <th>Bulan Gaji</th>
                                <th>Tunjangan</th>
                                <th>Potongan</th>
                                <th>Total Gaji</th>
                            </tr>
                            @foreach ($penggajian as $row)
                                <tr>
                                    <td>{{ $row->bulan_gajian }}/{{ $row->tahun_gajian }}</td>
                                    <td>Rp{{ number_format($row->total_tunjangan) }}</td>
                                    <td>Rp{{ number_format($row->potongan) }}</td>
                                    <td>Rp{{ number_format($row->total_gajian) }}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
