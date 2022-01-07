<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
<div class="card" style="width: 60%;" >
    <div class="card-body">
        <form method="POST" action="<?php echo base_url ('admin/dataKelas/tambahDataAksi') ?>">
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control">
            <?php echo  form_error ('nama_kelas','<div class="text-small text-danger"></div>') ?>
        </div>
        
        <div class="form-group">
            <label>Uang Pangkal</label>
            <input type="text" name="uang_pangkal" class="form-control">
            <?php echo  form_error ('uang_pangkal','<div class="text-small text-danger"></div>') ?>
        </div>
          <div class="form-group">
            <label>Dana Sarpras</label>
            <input type="text" name="dana_sarpras" class="form-control">
            <?php echo  form_error ('dana_sarpras','<div class="text-small text-danger"></div>') ?>
        </div>
        <div class="form-group">
            <label>Uang SPP</label>
            <input type="text" name="spp" class="form-control">
            <?php echo  form_error ('spp','<div class="text-small text-danger"></div>') ?>
        </div>
     
        <button type="submit" class="btn btn-success mb-5">Submit</button>
        </form>
    </div>
</div>

</div>