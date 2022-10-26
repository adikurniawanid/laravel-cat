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
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Soal</th>
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
                                    <td>{{ $element->soal }}</td>
                                    <td>{{ $element->kelas }}</td>
                                    <td>
                                        <form action="/admin/jadwal/<?= $element->id ?>" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="id" value="<?= $element->id ?>">
                                            <button type="submit" class="btn btn-success btn-sm" title="Edit"><i
                                                    class="fas fa-edit "></i></button>
                                        </form>
                                        <form action="/admin/jadwal/<?= $element->id ?>" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus mahasiswa <?= $element->id ?> ?')"><i
                                                    class="fas fa-trash "></i></button>
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

    @include('modal.add-jadwal-tes')
@endsection
