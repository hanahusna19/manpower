
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                               Data Pengelolaan Unit Kerja </div>
                                            <p>Berikut ini adalah tabel pengajuan yang mencakup berbagai Informasi ini bertujuan untuk memberikan transparansi dan memudahkan pemantauan proses rekrutmen yang sedang berjalan. Berikut adalah tabel yang dimaksud:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <button type="button" class="btn btn-outline-success btn-sm float-right" onclick="exportToExcel()"><i class="fas fa-file-excel"></i>   Export</button>
                        <script>
                            function exportToPDF() {
                            const element = document.querySelector('table');
                            html2pdf(element);
                            }

                            function exportToExcel() {
                            const element = document.querySelector('table');
                            const ws = XLSX.utils.table_to_sheet(element);
                            const wb = XLSX.utils.book_new();
                            XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
                            XLSX.writeFile(wb, 'exported_data.xlsx');
                            }
                        </script>
                            <h6 class="m-0 font-weight-bold text-primary"> Data Pengelolaan Unit Kerja</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                        <th>Nama Pegawai</th>
                                        <th>Posisi Jabatan</th>
                                        <th>Tanggal </th>
                                        <th>Periode</th>
                                        <th>Notes</th>
                                        <th style="width: 3%;"> Detail </th>
                                        </tr>
                                    </thead>
                                   

                                    <tbody>
                                    <tr class="text-center">
                                    <td><img src="assets/img/user.png" alt="Profil" class="rounded-circle">   M. Fatih Syaban</td>
                                    <td>Staff</td>
                                    <td>2023/02/11</td>
                                    <td>2023</td>
                                    <td>-</td>
                                    <td><a href="<?= base_url('admin/detailngelola') ?>" type="button" class="btn btn-outline-secondary rounded-pill btn-sm"> <i class="bi bi-info"></i>Detail</a></td>                        
                                    </tr>
                                    <tr class="text-center">
                                    <td><img src="assets/img/user.png" alt="Profil" class="rounded-circle">   M. Fatih Syaban</td>
                                    <td>Staff</td>
                                    <td>2023/02/11</td>
                                    <td>2023</td>
                                    <td>-</td>
                                    <td><a href="<?= base_url('admin/detailngelola') ?>" type="button" class="btn btn-outline-secondary rounded-pill btn-sm"> <i class="bi bi-info"></i>Detail</a></td>                        
                                    </tr>
                                    <tr class="text-center">
                                    <td><img src="assets/img/user.png" alt="Profil" class="rounded-circle">   M. Fatih Syaban</td>
                                    <td>Staff</td>
                                    <td>2023/02/11</td>
                                    <td>2023</td>
                                    <td>-</td>
                                    <td><a href="<?= base_url('admin/detailngelola') ?>" type="button" class="btn btn-outline-secondary rounded-pill btn-sm"> <i class="bi bi-info"></i>Detail</a></td>                        
                                    </tr>
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
