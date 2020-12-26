<?php 
session_start();

if(!isset($_SESSION['siswa'])){

    header("Location: ../login.php");
}

include "../config.php";


$nis = $_SESSION['nama'];

$result = mysqli_query($conn,"SELECT * FROM data WHERE nis='$nis' ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    
<div class="container my-4">
    <div class="row justify-content-center ">
        <div class="col-lg-8 jumbotron">
        <h2>Hallo</h2>

            <a role="btn" class="btn btn-secondary text-light" href="../logout.php">Logout</a>
            <br>
            <br>
            <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Nis</th>
                <th scope="col">Kelas</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nilai</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; 
                while($data = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?= $i; ?></thd>
                    <td><?= $data['nama_siswa'] ?></td>
                    <td><img src="../img/<?= $data['foto'] ?>" alt="" class="img-thumbnail"></td>
                    <td><?= $data['nis'] ?></td>
                    <td><?= $data['kelas'] ?></td>
                    <td><?= $data['umur'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['nilai'] ?></td>
                    <td><a role="button" class="btn btn-primary text-light" href="edit.php?id=<?= $data['id']?>">EDIT</a> 
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>