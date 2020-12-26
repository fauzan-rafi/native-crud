<?php 
session_start();

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");
}


include "../config.php";

$result = mysqli_query($conn,"SELECT * FROM data ORDER BY id ASC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
        <!-- <div class="container">
        <h2>Sistem Informasi Sekolah</h2>

            <a role="btn" class="btn btn-primary text-light" href="insert.php">INSERT</a>
            <a role="btn" class="btn btn-dark text-light" href="../logout.php">Logout</a>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nis</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nilai</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                </?php $i = 1; 
                while($data = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td></?= $i; ?></thd>
                    <td></?= $data['nama_siswa'] ?></td>
                    <td></?= $data['nis'] ?></td>
                    <td></?= $data['kelas'] ?></td>
                    <td></?= $data['nilai'] ?></td>
                    <td><a role="button" class="btn btn-primary text-light" href="edit.php?id=<?= $data['id']?>">EDIT</a> 
                    <td><a role="button" class="btn btn-danger text-light" href="delete.php?id=<?= $data['id']?>" onclick="return confirm('yakin dihapus')" >DELETE</a>
                    </td>
                </tr>
                <//?php $i++; } ?>
            </tbody>
            </table>
        </div> -->
        <nav class="navbar navbar-expand-md navbar-dark " style="background-color: #2d28d7; height:75px;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">
    <img src="../img/480px-Bootstrap_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <span class="menu-collapsed">Dashboard</span>
  </a>
  <!-- <form class="d-none d-md-inline-block form-inline ml-auto p-4 mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
        <div class="input-group-append">
            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
        </div>
    </div>
  </form> -->
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <!-- <span class="submenu-icon ml-auto"></span> -->
                    <span class="ml-auto"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Charts</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Reports</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Tables</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="ml-auto"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Password</span>
                </a>
                <a href="../logout.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Logout</span>
                </a>
            </div>            
           
        </ul>
    </div> <!-- End Sidebar -->

    <!-- MAIN -->
    <div class="col container-fluid">
        
    <ol class="breadcrumb mb-4" style="z-index:1; margin-top:-25px;">
        <li class="breadcrumb-item active" style="color:#00000;font-weight: bold;">
            Sistem Input data
        </li>
    </ol>

        <h1>Hello <?php echo $_SESSION["user"]; ?></h1>
        <br>
        
        <a class="btn btn-primary" role="button" href="insert.php">Insert data</a>
                    <br>
                    <br>
        <table class="table table-striped">
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
                    <td><a role="button" class="btn btn-danger text-light" href="delete.php?id=<?= $data['id']?>" onclick="return confirm('yakin dihapus')" >DELETE</a>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
            </table>

    </div>
</div>
</body>
</html>