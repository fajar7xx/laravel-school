@extends('backend.layouts.app')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}">
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses</strong> {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(session('hapus'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hapus</strong> {{ session('hapus') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Siswa</h4>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Data Siswa</h2>
                <div class="row">
                    <div class="col-6">
                        <form action="{{ route('siswa.index') }}" class="form-inline" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="cari nama depan / akhir"
                                    aria-label="cari nama depan / akhir" name="cari">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-primary btn-fw float-right mx-2" data-toggle="modal"
                            data-target="#importModal">
                            <i class="mdi mdi-file-document"></i>Import Siswa
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-fw float-right" data-toggle="modal"
                            data-target="#exampleModal">
                            <i class="mdi mdi-file-document"></i>Tambah Siswa
                        </button>
                        <a href="{{ route('siswa.export') }}" class="btn btn-success float-right mr-2">Export Excel</a><a href="{{ route('siswa.exportpdf') }}" class="btn btn-danger float-right mr-2">Export Pdf</a>
                    </div>
                </div>
                <table class="table table-hover" id="table-siswa" style="width:100%">
                    <thead>
                        <tr>
                            <th> Nama Depan</th>
                            <th> Nama Belakang </th>
                            <th> Jenis Kelamin </th>
                            <th> Agama </th>
                            <th> Alamat </th>
                            <th>Nilai Rata</th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_siswa as $siswa)
                        <tr>
                            <td><a href="{{ route('siswa.profile', [$siswa->id]) }}">{{ $siswa->nama_depan }}</a></td>
                            <td><a href="{{ route('siswa.profile', [$siswa->id]) }}">{{ $siswa->nama_belakang }}</a></td>
                            <td>{{ $siswa->kelamin }}</td>
                            <td>{{ $siswa->agama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->nilaiRata() }}</td>
                            <td>
                                <a href="{{ route('siswa.edit', [$siswa->id]) }}"
                                    class="btn btn-info btn-sm btn-rounded">Edit</a>
                                {{-- <a href="" class="btn btn-danger btn-sm btn-rounded delete-siswa" data-siswaId="{{ $siswa->id }}">Hapus</a> --}}
                                {{-- <form action="{{ route('siswa.destroy', [$siswa->id]) }}" class="d-inline" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus nya')"> --}}
                                <form action="{{ route('siswa.destroy', [$siswa->id]) }}" class="d-inline" id="form-hapus" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus nya')">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm btn-rounded delete-siswa">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-left mt-2">
                    <p class="small-text px-2 font-weight-bold">Jumlah data : {{ $data_siswa->total() }}</p>
                </div>
                <nav aria-label="Page navigation example" class="mt-2">
                    <ul class="pagination pagination-sm justify-content-end">
                        {{ $data_siswa->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('modal')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrasi Murid Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('siswa.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" id="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" value={{ old('nama_depan') }}>
                        @error('nama_depan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" id="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" value={{ old('nama_belakang') }}>
                        @error('nama_belakang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L" {{ (old('jk') === 'L') ? 'selected':'' }}>Laki - laki</option>
                            <option value="P" {{ (old('jk') === 'P') ? 'selected':'' }}>Perempuan</option>
                        </select>
                        @error('jk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                            <option value="">Pilih Agama</option>
                            <option value="islam" {{ (old('agama') === 'islam')?'selected':'' }}>islam</option>
                            <option value="kristen" {{ (old('agama') === 'krister')?'selected':'' }}>kristen</option>
                            <option value="katolik" {{ (old('agama') === 'katolik')?'selected':'' }}>katolik</option>
                            <option value="hindu" {{ (old('agama') === 'hindu')?'selected':'' }}>hindu</option>
                            <option value="budha" {{ (old('agama') === 'budha')?'selected':'' }}>budha</option>
                        </select>
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea name="alamat" id="alamat" rows="5" class="form-control">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control-file" accept="image/x-png,image/gif,image/jpeg">
                        @error('avatar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- Modal -->
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('siswa.import') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="importsiswa">import siswa</label>
                        <input type="file" name="importsiswa" id="importsiswa" class="form-control-file @error('importsiswa') is-invalid @enderror">
                        @error('importsiswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->
@endsection


@section('script')
    <script>
        // script untuk menggunakan sweatalert   
    </script>
    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        // $(document).ready(function() {
        //     $('#table-siswa').DataTable({
        //         processing: true,
        //         serverside: true,
        //         ajax: ""
        //     });
        // });
    </script>
@endsection
