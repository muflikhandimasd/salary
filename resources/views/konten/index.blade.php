@extends('layouts.template')
@section('tab')
    Halaman konten

@endsection

@section('title')
    Halaman konten
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#addModal" class="btn btn-success"><i
                                class="fa fa-plus"></i> Tambah</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul konten</th>
                                    <th>Tanggal Terbit</th>
                                    <th>Penerbit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konten as $row)
                                    <tr>
                                        <td>{{ $loop->iteration + $konten->perpage() * ($konten->currentPage() - 1) }}
                                        </td>
                                        <td>{{ $row->judul_konten }}</td>
                                        <td>{{ $row->tanggal_terbit }} </td>
                                        <td>{{ $row->penerbit }} </td>
                                        <td>
                                            <form action="{{ route('konten.destroy', [$row->id]) }}" method="post"
                                                onsubmit="return confirm('Hapus {{ $row->judul_konten }}')">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('konten.show', [$row->id]) }}" class="btn btn-primary"><i
                                                        class="fa fa-eye"></i>Detail</a>
                                                <a href="{{ route('konten.edit', [$row->id]) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash">
                                                        Hapus</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $konten->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Tambah konten</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('konten.store') }}" method="post">
                        {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                        @csrf
                        <div class="modal-body">
                            {{-- judul konten --}}
                            <div class="form-group">
                                <label class="form-label">Judul konten</label>
                                <input type="text" name="judul_konten" value="{{ old('judul_konten') }}"
                                    required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Isi konten</label>
                                <textarea class="form-control" name="isi_konten" rows="5"
                                    required="required">{{ old('isi_konten') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" value="{{ old('penerbit') }}" required="required"
                                    class="form-control">
                            </div>


                            <div class="modal-footer">
                                {{-- data-dismiss="modal"data-dismiss="modal"
untuk nutup modal --}}
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
