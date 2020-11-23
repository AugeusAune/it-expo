<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/435892cee4.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700;900&display=swap" rel="stylesheet">
  <style>
    * { 
      font-family: 'Red Hat Display', sans-serif;
      box-sizing: border-box;
    }

    body::-webkit-scrollbar {
      width: 0.25rem;
    }

    body::-webkit-scrollbar-track {
      background: #1e1e24;
    }

    body::-webkit-scrollbar-thumb {
      background: #ffffff;
    }

    p{
      color: white;
    }

    body {
      background: linear-gradient(rgba(255, 255, 255, 0.14), rgba(145, 135, 135, 0.73)), url("<?= base_url('assets/img/peter-jan-rijpkema-wI6o8OwUwdw-unsplash.jpg') ?>");
      background-position: center;
      background-size: cover;
    }

    nav .navbar-brand {
      font-size: 36px;
      font-weight: bold;
    }

    nav .nav-item {

      margin-right: 1em;
    }

    nav .nav-link {
      font-size: 18;
    }

    .landing-page {
      background: linear-gradient(rgba(0, 0, 0, 0.73), rgba(0, 0, 0, 0.73));
      background-position: center;
      background-size: cover;
      max-height: 1000vh;
      display: flex;
      flex-wrap: wrap;
    }

    .landing-page .text {
      font-size: 60px;
      font-weight: 500;
      margin-top: 140px;
      margin-left: 6rem;
      color: white;
    }

    .landing-page .search {
      margin-top: 1rem;
      justify-content: center;
      align-items: center;
      display: flex;
    }

    .landing-page .search form .white {
      width: 20rem;
      height: 2rem;
      padding: 1.5rem;
      color: black;
      font-size: 16px;
      border: none;
      border-radius: 10px 0 0 10px;
    }

    .landing-page .search form input:focus {
      outline: none;
    }

    .landing-page .icon {
      background-color: transparent;
      border: none;
      color: black;
      font-size: 20px;
      margin-left: -2.5rem;
    }

    .landing-page .galery {
      color: white;
    }

    .landing-page .project-area {
      padding: 4rem 0;
      margin-bottom: 10%;
      ;
    }

    .landing-page .project-area .button-group {
      display: flex;
      margin-left: 220px;
      margin-right: 220px;

    }

    .landing-page .project-area .button-group button {
      width: 100%;
      background: transparent;
      border: none;
      font: normal 500 16px/130px;
      text-transform: uppercase;
      color: white;
    }

    .landing-page .provinsi {
      background-color: white;
      border-radius: 0 8px 8px 0;
      padding-top: 4px;
    }

    .landing-page .provinsi button:focus {
      outline: none;
      box-shadow: none;
    }

    .landing-page .project-area .button-group button:focus {
      outline: none;
    }

    .landing-page .project-area .button-group button+button {
      padding-left: .9rem;
    }

    .landing-page .project-area .grid .our-project>.title h4 {
      font: normal 700 25px/12px;
    }

    .landing-page .project-area .grid .our-project .img a:hover img {
      filter: brightness(1.1), drop-shadow(1px 8px 30px #b1afaf);
    }

    .landing-page .project-area .grid .our-project .img {
      padding: 4rem 3rem;
    }

    .landing-page .project-area .grid {
      margin-left: 20px;
    }

    footer{
    bottom: 0;
}
.footer-distributed{
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  padding: 55px 50px;
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}
 
.footer-distributed .footer-left{
  width: 44%;
}
 
.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Cookie', cursive;
  margin: 0;
}
 
.footer-distributed h3 span{
  color:  #5383d3;
  font: normal 36px 'Cookie', cursive;
}
 
 
.footer-distributed .footer-value{
  color:   #848484;
  margin: 20px 0 12px;
  padding: 0;
}
 
 
 
.footer-distributed .footer-center{
  width: 39%;
}
 

.footer-distributed .footer-center li{
  list-style: none;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center li a{
  color:   #848484;
  margin: 20px 0 12px;
  padding: 0;
}

 
.footer-distributed .footer-center ul{
  color: white;
  text-decoration: none;
}

.footer-distributed .footer-center{
  line-height: 20px;
  color:  #92999f;
  font-size: 15px;
  font-weight: normal;
  margin: 0;

}
 
.footer-distributed .footer-center span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}
 
.footer-distributed .footer-right{
  width: 16%;
}
 
.footer-distributed .footer-right li{
  list-style: none;
  vertical-align: middle;
  margin:0;
  color:   #848484;
  
}
 
.footer-distributed .footer-right ul{
  color: white;
  text-decoration: none;
}

.footer-distributed .footer-right{
  line-height: 20px;
  color:  #92999f;
  font-size: 15px;
  font-weight: normal;
  margin: 0;

}
 
.footer-distributed .footer-right span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}
 

 
.footer-distributed .footer-icons{
  margin-top: 25px;
}
 
.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;
 
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;
 
  margin-right: 3px;
  margin-bottom: 5px;
}


  </style>
  <title>historism</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">historism</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?>">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeri</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('user/category'); ?>">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/about') ?>">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="landing-page">
    <div class="container">
      <div class="row">
        <h1 class="text">historism</h1>
        <div class="col-lg-12 search">
          <form action="<?= base_url('user/category') ?>" method="post" class="d-flex">
            <input type="text" placeholder="Search destination" class="white" name="keyword">
            <button type="submit" name="submit" class="icon" autocomplete="off"><i class="fa fa-search"></i></button>
            <div class="dropdown provinsi">
              <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                | provinsi
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Jakarta</a>
                <a class="dropdown-item" href="#">Bali</a>
                <a class="dropdown-item" href="#">Sumatra Barat</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 galery">
          <h1 class="text-center mt-3">kategori</h1>
          <h6 class="text-center"><?= $count; ?> item</h6>
        </div>
      </div>
      <section class="project-area" id="project">

        <div class="button-group justify-content-center align-items-center">
          <button type="button" class="active" id="btn1">semua</button>
          <button type="button" data-filter=".tarian">Tarian</button>
          <button type="button" data-filter=".benda">benda</button>
          <button type="button" data-filter=".alatmusik">alat musik</button>
          <button type="button" data-filter=".bangunan">bangunan</button>
        </div>

        <div class="row grid">
          <?php foreach ($cate as $c) : ?>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-5 element-item <?= $c['kategori'] ?>">
              <div class="our-project">
                <div class="card" style="width: 18rem;">
                  <img src="<?= base_url('./assets/img/' . $c['gambar']) ?>" class="card-img-top" alt="..." style="height: 250px;">
                  <div class="card-body">
                    <h5 class="card-title"><?= $c['nama_cagar'] ?></h5>
                    <a href="<?= base_url('user/detail/' . $c['id']) ?>" class="btn btn-primary">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>

  <footer style="height:px;" class="footer-distributed">
 
 <div class="footer-left">

 <h3>HisTo<span>urism</span></h3>

 <p class="footer-value">
   mari kita memperdalam ilmu tentang cagar 
   <br>
   budaya yang berada di indonesia
 </p>

 <div class="footer-icons">

 <a href="#"><i class="fa fa-facebook"></i></a>
 <a href="#"><i class="fa fa-twitter"></i></a>
 <a href="#"><i class="fa fa-linkedin"></i></a>
 <a href="#"><i class="fa fa-github"></i></a>

 </div>

 <p class="footer-company-name">webdevtrick &copy; 2019</p>
 </div>

 <div class="footer-center">

 
 <ul>
    <span><h5>Navigasi</h5></span>
     <li><a href="<?= base_url('user') ?>">Beranda</a></li>
     <li><a href="<?= base_url('user/category') ?>">Kategori</a></li>
     <li><a href="">Galeri</a></li>
     <li><a href="<?= base_url('user/about') ?>">Tentang Kami</a></li>
 </ul>
 
 </div>

 <div class="footer-right">
 
  <ul>
       <span><h5>Tim Kami</h5></span>
       <li>Dedi Setiadi</li>
       <li>Farhan Aditya</li>
       <li>Gilang Ramah Syaputra</li>
   </ul>

 </div>
 <hr style="background-color: white;">
 <section class="section text-center">
             <p>©2020 historism. All rights reserved</p>
       </section>
 </footer>

  <!-- Optional JavaScript; choose one of the two! -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {

      let $btn = $('.project-area .button-group button');

      $btn.click(function(e) {

        $('.project-area .button-group button').removeClass('active');
        e.target.classList.add('active');

        let selector = $(e.target).attr('data-filter');
        $('.project-area .grid').isotope({
          filter: selector
        });

        return false;

      });

    });
  </script>
</body>

</html>