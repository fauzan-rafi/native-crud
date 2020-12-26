<?php 
session_start();

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");
}
include "../config.php";

$upload = new fungsi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $foto = $upload->uploadImg();
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $nilai = $_POST['nilai'];
    
    

    if (!$foto) {
        return false;
    }

    $result = mysqli_query($conn,
    "INSERT INTO data (nama_siswa,foto,nis,kelas,umur,alamat,nilai) VALUES ('$nama','$foto','$nis','$kelas','$umur','$alamat','$nilai')");

    echo "
    <script>
        alert(\"Data berhasil ditambahkan,silahkan kembali\");
    </script>
    ";
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
    <title>Insert data</title>
</head>
<body>
    
        <div class="container my-4">
            <div class="row justify-content-center ">
                    <div class="col-lg-4 jumbotron">
                    <h3>Silahkan Input data</h3>
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>
                            <div class="form-group">
                                <label for="nis">Nis</label>
                                <input type="number" class="form-control" id="nis" name="nis">
                            </div>
                            <div class="form-group">
                                <label for="kelas">kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="nilai">Nilai</label>
                                <input type="number" class="form-control" id="nilai" name="nilai">
                            </div>
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