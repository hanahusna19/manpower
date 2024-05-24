
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                <!-- /.container-fluid -->


                <!-- Modal -->
 <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newEditSubMenuModal"> Edit Menu Baru</a>
  <div class="modal fade" id="newEditSubMenuModal" tabindex="-1" aria-labelledby="newEditSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newEditSubMenuModalLabel"> Edit SubMenu</h1>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      </div>
      <form action="<?= base_url('menu/submenu'); ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $user_sub_menu['id']; ?>">

        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder=" Judul Sub Menu" value="<?php echo $user_sub_menu['title']; ?>">
          </div>
            <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control" value="<?php echo $user_sub_menu['menu_id']; ?>">
                <option value="">Pilih Menu</option>
                <?php foreach ($menu as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url" value="<?php echo $user_sub_menu['url']; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="SubMenu icon ('Font awesome')" value="<?php echo $user_sub_menu['icon']; ?>">
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
        <button type="submit" class="btn btn-primary"> Edit </button>
      </div>
    </form>
    </div>
  </div>
</div>

      


               