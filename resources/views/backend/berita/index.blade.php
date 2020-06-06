@extends('layouts.app')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Berita</h4>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Berita</h2>
                <div class="row">
                    <div class="col-6">
                        <form action="#" class="form-inline" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="cari nama depan / akhir" aria-label="cari nama depan / akhir" name="cari">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('berita.create') }}" class="btn btn-outline-primary btn-fw float-right">
                            <i class="mdi mdi-file-document"></i>Tambah Berita
                        </a>
                        {{-- <a href="" class="btn btn-success float-right mr-2">Export Excel</a>
                        <a href="" class="btn btn-danger float-right mr-2">Export Pdf</a> --}}
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Author</th>
                                <th>Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $item)
                            <t>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('berita.detail', $item->slug) }}" class="btn btn-sm btn-outline-primary" target="_blank">View</a>
                                    <a href="" class="btn btn-sm btn-info">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan menghapus berita ini ?')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="float-left mt-2">
                    <p class="small-text px-2 font-weight-bold">Jumlah data : </p>
                </div>
                <nav aria-label="Page navigation example" class="mt-2">
                    <ul class="pagination pagination-sm justify-content-end">
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
