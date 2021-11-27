@extends('layouts.template')
@section('tab')
    Edit Tunjangan

@endsection

@section('title')
    Edit Tunjangan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Tunjangan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tunjangan.update', $tunjangan->id) }}" method="post">
                            {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                            @csrf
                            {{-- Put : Ngambil data --}}
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                                {{-- Nama Tunjangan --}}
                                <div class="form-group">
                                    <label class="form-label">Nama Tunjangan</label>
                                    <input type="text" name="nama_tunjangan" value="{{ $tunjangan->nama_tunjangan }}"
                                        required="required" class="form-control">
                                </div>

                                {{-- Nominal --}}
                                <div class="form-group">
                                    <label class="form-label">Nominal</label>
                                    <input type="number" name="nominal" value="{{ $tunjangan->nominal }}"
                                        required="required" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    {{-- data-dismiss="modal"data-dismiss="modal"untuk nutup modal --}}
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
