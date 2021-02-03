<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <center>
                <h3 style="margin-top:  25px;"><b>Modal CRUD</b></h3>
            </center>
        </div>

    </div>


    <div class="row mb-3">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
            Cari User : <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
        </div>
    </div>


    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "tambah-berhasil") {
            echo "
						<div class='alert alert-info ' role='alert'>
							<center>Data Guru Berhasil Ditambah</div>";
        } elseif ($_GET['pesan'] == "tambah-gagal") {
            echo "
						<div class='alert alert-danger' role='alert'>
							<center>Data Guru Gagal Ditambah
						</div>
                        ";
        } elseif ($_GET['pesan'] == "hapus-berhasil") {
            echo "
						<div class='alert alert-info' role='alert'>
							<center>Data Berhasil Dihapus
						</div>
						";
        } elseif ($_GET['pesan'] == "hapus-gagal") {
            echo "
						<div class='alert alert-danger' role='alert'>
							<center>Maaf, Proses Hapus Gagal
						</div>";
        }
    }
    ?>

    </a><button type="button" style="margin: 20px 20px" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah</button>

    <table class="table table-bordered table-hover" id="domainsTable">
        <thead>
            <tr>
                <th>
                    <center>No
                </th>
                <th>
                    <center>Nama
                </th>
                <th>
                    <center>Opsi
                </th>

            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from user ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td>
                    <center><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $d['nama']; ?>
                </td>
                <td>
                    <center>
                        <a type="button" class="btn btn-danger btn-sm" href="hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['nama']; ?> ?')">Hapus</a>
                        </a><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#user<?php echo $d['nama'] ?>" id=".$d['nama'].">Edit</button>
                        </a><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail<?php echo $d['nama'] ?>" id=".$d['nama'].">Detail</button>
                </td>
            </tr>

            <?php include('modal.php'); ?>

        <?php
        } ?>
    </table>
</div>

</div>

<?php include('footer.php') ?>