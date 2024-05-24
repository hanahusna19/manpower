
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <form action="<?php echo base_url('Perencanaan/proses_editbulan'); ?>" method="POST" class="form-group">
                    <input type="hidden" name="id" value="<?php echo $bulan['id']; ?>">

                    <div class="form-group">
                    <div class="month">
                        <label for="january">Januari</label>
                        <input type="number" id="januari" name="januari" placeholder="Januari" value="<?php echo $bulan['januari']; ?>">
                    </div>
                    <div class="month">
                        <label for="february">Februari</label>
                        <input type="number" id="februari" name="februari" placeholder="Februari" value="<?php echo $bulan['februari']; ?>">
                    </div>
                    <div class="month">
                        <label for="march">Maret</label>
                        <input type="number" id="maret" name="maret" placeholder="Maret" value="<?php echo $bulan['maret']; ?>">
                    </div>
                    <div class="month">
                        <label for="april">April</label>
                        <input type="number" id="april" name="april" placeholder="April" value="<?php echo $bulan['april']; ?>">
                    </div>
                    <div class="month">
                        <label for="may">Mei</label>
                        <input type="number" id="mei" name="mei" placeholder="Mei" value="<?php echo $bulan['mei']; ?>">
                    </div>
                    <div class="month">
                        <label for="june">Juni</label>
                        <input type="number" id="juni" name="juni" placeholder="Juni" value="<?php echo $bulan['juni']; ?>">
                    </div>
                    <div class="month">
                        <label for="july">Juli</label>
                        <input type="number" id="juli" name="juli" placeholder="Juli" value="<?php echo $bulan['juli']; ?>">
                    </div>
                    <div class="month">
                        <label for="august">Agustus</label>
                        <input type="number" id="agustus" name="agustus" placeholder="Agustus" value="<?php echo $bulan['agustus']; ?>">
                    </div>
                    <div class="month">
                        <label for="september">September</label>
                        <input type="number" id="september" name="september" placeholder="September" value="<?php echo $bulan['september']; ?>">
                    </div>
                    <div class="month">
                        <label for="october">Oktober</label>
                        <input type="number" id="oktober" name="oktober" placeholder="Oktober" value="<?php echo $bulan['oktober']; ?>">
                    </div>
                    <div class="month">
                        <label for="november">November</label>
                        <input type="number" id="november" name="november" placeholder="November" value="<?php echo $bulan['november']; ?>">
                    </div>
                    <div class="month">
                        <label for="december">Desember</label>
                        <input type="number" id="desember" name="desember" placeholder="Desember" value="<?php echo $bulan['desember']; ?>">
                    </div>
                </div>
                 <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-md" id="submitButton"3> Simpan</button>
                  <button type="reset" class="btn btn-danger btn-md" id="closePopupButton">Reset</button>
                </div>
              </form>


                </div>
                <!-- /.container-fluid -->

                <style>

.form-group .month {
    flex: 1 0 21%; /* Mengatur setiap kolom agar memiliki lebar sekitar 21% */
    margin: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

@media (max-width: 1024px) {
    .form-group .month {
        flex: 1 0 46%; /* Pada ukuran layar sedang, setiap kolom memiliki lebar sekitar 46% */
        display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }
}

@media (max-width: 768px) {
    .form-group .month {
        flex: 1 0 48%; /* Pada ukuran layar kecil, setiap kolom memiliki lebar sekitar 48% */
    }
}

@media (max-width: 480px) {
    .form-group .month {
        flex: 1 0 100%; /* Pada ukuran layar sangat kecil, setiap kolom memiliki lebar 100% */
    }
}
        </style>