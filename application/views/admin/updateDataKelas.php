<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
<div class="card" style="width: 60%;" >
    <div class="card-body">
        <?php foreach ($kelas as $k): ?>
        <form method="POST" action="<?php echo base_url ('admin/dataKelas/updateDataAksi') ?>">
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="hidden" name="id_kelas" class="form-control" value="<?php echo $k->id_kelas ?>">
            <input type="text" name="nama_kelas" class="form-control" value="<?php echo $k->nama_kelas ?>">
            <?php echo  form_error ('nama_kelas','<div class="text-small text-danger"></div>') ?>
        </div>
        
        <div class="form-group">
            <label>Uang Pangkal</label>
            <input type="number" name="uang_pangkal" class="form-control" value="<?php echo $k->uang_pangkal ?>">
            <?php echo  form_error ('uang_pangkal','<div class="text-small text-danger"></div>') ?>
        </div>
        <div class="form-group">
            <label>Uang SPP</label>
            <input type="number" name="spp" class="form-control" value="<?php echo $k->spp ?>">
            <?php echo  form_error ('spp','<div class="text-small text-danger"></div>') ?>
        </div>
     
        <button type="submit" class="btn btn-success mb-5">Update</button>
        </form>
        <?php endforeach ?>
    </div>
</div>

</div>