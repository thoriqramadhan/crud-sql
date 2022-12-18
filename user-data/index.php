<?php
require 'function.php';
$userss = query("SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Data User</title>
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">
                <img src="F.jpeg" alt="Logo" width="27" class="d-inline-block align-text-top">
                Dashboard
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        <h1>Data user</h1>
        <table class="table">
            <button type="button" class="btn btn-primary" id="btn-add" data-bs-toggle="modal"
                data-bs-target="#tambahsetoran">
                Tambah data
            </button>

            <div class="modal fade" id="tambahsetoran" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama User</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="setoran" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="statuss" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan">
                                    </diiv>
                                </div>
                                <div class="modal-footer ">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="btntambahUser">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <thead class="table table-dark mt-1">
                        <tr>
                            <th>No.</th>
                            <th>Nama User</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table table-dark table-striped">
                        <?php $i = 1; ?>
                        <?php foreach ($userss as $user): ?>
                        <tr class="text-break">
                            <td><?= $i; ?></td>
                            <td><?= $user["nama"] ?></td>
                            <td><?= $user["alamat"] ?></td>
                            <td><?= $user["pekerjaan"] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubah<?= $user["id"] ?>">
                                    Ubah
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin untuk menghapus?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="" method="POST">
                                            <input name="id" type="hidden" value="<?= $user["id"];?>">
                                            <button class="btn btn-danger" type="submit" name="btnHapus">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ubah -->
                        <div class="modal fade" id="ubah<?= $user["id"] ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data User</h1>
                                    </div>
                                    <form action="" method="post">
                                        <input type="hidden" name="id_user" value="<?= $user["id"] ?>">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama User :</label>
                                                <input type="text" name="nama" class="form-control" id="nama"
                                                    value="<?= $user["nama"] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="user" class="form-label">Alamat :</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat"
                                                    value="<?= $user["alamat"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="statuss" class="form-label">Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan"
                                                    value="<?= $user["pekerjaan"] ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" name="btnubahuser"
                                                class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Ubah -->
                        <?php ++$i;?>
                        <?php endforeach ?>
                    </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
<?php
if(isset($_POST["btnHapus"])){
    $id = $_POST["id"];
mysqli_query($con, "DELETE FROM user WHERE id =$id");
echo"<script>
document.location.href = 'index.php'
</script>";

};

if (isset($_POST["btntambahUser"])){
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$pekerjaan = $_POST["pekerjaan"];

mysqli_query($con,"INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`)
VALUES (NULL, '$nama', '$alamat', '$pekerjaan');");


echo"<script>
document.location.href = 'index.php'
</script>";
};

if(isset($_POST["btnubahuser"])){
$id = $_POST["id_user"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$pekerjaan = $_POST["pekerjaan"];

mysqli_query($con,"UPDATE `user` SET `nama` = '$nama', `alamat` = '$alamat', `pekerjaan` = '$pekerjaan' WHERE
`user`.`id` = $id;");

if(mysqli_affected_rows($con)>0){
echo "
<script>
alert('Berhasil mengubah data!');
document.location.href = 'index.php';
</script>
";
}else{
echo "
<script>
alert('Gagal mengubah data!');
document.location.href = 'index.php';
</script>
";
}
}
?>