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
                <form method="POST" enctype="multipart/form-data" action="/admin/soal">
                    @csrf
                    <div class="form-group">
                        <label>Soal</label>
                        <input autocomplete="off" class="form-control" required type="text" name="nama"
                            id="nama" placeholder="Masukkan Nama Soal..." />
                    </div>
                    {{-- <div class="form-group">
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
                    </div> --}}
                    <div class="form-group">
                        <label>File Excel</label>
                        <input autocomplete="off" class="form-control" required type="file" name="file"
                            id="File" placeholder="Masukkan File Excel..." />
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
