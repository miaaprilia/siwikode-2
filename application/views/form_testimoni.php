<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-primary">Data Testimoni</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <!--  -->

    <div class="row mb-3">
        <div id="form-add-list" class="col-lg-12">
            <!-- General Element -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Testimoni</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() ?>admin/testimoni/save" method="POST">

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Wisata Yang Dikunjungi</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="wisata_id">
                                    <option value="">Pilih Wisata</option>
                                    <?php foreach ($get_wisata as $get_wisata) { ?>

                                        <option value=" <?php echo $get_wisata['id_jenis_wisata']; ?>"><?php echo $get_wisata['nama_jenis_wisata']; ?></option>
                                    <?php } ?>
                                    <?php foreach ($get_kuliner as $get_kuliner) { ?>

                                        <option value=" <?php echo $get_kuliner['id_jenis_kuliner']; ?>"><?php echo $get_kuliner['nama_jenis_kuliner']; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Profesi</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="profesi_id">
                                    <option value="">Pilih Profesi</option>
                                    <?php foreach ($get_profesi as $get_profesi) { ?>

                                        <option value=" <?php echo $get_profesi['id']; ?>"><?php echo $get_profesi['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Rating</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="rating" name="rating" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Testimoni</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="komentar" name="komentar" autofocus></textarea>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tipe" name="tipe" autofocus>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <a href="<?php echo base_url('admin/base_testimoni') ?>" class="btn btn-success" type="submit">Back</a>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>