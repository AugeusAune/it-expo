<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="gilang">
  <meta name="description" content="blablabla">

  <!-- Bootstrap CSS -->
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/435892cee4.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700;900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: 'Red Hat Display', sans-serif;
      box-sizing: border-box;
    }

    body::-webkit-scrollbar {
      width: 0.25rem;
    }

    p{
      color: white;
    }

    body::-webkit-scrollbar-track {
      background: #1e1e24;
    }

    body::-webkit-scrollbar-thumb {
      background: #ffffff;
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
      background: linear-gradient(rgba(0, 0, 0, 0.73), rgba(0, 0, 0, 0.73)), url("<?= base_url('assets/img/peter-jan-rijpkema-wI6o8OwUwdw-unsplash.jpg') ?>");
      background-position: center;
      background-size: cover;
      min-height: 100vh;
      max-height: 1000vh;
      display: flex;
      flex-wrap: wrap;

    }

    .landing-page #lp-left {
      margin-top: 30vh;
      color: white;
    }

    .landing-page #lp-left h1::before {
      content: '';
      width: 45%;
      height: 3px;
      background-color: white;
      display: block;
      position: absolute;
      margin-top: 48px;
    }

    .landing-page #lp-left h6 {
      text-align: justify;
      font-size: 17px;
      font-weight: 100;
    }

    .landing-page .right {
      margin-top: 20vh;
      margin-left: auto;
    }

    .landing-page .client-says {
      color: white;
      margin-top: 30vh;
      margin-bottom: 30vh;
    }

    .landing-page .client-says .text-center {
      margin-top: 60px;
    }

    .landing-page .client-says i {
      font-size: 100px;
      margin-bottom: 20px;
    }

    .landing-page .client-says .num {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .landing-page .human {
      margin-top: 10vh;
      color: white;
      margin-bottom: 20vh;
    }

    .landing-page .human .kartu {
      border-radius: 10px;
      padding: 20px 10px;
      width: 80%;
    }

    .landing-page .human .kartu .semi {
      font-size: 50px;
      min-height: 80px;
    }

    .landing-page .human .kartu p {
      padding: 20px;
    }

    .landing-page .human .kartu img {
      width: 50px;
      height: 50px;
      border-radius: 100%;
      margin: 5px 0;
    }

    .landing-page .contact {
      color: white;
    }

    .landing-page .contact .card-contact {
      margin-top: 60px;
      height: 52vh;
      border-radius: 10px;
      margin-bottom: 10vh;
      display: flex;
    }

    .landing-page .contact .icon {
      margin-bottom: 30px;
      margin-top: 20px;
    }

    .landing-page .contact .icon i {
      font-size: 25px;
    }

    .landing-page .contact .icon .icon1 {
      margin-top: 20px;
      margin-left: 20px;
    }

    .landing-page .contact .follow {
      margin-top: 30px;
      margin-left: 20px;
    }

    .landing-page .contact .icon .icon2 {
      margin-left: 30px;
    }

    .landing-page .contact .form .input {
      background-color: transparent;
      border: 1px solid white;
      border-radius: 10px;
      color: white;
    }

    .landing-page .contact .form textarea::placeholder,
    .landing-page .contact .form .input::placeholder {
      color: white;
    }

    .landing-page .contact .form textarea:focus,
    .landing-page .contact .form .input:focus {
      outline: none;
      box-shadow: none;
      color: white;
    }

    .landing-page .contact .form textarea {
      height: 200px;
      background-color: transparent;
      border-radius: 10px;
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('user'); ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user/category'); ?>">Kategori</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="<?= base_url('user/about') ?>">About Us</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="landing-page">
    <div class="container">
      <div class="row">
        <div class="col-md-6 " id="lp-left">
          <h1>Tentang Kami</h1>
          <h6 class="mt-4">Halo semuanya! Kami dari SMKN 12 Sekolah Menengah Kejuruan jurusan Software Engineering
            (RPL),
            Kami membuat situs web ini untuk membantu pengguna mengetahui lebih banyak tentang warisan budaya di
            Indonesia..</h6>
        </div>
        <div class="col-md-6 right">
          <img src="<?= base_url('assets/img/cropped-Logo-SMKN-12-JAKARTA-5.png') ?>" width="500px" alt="">
        </div>
      </div>
      <div class="row client-says">
        <div class="col-md-12">
          <h2 class="text-center">User Says</h2>
        </div>
        <div class="col-md-3 text-center">
          <i class="far fa-object-group"></i>
          <div class="num">1234</div>
          TEMPLATES
        </div>
        <div class="col-md-3 text-center">
          <i class="far fa-object-group"></i>
          <div class="num">120</div>
          TEMPLATES
        </div>
        <div class="col-md-3 text-center">
          <i class="far fa-object-group"></i>
          <div class="num">90</div>
          TEMPLATES
        </div>
        <div class="col-md-3 text-center">
          <i class="far fa-object-group"></i>
          <div class="num">57</div>
          TEMPLATES
        </div>
      </div>
      <div class="row human">
        <div class="col-md-12 text-center mb-5">
          <h1>Teams</h1>
        </div>
        <div class="col-md-4 text-center kartu ">
          <i class="fas fa-quote-left semi"></i>
          <p>Nama saya Dedi Setiadi dari SMKN 12 jakarta,saya mendapat bagian mendesain web yang dibangun ini</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="<?= base_url('assets/img/user-1.png') ?>" alt="">
          <h3>Dedi Setiadi</h3>
        </div>
        <div class="col-md-4 text-center  kartu ">
          <i class="fas fa-quote-left semi"></i>
          <p>Nama saya Farhan Aditya dari SMKN 12 jakarta,saya mendapat bagian untuk mengelola backend dari website ini</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="<?= base_url('assets/img/user-2.png') ?>" alt="">
          <h3>Farhan Aditya</h3>
        </div>
        <div class="col-md-4 text-center kartu">
          <i class="fas fa-quote-left semi"></i>
          <p>Nama saya Gilang Rama Syaputra dari SMKN 12 jakarta, saya mendapat bagian untuk mengelola front-end dari website ini.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="<?= base_url('assets/img/user-3.png') ?>" alt="">
          <h3>Gilang Rama Syaputra</h3>
        </div>
      </div>
      <div class="row contact">
        <div class="col-md-12">
          <h2 class="text-center">Kontak Kami</h2>
        </div>
        <div class="col-md-6 p-5">
          <h3>Get a quote</h3>
          <h6 class="mt-4" style="font-weight: 100;">If you experience problems or there are bugs on this website,
            please contact us</h6>
          <div class="icon mt-4">
            <div class="icon1 d-flex ">
              <i class="fas fa-phone-alt"></i>
              <p class="ml-3">+62 85920754983</p>
            </div>
            <div class="icon1 d-flex ">
              <i class="fas fa-envelope"></i>
              <p class="ml-3"> <a href="mailto:farhanaditya134@gmail.com" style="color: white;">farhanaditya134@gmail.com</a></p>
            </div>
            <div class="icon1 d-flex ">
              <i class="fas fa-map-marker-alt"></i>
              <p class="ml-3"><a href="https://goo.gl/maps/WJZBR1X8AWGdjMNQA" style="color: white;">SMKN 12 JAKARTA</a></p>
            </div>
            <div class="follow d-flex">
              <div class="icon2">
                <i class="fab fa-facebook-f"></i>
              </div>
              <div class="icon2 ">
                <i class="fab fa-instagram"></i>
              </div>
              <div class="icon2 ">
                <i class="fas fa-map-marker-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 form">
          <form method="post" action="<?= base_url('user/about') ?>" class="form-group">
            <div class="d-flex mt-5 ">
              <input type="text" name="depan" class="form-control input" placeholder="nama depan">
              <?= form_error('depan', '<small class="text-danger pl-3">', '</small>'); ?>
              <input type="text" name="belakang" class="form-control ml-3 input" placeholder="nama akhir">
              <?= form_error('belakang', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <input type="text" name="email" class="form-control mt-3 input" placeholder="email">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <textarea name="pesan" id="" cols="30" rows="10" class="form-control mt-3" placeholder="pesan"></textarea>
            <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
            <button type="submit" class="btn btn-secondary mt-3">Submit</button>
          </form>
        </div>
      </div>
    </div>
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

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"
    integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g=="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
    integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
    crossorigin="anonymous"></script>


  <script>
    $(".num").counterUp({
      delay: 10,
      time: 2500
    })



  </script>

</body>

</html>