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
                        <label>Waktu Mulai</label>
                        <input autocomplete="off" class="form-control" required type="datetime-local"
                            name="startTime" />
                    </div>
                    <div class="form-group">
                        <label>Durasi (Menit)</label>
                        <input min="0" autocomplete="off" class="form-control" required type="number"
                            name="durasi" placeholder="Masukkan Durasi Tes (Menit)..." />
                    </div>
                    <div class="form-group">
                        <label>Soal</label>
                        <select class="custom-select" id="soalId" name="soalId" required>
                            <option value="">Pilih Soal</option>

                            <option value=""></option>
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
