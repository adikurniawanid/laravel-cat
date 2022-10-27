@include('layouts.head')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 d-flex ">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">

                            <div class="col-lg-10">

                                <div class="p-5">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            <a href="#" class="close" data-dismiss="alert"
                                                aria-label="close">&times;</a>
                                            <strong>Success!</strong> {{ session('success') }}

                                        </div>
                                    @endif

                                    @if (session()->has('loginError'))
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert"
                                                aria-label="close">&times;</a>
                                            <strong>Failed!</strong> {{ session('loginError') }}

                                        </div>
                                    @endif
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Peserta</h1>
                                    </div>

                                    <form class="user" action="/auth/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username"
                                                name="username" placeholder="Masukan Username..." {{-- value="{{ old('username') }}" --}}
                                                value="akdev">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                name="password" placeholder="Masukan Password..." value="akdev">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/auth/register">Belum memiliki akun? Daftarkan akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('layouts.tail')
