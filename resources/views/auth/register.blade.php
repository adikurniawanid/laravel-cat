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
                                <form method="POST" enctype="multipart/form-data" action="/auth/register"
                                    class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user @error('nama')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('nama') }}" id="nama" name="nama"
                                            placeholder="Masukan Nama Lengkap..." required>
                                    </div>



                                    @error('nama')
                                        <div class="invalid-feedback d-block mb-3">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user @error('username')
                                            is-invalid
                                        @enderror"
                                            id="username" name="username" placeholder="Masukan Username..." required>
                                    </div>
                                    @error('username')
                                        <div class="invalid-feedback d-block mb-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user @error('password')
                                            is-invalid
                                        @enderror"
                                            id="password" name="password" placeholder="Masukan Password..." required>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block mb-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user @error('email')
                                            is-invalid
                                        @enderror"
                                            id="email" name="email" placeholder="Masukan Alamat E-Mail..."
                                            required>
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback d-block mb-3">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select
                                            class="custom-select @error('kelasId')
                            is-invalid
                        @enderror"
                                            id="kelasId" name="kelasId" required>
                                            <option value="">Pilih Kelas</option>
                                            @foreach ($kelas as $element)
                                                @if (old('kelasId') == $element->id)
                                                    <option value="{{ $element['id'] }}" selected>{{ $element['nama'] }}
                                                        -
                                                        {{ $element['kelompok'] }}
                                                    </option>
                                                @else
                                                    <option value="{{ $element['id'] }}">
                                                        {{ $element['nama'] }} -
                                                        {{ $element['kelompok'] }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('kelasId')
                                        <div class="invalid-feedback d-block mb-3">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <button type="submit" name="buttonAddMahasiswa"
                                        class="btn btn-primary btn-user btn-block">Daftarkan Akun</button>
                                    <button type="reset" class="btn btn-secondary btn-user btn-block">Reset</button>
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
