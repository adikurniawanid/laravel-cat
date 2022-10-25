<div class="modal fade" id="modalAddMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                <form method="POST" enctype="multipart/form-data" action="">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>NIM</label>
                        <input maxlength="14" autocomplete="off" class="form-control" required type="text"
                            name="nim_param" placeholder="Masukkan NIM..." />
                    </div>
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input maxlength="100" autocomplete="off" class="form-control" required type="text"
                            name="nama_param" placeholder="Masukkan Nama Mahasiswa..." />
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="custom-select" id="jurusan_id_param" name="jurusan_id_param" required>
                            <option value="">Pilih Jurusan</option>

                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="custom-select" id="program_studi_id_param" name="program_studi_id_param"
                            required>
                            <option value="">Pilih Program Studi</option>
                            <option value="1">Reguler</option>
                            <option value="2">Billingual</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun Angkatan</label>
                        <input maxlength="4" autocomplete="off" class="form-control" required type="year"
                            name="tahun_angkatan_param" placeholder="Masukkan Tahun Angkatan..." />
                    </div>

                    <div class="form-group">
                        <label>IPK</label>
                        <input maxlength="4" autocomplete="off" class="form-control" required type="number"
                            step="0.01" name="ipk_param" placeholder="Masukkan IPK..." />
                    </div>
                    <div class="form-group">
                        <label>SULIET</label>
                        <input min="0" max="700" autocomplete="off" class="form-control" required
                            type="number" step="1" name="suliet_param" placeholder="Masukkan SULIET..." />
                    </div>
                    <label>Jenis Kelamin</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" name="jenis_kelamin_id_param"
                                    id="kunci_a" value="1" required>
                                <label class="form-check-label mr-4" for="kunci_a">
                                    Pria
                                </label>
                                <input class="form-check-input" type="radio" name="jenis_kelamin_id_param"
                                    id="kunci_b" value="2">
                                <label class="form-check-label mr-4" for="kunci_b">
                                    Wanita
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="buttonAddMahasiswa" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
