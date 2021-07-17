<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-primary">Data Profesi</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">
        <div id="form-add-list" class="col-lg-12">
            <!-- General Element -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Profesi</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() ?>admin/profesi/save" method="POST">

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Profesi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Silakan isi disini" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                                <th>Profesi</th>
                                <!-- <th>Status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($profesi as $p) : ?>
                                <tr>
                                    <td><a href="#"><?= $no++; ?></a></td>
                                    <td><?= $p['nama']; ?></td>

                                    <!-- <td><a href="<?php echo base_url('admin/profesi/detail/') . $p['id'] ?>" class="btn btn-sm btn-success">Detail</a> -->
                                    <td> <a href="<?php echo base_url('admin/profesi/delete/') . $p['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
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