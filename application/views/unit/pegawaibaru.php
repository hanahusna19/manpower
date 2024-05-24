
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-1">
                                               Pengajuan Pegawai Baru  </div>
                                            <p>Berikut ini adalah tabel pengajuan Proses pengajuan kepegawaian pada departemen SDM melibatkan sejumlah langkah yang perlu diikuti untuk memastikan bahwa rekruitmen dan penempatan pegawai baru berjalan dengan efisien. Berikut adalah tabel yang dimaksud:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?php echo base_url('Unit/tambah_data') ?>" class="btn btn-info btn-sm float-right"> Tambah Data </a>
                            <h6 class="text-lg m-0 font-weight-bold text-dark">Data Tabel Pengajuan Pegawai Baru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       
                                         <tr class="text-center">
                                            <!-- <th>no</th> -->
                                            <th>Id</th>
                                            <th>Tanggal pengajuan</th>
                                            <th>Periode Awal</th>
                                            <th>Periode Akhir</th>
                                            <th>Posisi Pegawai</th>
                                            <th>Status Pegawai</th>
                                            <th>Deskripsi</th>
                                            <th>Jumlah</th>
                                            <th>Unit Kerja</th>
                                            <th style="width: 8%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $no = 1; 
                                    foreach ($baru as $br) : ?>

                                    <tbody>
                                    <tr class="text-center">
                                            <!-- <td><?php echo $no++; ?> </td> -->
                                            <td><?php echo $br['id']; ?> </td>
                                            <td><?php echo $br['tanggal_pengajuan']; ?></td>
                                            <td><?php echo $br['periode_awal']; ?></td>
                                            <td><?php echo $br['periode_akhir']; ?></td>
                                            <td><?php echo $br['posisi_pegawai']; ?></td>
                                            <td><?php echo $br['status_pegawai']; ?></td>
                                            <td><?php echo $br['deskripsi']; ?></td>
                                            <td><?php echo $br['jumlah']; ?></td>
                                            <td><?php echo $br['unit']; ?></td>
                                            <td> 
                                                <a href="<?php echo base_url() ?>Unit/edit_baru/<?php echo $br['id']; ?>" class="btn btn-outline-warning btn-xs"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo base_url() ?>Unit/hapus_baru/<?php echo $br['id']; ?>" class="btn btn-outline-success btn-xs"><i class="fas fa-trash"></i></a>                    
                                            </td>
                                    </tr>
                                    </tbody>
                                    <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
