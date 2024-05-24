
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                      <div class="col-lg-12">
                        <?= $this->session->flashdata('message'); ?>
                        
                        <div class="row gutters-sm">
                        <div class="col-md-6 mb-3">
            <div class="card card-dark card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top" alt="...">
                </div>

                <h3 class="profile-username text-center"><?= $user['name']; ?></h3>

                <p class="text-muted text-center"><?= $user['email']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Status Pegawai</b> <b class="float-right"><?= $user['status']; ?></b>
                  </li>
                  <li class="list-group-item">
                    <b>Posisi Pegawai</b> <b class="float-right"><?= $user['posisi']; ?></b>
                  </li>
                  <li class="list-group-item">
                    <b>Unit Kerja</b> <b class="float-right"><?= $user['unit']; ?></b>
                  </li>
                  <li class="list-group-item">
                    <b>Periode</b> <b class="float-right"><?= date('d F Y', $user['date_created']); ?></b>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->

              
            </div>
          </div>
        </div>
                    </div>

                
             
            </div>
                </div>
                
                
                <!-- /.container-fluid -->


                
      