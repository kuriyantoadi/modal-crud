<!-- Modal tampil user -->

<!-- Awal Modal -->
<div class="modal fade bd-example-modal-lg" id="detail<?php echo $d['nama']; ?>" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Detail nama</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">nama :</label>
                            <div class="col-sm-8">
                                <p><?= $d['nama'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">alamat :</label>
                            <div class="col-sm-8">
                                <p><?= $d['alamat'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Status :</label>
                            <div class="col-sm-8">
                                <p><?= $d['status'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir modal -->



<!-- Modal edit user -->
<div class="modal fade bd-example-modal-lg" id="user<?php echo $d['nama']; ?>" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Detail nama</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <form class="" action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label font-weight-bold">Nama :</label>
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" value="<?= $d['id_user'] ?>" name="id_user" required>
                                    <input type="text" class="form-control" value="<?= $d['nama'] ?>" name="nama" required>
                                    <!-- <p><?= $d['nama'] ?></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label font-weight-bold">Alamat :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?= $d['alamat'] ?>" name="alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label font-weight-bold">Status :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?= $d['status'] ?>" name="status" required>
                                </div>
                            </div>
                        </div>
                        <center>
                            <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan">
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal tambah user -->
<div class="modal fade bd-example-modal-lg" id="tambah" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Detail nama</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <form class="" action="tambah.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label font-weight-bold">Nama :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="" name="nama" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label font-weight-bold">Alamat :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="" name="alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label font-weight-bold">Status :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="" name="status" required>
                                </div>
                            </div>
                        </div>
                        <center>
                            <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" value="simpan">
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>