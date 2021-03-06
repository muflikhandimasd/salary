@extends('layouts.template')
@section('tab')
    Detail Berita

@endsection

@section('title')
    Detail Berita
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Berita
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Judul berita</th>
                                <td>{{ $berita->judul_berita }}</td>
                            </tr>
                            <tr>
                                <th>Isi Berita</th>
                                <td>{{ $berita->isi_berita }}</td>
                            </tr>
                            <tr>
                                <th>Diterbitkan</th>
                                <td>{{ $berita->tanggal_terbit }}</td>
                            </tr>
                            <tr>
                                <th>Oleh</th>
                                <td>{{ $berita->penerbit }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
