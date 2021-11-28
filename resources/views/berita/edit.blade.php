@extends('layouts.template')
@section('tab')
    Edit Jabatan

@endsection

@section('title')
    Edit Jabatan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Jabatan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="post">
                            {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                            @csrf
                            {{-- Put : Ngambil data --}}
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                                {{-- Nama jabatan --}}
                                <div class="form-group">
                                    <label class="form-label">Nama jabatan</label>
                                    <input type="text" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}"
                                        required="required" class="form-control">
                                </div>

                                {{-- gaji_pokok --}}
                                <div class="form-group">
                                    <label class="form-label">Gaji Pokok</label>
                                    <input type="number" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}"
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
