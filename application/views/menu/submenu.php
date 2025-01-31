
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg"> 
                    <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
                    <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newSubMenuModal"> Tambah SubMenu Baru</a>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Sub Menu</th>
                        <th scope="col"> Menu</th>
                        <th scope="col"> URL</th>
                        <th scope="col"> Icon</th>
                        <th scope="col"> Aktif </th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>Menu/edit_submenu/<?php echo $sm['id']; ?>" class="badge badge-success">edit</a>
                            <a href="<?php echo base_url() ?>Menu/hapus_submenu/<?php echo $sm['id']; ?>" class="badge badge-danger">hapus</a>
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


                <!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newSubMenuModalLabel"> Tambah SubMenu</h1>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      </div>
      <form action="<?= base_url('menu/submenu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder=" Judul Sub Menu">
          </div>
            <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Pilih Menu</option>
                <?php foreach ($menu as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="SubMenu icon ('Font awesome')">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                <label class="form-check-label" for="is_active">
                    Aktif ?
                </label>
            </div>

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

      