<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-success mb-3" href="<?php echo base_url('admin/dataKelas/tambahData') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Kelas</th>
            <th class="text-center">Uang Pangkal</th>
            <th class="text-center">Dana Sarpras</th>
            <th class="text-center">SPP</th>
            <th class="text-center">Total</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $no=1;foreach ($kelas as $k) :?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $k->nama_kelas ?></td>
                <td>Rp. <?php echo number_format($k->uang_pangkal,0,',','.') ?></td>
                <td>Rp. <?php echo number_format($k->dana_sarpras,0,',','.') ?></td>
                <td>Rp. <?php echo number_format($k->spp,0,',','.') ?></td>
                <td>Rp. <?php echo number_format($k->uang_pangkal+$k->spp,0,',','.') ?></td>
            <td>
                <center>
                <a class="btn btn-primary" href="<?php echo base_url('admin/dataKelas/updateData/'.$k->id_kelas) ?>"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin Hapus')" class="btn btn-danger" href="<?php echo base_url('admin/dataKelas/deleteData'.$k->id_kelas) ?>"><i class="fas fa-trash"></i></a>
                 </center>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>