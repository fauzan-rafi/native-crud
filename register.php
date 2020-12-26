<?php 

include "config.php";

if (isset($_POST['regis'])) {

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $nis = $_POST['nis'];
    $level = $_POST['level'];

    $result = mysqli_query($conn,"SELECT username FROM user WHERE username ='$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert(\"Username sudah ada\");
            </script>
        ";

        return false;
    }

    $nis = mysqli_query($conn,"SELECT nis FROM user WHERE nis ='$nis'");
    
    if (mysqli_fetch_assoc($nis)) {
        echo "
            <script>
                alert(\"itu bukan NIS kamu\");
            </script>
        ";

        return false;
    }

    mysqli_query($conn, 
    "INSERT INTO user (username,password,level,nis) VALUE ('$username','$password','$level','$nis')");

    header("Location: login.php");
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
    <title>Register</title>
</head>
<body>
    
<div class="container">
    <div class="row justify-content-md-center">
    <div id="login-row" class="col-md-8 my-4 jumbotron">
        <h3>Register</h3>
        <form id="login-column" action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="user">
        </div>
        <div class="form-group">
            <label for="nis">nis</label>
            <input type="number" class="form-control" id="nis" placeholder="Enter Nis" name="nis">
        </div>
        <div class="form-group">
            <label for="level">Apakah siswa?</label>
            <input type="text" class="form-control" id="level" placeholder="Enter Siswa jika kamu siswa" name="level">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
        </div>
        <button type="submit" class="btn btn-primary" name="regis" >Register</button>
        </form>
        <br>
        
    </div>
    </div>
</div>

</body>
</html>