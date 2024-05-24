
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                 
                    <div class="row">
                        <?= form_open_multipart('user/edit'); ?>
                        <form>
                


                
                                    
                      <!-- /row -->
                    </div>
                       
                </div>
                <!-- /.container-fluid -->

                <div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Unit Kerja</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="unit" name="unit" value="<?= $user['unit']; ?>">
								</div>
							</div>
                    <div class="form-group row col-lg-8">
                    <h6 class="mb-0">Phone</h6>
                        <div class="col-sm-10">
                          <div class="row">
                           <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user ['image']; ?>" class="img-thumbnail">
                           </div>
                             <div class="col-sm-9">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Pilih File</label>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Status Pegawai</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" id="status" name="status" value="<?= $user['status']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Posisi Pegawai</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $user['posisi']; ?>">
								</div>
							</div>
							<div class="row">
                            <div class="form-group row justify-content-end"> 
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-outline-success">Edit </button>
                            </div>
                    </div>
							</div>
						</div>
					</div>
                </div>
                </form>