@extends('layouts.template')
@section('tab')
    Edit Berita

@endsection

@section('title')
    Edit Berita
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Berita
                    </div>
                    <div class="card-body">
                        <form action="{{ route('berita.update', $berita->id) }}" method="post">
                            {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                {{-- judul berita --}}
                                <div class="form-group">
                                    <label class="form-label">Judul berita</label>
                                    <input type="text" name="judul_berita" value="{{ $berita->judul_berita }}"
                                        required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Isi berita</label>
                                    <textarea class="form-control" name="isi_berita" rows="5"
                                        required="required">{{ $berita->isi_berita }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penerbit</label>
                                    <input type="text" name="penerbit" value="{{ $berita->penerbit }}" required="required"
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
