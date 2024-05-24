
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg-6"> 
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
                   <?= $this->session->flashdata('message'); ?>
                    <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newMenuModal"> Tambah Menu Baru</a>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>Menu/editmenu/<?php echo $m['id']; ?>" class="badge badge-success">edit</a>
                            <a href="<?php echo base_url() ?>Menu/hapusmenu/<?php echo $m['id']; ?>" class="badge badge-danger">hapus</a>

                        </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                    </div>
                </div>
             </div>
                <!-- /.container-fluid -->




                <!-- TAMBAH MENU Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMenuModalLabel"> Tambah Menu Baru</h1>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
    <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
  </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary"> Tambah </button>
      </div>
    </form>
    </div>
  </div>
</div>

      <!-- EDIT MENU MODAL -->
