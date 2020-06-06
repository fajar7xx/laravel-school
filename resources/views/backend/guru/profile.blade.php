@extends('layouts.app')


@section('content')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses</strong> {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(session('alert'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Gagal</strong> {{ session('alert') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
            {{-- <div class="card-body">
                <h2 class="card-title">Profile {{ $siswa->nama_depan }}</h2>
            </div> --}}
            <a href="{{ route('siswa.index') }}" class="btn btn-warning btn-fw">Kembali</a>
        </div>
    </div>
</div>

<div class="row profile-page">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               <div class="mx-auto p-4">
                   <p class="my-2 font-weight-bold text-center text-capitalize">{{ $guru->nama }}</p>
               </div>
                
               <h5 class="text-center">Mata Pelajaran Yang di ajar</h5>
               <div class="table-responsive">
                   <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Kode</td>
                                <td>Pelajaran</td>
                                <td>Semester</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru->mapel as $mapel)  
                            <tr>
                                <td>{{ $mapel->kode }}</td>
                                <td>{{ $mapel->nama }}</td>
                                <td>{{ $mapel->semester }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
</div>

@endsection
