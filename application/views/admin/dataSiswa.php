<div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
 <?php echo $this->session->flashdata('pesan') ?>
 <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataSiswa/tambahData') ?>"><i class="fas fa-plus">Tambah Data Siswa</i></a>
<table class="table table-bordered table-striped">
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">NIS</th>
        <th class="text-center">Nama Siswa</th>
        <th class="text-center">Jenis Kelamin</th>
        <th class="text-center">Kelas</th>
        <th class="text-center">Tanggal Daftar</th>
        <th class="text-center">Status</th>
        <th class="text-center">Photo</th>
        <th class="text-center">Action</th>
    </tr>
    <?php $no=1; foreach ($siswa as $s): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $s->nis ?></td>
            <td><?php echo $s->nama_siswa ?></td>
            <td><?php echo $s->jenis_kelamin ?></td>
            <td><?php echo $s->kelas ?></td>
            <td><?php echo $s->tanggal_daftar ?></td>
            <td><?php echo $s->status_desc ?></td>
            <td><img src="<?php echo base_url().'assets/photo/'.$s->photo ?>" width="75px" ></td>
            <td>
                  <center>
                    <a class="btn btn-primary" href="<?php echo base_url('admin/dataSiswa/updateData/'.$s->id_siswa) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-danger" href="<?php echo base_url('admin/dataSiswa/deleteData/'.$s->id_siswa) ?>"><i class="fas fa-trash"></i></a>
                  </center>
                </td>
        </tr>
    <?php endforeach; ?>
</table>

</div>

