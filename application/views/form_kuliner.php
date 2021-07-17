<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-primary">Data Wisata Kuliner</h1>
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
                    <h6 class="m-0 font-weight-bold text-primary">Add Wisata Kuliner</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() ?>admin/tambah_kuliner/save" method="POST">

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kuliner</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jenis_kuliner_id">
                                    <option value="">Pilih Wisata Kuliner</option>
                                    <?php foreach ($get_kuliner as $get_kuliner) { ?>
                                        <option value="<?php echo $get_kuliner['id_jenis_kuliner']; ?>"><?php echo $get_kuliner['nama_jenis_kuliner']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Wisata Rekreasi</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jenis_wisata_id">
                                    <?php foreach ($get_wisata as $get_wisata) { ?>
                                        <option value="<?php echo $get_wisata['id']; ?>"><?php echo $get_wisata['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="foto" name="foto" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Fasilitas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Bintang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bintang" name="bintang" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kontak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kontak" name="kontak" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="alamat" name="alamat" autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Situs Web</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="web" name="web" autofocus>
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
                                <a href="<?php echo base_url('admin/base_kuliner') ?>" class="btn btn-success" type="submit">Back</a>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>