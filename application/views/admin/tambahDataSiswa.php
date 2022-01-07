<div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="width: 60%; margin-bottom: 100%;">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataSiswa/tambahDataAksi') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>NIS</label>
                <input type="number" name="nis" class="form-control">
                <?php echo form_error('nis','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control">
                <?php echo form_error('nama_siswa','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="jabatan" class="form-control">
                    <option value="">--Pilih Kelas--</option>
                    <?php foreach($kelas as $k): ?>
                    <option value="<?php echo $k->nama_kelas ?>"><?php echo $k->nama_kelas ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
            </div>
             <div class="form-group">
                <label>Tanggal Daftar</label>
                <input type="date" name="tanggal_daftar" class="form-control">
                <?php echo form_error('tanggal_daftar','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status_desc" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="Active">Active</option>
                    <option value="Keluar">Keluar</option>
                </select>
                 <?php echo form_error('status_desc','<div class="text-small text-danger"></div>') ?>
            </div>
             <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
                <?php echo form_error('photo','<div class="text-small text-danger"></div>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

</div>


