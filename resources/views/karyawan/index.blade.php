@extends('layouts.template')
@section('tab')
    Halaman karyawan

@endsection

@section('title')
    Halaman karyawan
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
                                <tr class="tengah">
                                    <th>No.</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $row)
                                    <tr class="tengah">
                                        <td>{{ $loop->iteration + $karyawan->perpage() * ($karyawan->currentPage() - 1) }}
                                        </td>
                                        <td>{{ $row->nama_karyawan }}</td>
                                        <td>{{ $row->jabatan->nama_jabatan }} </td>
                                        <td>{{ $row->status }} </td>
                                        <td>
                                            <form action="{{ route('karyawan.destroy', [$row->id]) }}" method="post"
                                                onsubmit="return confirm('Hapus {{ $row->nama_karyawan }}')">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('karyawan.show', [$row->id]) }}"
                                                    class="btn btn-primary"><i class="fa fa-eye"></i>Detail</a>
                                                <a href="{{ route('karyawan.edit', [$row->id]) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash">
                                                        Hapus</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $karyawan->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Tambah karyawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('karyawan.store') }}" method="post">
                        {{-- csrf untuk generate token. Setiap data memiliki token untuk amanin data --}}
                        @csrf
                        <div class="modal-body">
                            {{-- nama karyawan --}}
                            <div class="form-group">
                                <label class="form-label">Nama Karyawan</label>
                                <input type="text" name="nama_karyawan" value="{{ old('nama_karyawan') }}"
                                    required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jabatan</label>
                                <select name="id_jabatan" class="form-control" required="required">
                                    <option value="">- Pilih Jabatan -</option>
                                    @foreach ($jabatan as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control" required="required">
                                    <option value="">- Pilih Status -</option>
                                    <option value="kontrak">Karyawan Kontrak</option>
                                    <option value="magang">Karyawan Magang</option>
                                    <option value="tetap">Karyawan Tetap</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nomor Handphone</label>
                                <input type="number" name="nomor_hp" value="{{ old('nomor_hp') }}" required="required"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" value="{{ old('username') }}" required="required"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" value="{{ old('password') }}" required="required"
                                    class="form-control">

                            </div>


                            <div class="modal-footer">
                                {{-- data-dismiss="modal"data-dismiss="modal" untuk nutup modal --}}
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
