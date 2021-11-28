@extends('layouts.template')
@section('tab')
    Edit Konten

@endsection

@section('title')
    Edit Konten
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Konten
                    </div>
                    <div class="card-body">
                        <form action="{{ route('konten.update', $konten->id) }}" method="post">
                            {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                {{-- judul konten --}}
                                <div class="form-group">
                                    <label class="form-label">Judul Konten</label>
                                    <input type="text" name="judul_konten" value="{{ $konten->judul_konten }}"
                                        required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Isi Konten</label>
                                    <textarea class="form-control" name="isi_konten" rows="5"
                                        required="required">{{ $konten->isi_konten }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penerbit</label>
                                    <input type="text" name="penerbit" value="{{ $konten->penerbit }}" required="required"
                                        class="form-control">
                                </div>


                                <div class="modal-footer">
                                    {{-- data-dismiss="modal"data-dismiss="modal"
    untuk nutup modal --}}
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
