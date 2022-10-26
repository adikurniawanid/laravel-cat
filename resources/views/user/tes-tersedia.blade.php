@extends('layouts.template')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-4">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">quis pertama</div>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                        REG - L1</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                        25 October 2022</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mt-1">
                                        17:46 - 17:46</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>

                            <a href="#" class="btn btn-success btn-block mt-3"><i class="fas fa-plus fa-fw"></i>
                                Daftar</a>

                        </div>
                    </div>
                </div>
            @endfor

        </div>
    @endsection
