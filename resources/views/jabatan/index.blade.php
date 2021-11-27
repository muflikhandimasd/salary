@extends('layouts.template')
@section('tab')
    Halaman Jabatan

@endsection

@section('title')
    Halaman Jabatan
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
                                    <th>Nama Jabatan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jabatan as $row)
                                    <tr>
                                        <td>{{ $loop->iteration + $jabatan->perpage() * ($jabatan->currentPage() - 1) }}
                                        </td>
                                        <td>{{ $row->nama_jabatan }}</td>
                                        <td>Rp{{ number_format($row->gaji_pokok) }}</td>
                                        <td>
                                            <form action="{{ route('jabatan.destroy', [$row->id]) }}" method="post"
                                                onsubmit="return confirm('Hapus {{ $row->nama_jabatan }}')">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('jabatan.show', [$row->id]) }}"
                                                    class="btn btn-primary"><i class="fa fa-eye"></i>Detail</a>
                                                <a href="{{ route('jabatan.edit', [$row->id]) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash">
                                                        Hapus</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $jabatan->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Tambah jabatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('jabatan.store') }}" method="post">
                        {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                        @csrf
                        <div class="modal-body">
                            {{-- Nama jabatan --}}
                            <div class="form-group">
                                <label class="form-label">Nama jabatan</label>
                                <input type="text" name="nama_jabatan" value="{{ old('nama_jabatan') }}"
                                    required="required" class="form-control">
                            </div>

                            {{-- gaji_pokok --}}
                            <div class="form-group">
                                <label class="form-label">Gaji Pokok</label>
                                <input type="number" name="gaji_pokok" value="{{ old('gaji_pokok') }}"
                                    required="required" class="form-control">
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
