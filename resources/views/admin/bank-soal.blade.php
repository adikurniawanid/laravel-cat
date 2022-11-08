@extends('layouts.template')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
            </div>
            <div class="card-body">
                <a data-toggle="modal" data-target="#modalAddData" class="btn btn-primary btn-icon-split mb-3">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Jumlah Soal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($soal as $element)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $element->nama }}</td>
                                    <td>{{ $element->jumlahSoal }}</td>
                                    <td></td>
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
