@extends('layouts.template')
@section('tab')
    Detail Konten

@endsection

@section('title')
    Detail Konten
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Konten
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Judul konten</th>
                                <td>{{ $konten->judul_konten }}</td>
                            </tr>
                            <tr>
                                <th>Isi konten</th>
                                <td>{{ $konten->isi_konten }}</td>
                            </tr>
                            <tr>
                                <th>Diterbitkan</th>
                                <td>{{ $konten->tanggal_terbit }}</td>
                            </tr>
                            <tr>
                                <th>Oleh</th>
                                <td>{{ $konten->penerbit }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
