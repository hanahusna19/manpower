
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-dark text-uppercase mb-1">
                                               Pengajuan Pengelolaan </div>
                                            <p>Berikut ini adalah tabel pengajuan yang mencakup berbagai jenis permohonan yang telah diajukan, status pengajuan, dan tanggal pengajuan.
                                            Harap diperhatikan bahwa informasi ini bertujuan untuk memberikan transparansi dan memudahkan pemantauan proses pengajuan yang sedang berjalan. Berikut adalah tabel yang dimaksud:
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="<?php echo base_url('Perencanaan/tambahngelola') ?>" class="btn btn-danger btn-md float-right"> Tambah Data </a>
                            <h6 class="text-lg m-0 font-weight-bold text-dark">Tabel Pengelolaan </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Tanggal Pengajuan</th>
                                            <th>Periode</th>
                                            <th>Posisi Pegawai</th>
                                            <th>Status Pegawai</th>
                                            <th>Deskripsi</th>
                                            <th>Unit Kerja</th>
                                            <th>Aksi </th>
                                           
                                        </tr>
                                    </thead>
                                    <?php 
                                    $no = 1; 
                                    foreach ($ngelola as $pl) : ?>
                                    <tbody>
                                    <tr class="text-center">
                                            <!-- <td><?php echo $no++; ?> </td> -->
                                            <td><?php echo $pl['tanggal_pengajuan']; ?></td>
                                            <td><?php echo $pl['periode']; ?></td>
                                            <td><?php echo $pl['posisi_pegawai']; ?></td>
                                            <td><?php echo $pl['status_pegawai']; ?></td>
                                            <td><?php echo $pl['deskripsi']; ?></td>
                                            <td><?php echo $pl['unit']; ?></td>
                                            <td> 
                                                <a href="<?php echo base_url() ?>Perencanaan/edit_ngelola/<?php echo $pl['id']; ?>" class="btn btn-outline-warning btn-xs"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo base_url() ?>Perencanaan/hapus_ngelola/<?php echo $pl['id']; ?>" class="btn btn-outline-success btn-xs"><i class="fas fa-trash"></i></a>                    
                                            </td>
                                    </tr>
                                    </tbody>
                                    <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="<?php echo base_url('Perencanaan/tambahbulan') ?>" class="btn btn-danger btn-md float-right"> Tambah Data </a>
                            <h6 class="text-lg m-0 font-weight-bold text-dark">Tabel Pengajuan Bulan </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>Mei</th>
                                        <th>Juni</th>
                                        <th>Juli</th>
                                        <th>Ags</th>
                                        <th>Sep</th>
                                        <th>Okt</th>
                                        <th>Nov</th>
                                        <th>Des</th>
                                        <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php 
                                    $no = 1; 
                                    foreach ($bulan as $bl) : ?>
                                    <tbody>
                                    <tr class="text-center">
                                            <!-- <td><?php echo $no++; ?> </td> -->
                                            <td><?php echo $bl['januari']; ?></td>
                                            <td><?php echo $bl['februari']; ?></td>
                                            <td><?php echo $bl['maret']; ?></td>
                                            <td><?php echo $bl['april']; ?></td>
                                            <td><?php echo $bl['mei']; ?></td>
                                            <td><?php echo $bl['juni']; ?></td>
                                            <td><?php echo $bl['juli']; ?></td>
                                            <td><?php echo $bl['agustus']; ?></td>
                                            <td><?php echo $bl['september']; ?></td>
                                            <td><?php echo $bl['oktober']; ?></td>
                                            <td><?php echo $bl['november']; ?></td>
                                            <td><?php echo $bl['desember']; ?></td>
                                            <td> 
                                                <a href="<?php echo base_url() ?>Perencanaan/edit_bulan/<?php echo $bl['id']; ?>" class="btn btn-outline-warning btn-xs"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo base_url() ?>Perencanaan/hapus_bulan/<?php echo $bl['id']; ?>" class="btn btn-outline-success btn-xs"><i class="fas fa-trash"></i></a>                    
                                            </td>
                                    </tr>
                                    </tbody>
                                    <?php endforeach ?>
                                    </tbody>
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
