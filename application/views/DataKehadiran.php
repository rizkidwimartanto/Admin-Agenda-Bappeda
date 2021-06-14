<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="flash-data" data-flashdata="<?php echo $this->session->tempdata('flash') ?>"></div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <a href="<?php echo base_url() . "ControllersKehadiran/FormTambah"; ?>">
                <button type="button" class="btn" id="zoom">+ Tambah Data</button>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">

                <form class="d-flex mb-3" method="POST">
                    <input type="text" id="TombolSearch" name="keyword" placeholder="Cari Data">
                </form>

                <?php if (empty($DataKehadiran)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Data Kehadiran</strong> <?php echo $this->session->tempdata('flashcari') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kepala Bappeda</th>
                            <th>Sekretariat</th>
                            <th>Kepala Bidang Ekonomi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php foreach ($DataKehadiran as $data) : ?>
                        <tbody>
                            <tr>
                                <td><?php echo ++$start; ?></td>
                                <td><?php echo $data['kepala']; ?></td>
                                <td><?php echo $data['sekretariat']; ?></td>
                                <td><?php echo $data['kepala_bidang_ekonomi']; ?></td>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah yakin ingin dihapus ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a class="btn btn-danger" href="<?php echo base_url(); ?>ControllersKehadiran/HapusData/<?php echo $data['id']; ?>">
                                                        Hapus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-info" href="<?php echo base_url(); ?>ControllersKehadiran/PilihData/<?php echo $data['id']; ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>

            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->