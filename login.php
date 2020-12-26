<?php 
session_start();
if (isset($_SESSION["login"])) {
    if (isset($_SESSION["admin"])) {
        header("Location: admin/index.php");
        exit;
    }else {
        header("Location: user/index.php");
        exit;
    }
}

include "config.php";

if (isset($_POST['login'])) {
    
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'  ");

    $data = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) === 1) {
        if ($data['username'] == "admin" && $data['level'] == 'admin') {
            $_SESSION["admin"] = true;
            $_SESSION["user"] = "admin";
            $_SESSION["login"] = true;
            header("Location: admin/index.php");
            exit;
        }else {
            $_SESSION["siswa"] = true;
            $_SESSION["nama"] = $data['nis'];
            $_SESSION["login"] = true;
            header("Location: user/index.php");
            exit;
        }
    }

    $error = true;
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
    <title>Login</title>
</head>
<body>

<?php 

if (isset($error)) {
    echo"
    
    <div class=\"alert alert-danger\" role=\"alert\">
        Username /Password salah!!!
    </div>
    
    ";
}

?>
    
<div class="container">
    <div class="row justify-content-md-center">
    <div id="login-row" class="col-md-8 my-4 jumbotron">
        <h3>Login</h3>
        <form id="login-column" action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="user">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
        </div>
        <button type="submit" class="btn btn-primary" name="login" >Login</button>
        </form>
        <br>
        <a href="register.php" role="btn" class="btn btn-info text-light">Register</a>
    </div>
    </div>
</div>

</body>
</html>