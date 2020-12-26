<?php 
session_start();

if(!isset($_SESSION['siswa'])){
 
     header("Location: ../login.php");
}
include "../config.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM data WHERE id='$id'");

while ($data = mysqli_fetch_assoc($result)) {
    $nama = $data['nama_siswa'];
    $umur = $data['umur'];
    $alamat = $data['alamat'];
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    $result = mysqli_query($conn,
    "UPDATE data SET nama_siswa='$nama',umur='$umur',alamat='$alamat' WHERE id='$id'");

    header("Location: index.php");

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
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama?>">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur" value="<?= $umur?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat?>">
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