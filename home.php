<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="business-frontpage.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
 
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Smart School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="register.php" >Register</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<!--  -->

<div id="slider" class="section main_slider">
      <div class="">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/image1.jpg" style="height: 103vh;" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block ">
                <h5 class="text-dark"></h5>
                <p class="text-dark"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/image3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-dark">
                <h5 class="text-dark"></h5>
                <p class="text-dark"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/image2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-dark">
                <h5 class="text-dark"></h5>
                <p class="text-dark"></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <!-- membuat banner 
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="color: beige;">
                    <h2>Lorem Ipsum dolor</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, 
                        excepturi temporibus adipisci eligendi libero aliquam optio deserunt </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    -->
    <br>
    <br>
    <br>

<div class="container">

<div class="row">
  <div class="col-md-8 mb-5">
    <h2>What We Do</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
    <a class="btn btn-primary btn-lg" href="register.php">Call to Action &raquo;</a>
  </div>
  <div class="col-md-4 mb-5">
    <h2>Contact Us</h2>
    <hr>
    <address>
      <strong>Start with aour school</strong>
      <br>3481 Melrose Place
      <br>Beverly Hills, CA 90210
      <br>
    </address>
    <address>
      <abbr title="Phone">P:</abbr>
      (123) 456-7890
      <br>
      <abbr title="Email">E:</abbr>
      <a href="mailto:#">name@example.com</a>
    </address>
  </div>
</div>

</div>
<!-- /.container -->

<!-- Footer -->
<!-- /.container -->
    <!-- membuat galery --> <br>

    <article class="container">
        <div class="row text-center d-flex justify-content-around">
            <div class="col-sm-9" style="color:black;">
                <h2>School</h2>
                <hr style="background: red; border: 0; display: block;height: 2px; width: 60px;">
                <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae nihil iusto, veniam repellendus quos,</h5>
            </div>
        </div>
        <br><br>
        <div class="row  d-flex justify-content-around">
            <div class="card mx-4 pd-4" style="width: 18rem;">
                <img src="img/pic1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolorum, ut adipisci</p>
                  <a href="#" class="btn border border-dark hover">View more</a>
                </div>
            </div>

            <div class="card mx-4 pd-4" style="width: 18rem;">
                <img src="img/pic2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolorum, ut adipisci</p>
                  <a href="#" class="btn border border-dark hover">View more</a>
                </div>
            </div>

            <div class="card mx-4 pd-4" style="width: 18rem;">
                <img src="img/pic3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolorum, ut adipisci</p>
                  <a href="#" class="btn border border-dark hover">View more</a>
                </div>
            </div>
        </div>
    </article>

    <!-- Membuat  about --> <br>

    <!-- <section class="container-fluid">
        <div class="row text-center d-flex justify-content-around">
            <div class="col-sm-12" style="color:black;">
                <h2>About</h2>
                <hr style="background: red; border: 0; display: block;height: 2px; width: 60px;">
            </div>
        </div>
        <div class="d-flex flex-row bd-highlight justify-content-center mb-3">
            <div class="col-sm-3 flex-fill text-right">
                <h3>We are create smart generation</h3>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam enim minus, 
                    corrupti quibusdam ng elit. Quam nulla iusto, rerum placeat vel eum conse
                    ctetur laboriosam officiis, id ad voluptate laudantium repellendus fugit 
                    qui! Expedita beatae enim animi aliquid. </p>
            </div>
            <div class="col-sm-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam enim minus, 
                    corrupti quibusdam ng elit. Quam nulla iusto, rerum placeat vel eum conse
                    ctetur laboriosam officiis, id ad voluptate laudantium repellendus fugit 
                    qui! Expedita beatae enim animi aliquid. </p>
            </div>
        </div>
    </section> -->

    <!-- membuat gallery --> <br>

    <!-- <section class="container-fluid">

        <div class="row text-center d-flex justify-content-around">
            <div class="col-sm-9" style="color:black;">
                <h2>Our Gallery</h2>
                <hr style="background: red; border: 0; display: block;height: 2px; width: 60px;">
            </div>
        </div>

        <div class="row">

                <figure class="col-md-3">
                  <a href="img/gallery1.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery1.jpg" class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery2.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery2.jpg" class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery3.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery3.jpg" class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery4.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery4.jpg" class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery5.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery5.jpg"class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery6.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery6.jpg" class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery7.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery7.jpg" class="img-fluid">
                  </a>
                </figure>
          
                <figure class="col-md-3">
                  <a href="img/gallery8.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/gallery8.jpg" class="img-fluid">
                  </a>
                </figure>
          
            </div>
    </section> -->

      <!--  Membuat Partner -->

      <!-- membuat Footer --> <br>

    <footer class="page-footer font-small pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3"> 
              <!-- Content -->
              <!-- <h5 class="text-uppercase">Footer Content</h5>
              <p>Here you can use rows and columns to organize your footer content.</p>
            </div> -->
            <!-- Grid column --> 
            <hr class="clearfix w-100 d-md-none pb-3"> 
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">  
              <!-- Links -->
              <!-- <h5 class="text-uppercase">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#" class="bersih">HOME</a>
                </li>
                <li>
                  <a href="#" class="bersih">ABOUT</a>
                </li>
                <li>
                  <a href="#" class="bersih">STOCK</a>
                </li>
                <li>
                  <a href="#" class="bersih">GALLERY</a>
                </li>
              </ul>
      
            </div> -->
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
     <p> made with &#10084; By <a href="https://mdbootstrap.com/" class="bersih">Fauzan</a></p>
        </div>
        <!-- Copyright -->
      
      </footer>
</body>
</html>