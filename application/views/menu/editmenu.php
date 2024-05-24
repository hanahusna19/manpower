
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                <!-- /.container-fluid -->


                <!-- Modal -->
  <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newEditMenuModal"> Edit Menu Baru</a>
    <div class="modal fade" id="newEditMenuModal" tabindex="-1" aria-labelledby="newEditMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newEditMenuModalLabel"> Edit Menu Baru</h1>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      </div>
      <form action="<?php echo base_url('Menu/proses_editmenu'); ?>" method="POST" class="form-group">
      <input type="hidden" name="id" value="<?php echo $user_menu['id']; ?>">

      <div class="modal-body">
          <div class="form-group">
    <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu" value="<?php echo $user_menu['menu']; ?>">
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


               