@extends('layouts.template')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        @if (session()->has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ session('success') }}

            </div>
        @endif

        @if (session()->has('failed'))
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Failed!</strong> {{ session('failed') }}

            </div>
        @endif

        @if (session()->has('notice'))
            <div class="alert alert-primary">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Notice!</strong> {{ session('notice') }}

            </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tes as $element)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $element->nama }}</td>
                                    <td>{{ $element->tanggal }}</td>
                                    <td>{{ $element->pukul }}</td>
                                    <td>{{ $element->kelas }}</td>
                                    <td>
                                        <form action="/exam/{{ $element->id }}" method="GET" class="d-inline">
                                            <button type="submit" class="btn btn-success btn-sm" title="Join"
                                                class="fas fa-arrow-right"></i> Masuk Tes</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('modal.add-bank-soal')
@endsection
