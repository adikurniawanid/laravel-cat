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
                                        <form action="/admin/jadwal/<?= $element->id ?>" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-success btn-sm" title="Delete"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus mahasiswa <?= $element->id ?> ?')"><i
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
