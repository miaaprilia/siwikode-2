<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-primary">Data Wisata Rekreasi</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <a href="<?php echo base_url('admin/form_wisata') ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <!-- Invoice Example -->
        <div class="col-xl-12 col-lg-7 mb-4">
            <div class="card">
                <div class="table-responsive card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Wisata</th>
                                <th>Rating</th>
                                <th>Kontak Person</th>
                                <th>Email</th>
                                <!-- <th>Status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($wisata as $w) : ?>
                                <tr>
                                    <td><a href="#"><?= $no++; ?></a></td>
                                    <td><?= $w['judul']; ?></td>
                                    <td><?= $w['bintang']; ?></td>
                                    <td><?= $w['kontak']; ?></td>
                                    <td><?= $w['email']; ?></td>

                                    <td><a href="<?php echo base_url('admin/wisata/detail/') . $w['id_wisata'] ?>" class="btn btn-sm btn-success">Detail</a>
                                        <a href="<?php echo base_url('admin/wisata/delete/') . $w['id_wisata'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>


                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <!-- Message From Customer-->




    </div>
    <!--Row-->

    <div class="row">
        <div class="col-lg-12 text-center">
            <p>Do you like this template ? you can download from <a href="https://github.com/miaaprilia/SIWIKODE" class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
        </div>
    </div>

</div>