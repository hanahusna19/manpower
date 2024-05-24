                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <form action="<?php echo base_url('Perencanaan/tambahaksingelola'); ?>" method="POST" class="form-group">
                    <div class="form-group">
                    <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
                    <div class="col-sm-6">
                    <input type="date" name="tanggal_pengajuan" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="periode">Periode</label>
                    <div class="col-sm-6">
                    <input type="date" name="periode" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="posisi_pegawai" class="form-label">Posisi Pegawai</label>
                    <div class="col-sm-6">
                    <select name="posisi_pegawai" id="posisi_pegawai" class="form-control">
                    <option value="">Pilih Posisi</option>
                    <option value="Direktur">Direktur</option>
                    <option value="Asisten Direktur">Asisten Direktur</option>
                    <option value="Supervisor">Supervior</option>
                    <option value="Staff">Staff</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputState" class="form-label">Status Pegawai</label>
                    <div class="col-sm-6">
                    <select name="status_pegawai" id="status_pegawai" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="Tetap">TETAP</option>
                    <option value="Kontrak">KONTRAK</option>
                    <option value="PNS">PNS</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <div class="col-sm-6">
                    <textarea id="deskripsi" name="deskripsi" class="textarea" 
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-6">
                    <label for="unit">Unit Kerja</label>
                    <input type="text" id="unit" name="unit" class="form-control" placeholder="Unit kerja">
                    </div>
                    </div>
                     <!-- BUTTON -->
                    <div class="form-group">
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-md" id="submitButton"3> Simpan</button>
                    <button type="reset" class="btn btn-danger btn-md" id="closePopupButton">Reset</button>
                    </div>
                    </div>