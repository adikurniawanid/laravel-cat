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
                <div class="row">
                    @if (count($tes) === 0)
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                Belum ada test yang tersedia
                            </div>
                        </div>
                    @endif
                    @foreach ($tes as $element)
                        <div class="col-lg-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $element->nama }}</div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="/user/soal">
                                        @csrf
                                        <input type="hidden" name="testId" value="{{ $element->id }}">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                                    {{ $element->kelas }}</div>
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                                    {{ $element->tanggal }}</div>
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                                    {{ $element->pukul }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>

                                        {{-- <a href="/user/tes/register/{{ $element->id }}" class="btn btn-success btn-block mt-3"><i
                                        class="fas fa-plus fa-fw"></i>
                                    Daftar</a> --}}

                                        <button type="submit" class="btn btn-success btn-block mt-3"><i
                                                class="fas fa-plus fa-fw"></i>Daftar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endsection
