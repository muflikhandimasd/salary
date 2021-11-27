@extends('layouts.template')
@section('tab')
    Detail Tunjangan

@endsection

@section('title')
    Detail Tunjangan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Tunjangan
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Nama Tunjangan</th>
                                <td>{{ $tunjangan->nama_tunjangan }}</td>
                            </tr>
                            <tr>
                                <th>Nominal</th>
                                <td>{{ $tunjangan->nominal }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
