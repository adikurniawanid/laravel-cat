<div class="modal fade" id="modalAddData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data <?= $title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="/admin/jadwal">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input autocomplete="off"
                            class="form-control @error('nama')
                            is-invalid
                        @enderror"
                            required type="text" name="nama" id="nama" placeholder="Masukan Nama Sesi"
                            value="{{ old('nama') }}" />
                    </div>
                    <div class="form-group">
                        <label>Waktu Mulai</label>
                        <input autocomplete="off"
                            class="form-control @error('nama')
                            is-invalid
                        @enderror"
                            required type="datetime-local" name="waktuMulai" id="waktuMulai"
                            value="{{ old('waktuMulai') }}" />
                    </div>
                    <div class="form-group">
                        <label>Durasi (Menit)</label>
                        <input min="0" autocomplete="off"
                            class="form-control @error('durasi')
                            is-invalid
                        @enderror"
                            required type="number" name="durasi" id="durasi"
                            placeholder="Masukkan Durasi Tes (Menit)..." value="{{ old('durasi') }}" />
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
                                <option value="{{ $element['id'] }}">{{ $element['nama'] }} - {{ $element['kelompok'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select"
                            @error('kategoriId')
                            is-invalid
                        @enderror
                            id="kategoriId" name="kategoriId" required>
                            <option value="">Pilih Kategori Soal</option>

                            @foreach ($kategori as $element)
                                <option value="{{ $element['id'] }}">{{ $element['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="buttonAddMahasiswa" class="btn btn-primary">Simpan Soal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
