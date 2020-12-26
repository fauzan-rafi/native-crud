<?php 
 session_start();

 if(!isset($_SESSION['admin'])){
 
     header("Location: ../login.php");
 }
include "../config.php";

$uploadgambar = new fungsi();

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM data WHERE id='$id'");

while ($data = mysqli_fetch_assoc($result)) {
    $nama = $data['nama_siswa'];
    $foto = $data['foto'];
    $nis = $data['nis'];
    $kelas = $data['kelas'];
    $umur = $data['umur'];
    $alamat = $data['alamat'];
    $nilai = $data['nilai'];
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $nilai = $_POST['nilai'];
    $id = $_POST['id'];

    $gambarLama = htmlspecialchars($_POST['gambarLama']);

    if ($_FILES['foto']['error'] === 4) {

        $foto = $gambarLama;

    }else {

        $foto = $uploadgambar->uploadImg();

    }

    $result = mysqli_query($conn,
    "UPDATE data SET nama_siswa='$nama',foto='$foto',nis='$nis',kelas='$kelas',umur='$umur',alamat='$alamat',nilai='$nilai' WHERE id='$id'");

    if (mysqli_affected_rows($conn) > 0) {
        echo"<script>
        alert(\"data berhasil di perbarui\");
        document.location.href = 'index.php'
        </script>";
    }else {
        echo"<script>
        alert(\"data gagal di perbarui\");
        document.location.href = 'index.php'
        </script>";
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Edit</title>
</head>
<body>
    

        <div class="container my-4">
            <div class="row justify-content-center ">
                    <div class="col-lg-4 jumbotron">
                    <h3>Silahkan Edit data</h3>
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama?>">
                            </div>
                            <input type="hidden" name="gambarLama" value="<?= $data['foto'] ?>">
                            <div>
                                <label for="foto">Gambar</label>
                                <img src="../img/<?= $data['foto']; ?>" class="img-thumbnail" alt="">
                                <input type="file" name="foto" id="foto">
                             </div>
                            <div class="form-group">
                                <label for="nis">Nis</label>
                                <input type="number" class="form-control" id="nis" name="nis" value="<?= $nis?>">
                            </div>
                            <div class="form-group">
                                <label for="kelas">kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $kelas?>">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur" value="<?= $umur?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat?>">
                            </div>
                            <div class="form-group">
                                <label for="nilai">Nilai</label>
                                <input type="number" class="form-control" id="nilai" name="nilai" value="<?= $nilai?>">
                            </div>
                                <input type="hidden" name="id" value="<?= $id ?>">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <br>
                        <br>
                        <a href="index.php" role="btn" class="btn btn-info text-light">Back</a>
                    </div>
                        
                </div>
            </div>
        </div>
</body>
</html>