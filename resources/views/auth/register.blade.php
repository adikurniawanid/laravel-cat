@include('layouts.head')

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-8 o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pendaftaran Akun</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama"
                                            placeholder="Masukan Nama Lengkap...">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username"
                                            placeholder="Masukan Username...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                            placeholder="Masukan Password...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama"
                                            placeholder="Masukan Nama...">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            placeholder="Masukan Alamat E-Mail...">
                                    </div>

                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select
                                            class="custom-select @error('kelasId')
                            is-invalid
                        @enderror"
                                            id="kelasId" name="kelasId" required>
                                            <option value="">Pilih Kelas</option>
                                            @foreach ($kelas as $element)
                                                <option value="{{ $element['id'] }}">{{ $element['nama'] }} -
                                                    {{ $element['kelompok'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <a href="/auth/login" class="btn btn-primary btn-user btn-block">
                                        Daftarkan Akun
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="/auth/login">Sudah memiliki akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.tail')
