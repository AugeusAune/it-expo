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

    body::-webkit-scrollbar{
    width: 0.25rem;
    }

    body::-webkit-scrollbar-track{
        background: #1e1e24;
    }

    body::-webkit-scrollbar-thumb{
        background: #ffffff;
    }

    p{
      text-align: justify;
      text-indent: 30px;
      color: white;
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
      background: linear-gradient(rgba(0, 0, 0, 0.73), rgba(0, 0, 0, 0.73)), url("<?= base_url('./assets/img/clement-m-igX2deuD9lc-unsplash.jpg') ?>");
      background-position: center;
      background-size: cover;
      min-height: 100vh;
      max-height: 1000vh;
      display: flex;
      flex-wrap: wrap;
    }

    .landing-page .font img {
      width: 300px;
      height: 350px;
      margin-top: 20vh;
      border-radius: 20px;
    }

    .landing-page .location {
      margin-top: .9rem;
      border-radius: 20px;
    }

    .landing-page .comment {
      margin-top: 3vh;
      margin-left: 5rem;
    }

    .landing-page .judul {
      color: white;
      margin-top: 12vh;
      margin-left: 100px;
    }

    .landing-page .comment .nav a{
      color: white;
    }

    .landing-page .comment .nav .active{
      color: white;
      background-color: #848484;
      border: none;
    }

    .landing-page .isi {
      margin-left: 5rem;
      background-color: transparent;
      border: 1px solid white;
      min-height: 32rem;
      max-height: 1000rem;
      border-radius: 0 0 20px 20px;
      color: white;
    }

    .landing-page .media {
      border-bottom: 1px solid black;
      padding: 10px;
    }

    .scroll::-webkit-scrollbar,
    .scroll2::-webkit-scrollbar{
    width: 0.25rem;
    color: seagreen;
    }

    .scroll::-webkit-scrollbar-track,
    .scroll2::-webkit-scrollbar-track{
        background: #1e1e24;
    }

    .scroll::-webkit-scrollbar-thumb,
    .scroll2::-webkit-scrollbar-thumb{
        background: #ffffff;
    }

    .landing-page .scroll {
      overflow-y: scroll;
      overflow-x: hidden;
      height: 350px;
      padding: 10px;
    }

    .landing-page .scroll2 {
      overflow-y: scroll;
      overflow-x: hidden;
      height: 430px;
      padding: 10px; 
    }

    .landing-page .media:nth-child(4) {
      border-bottom: none;
    }

    .landing-page .media img {
      border-radius: 100%;
      width: 35px;
      height: 30px;
    }

    .landing-page input {
      background-color: transparent;
      color: white;
      border: 1px solid white;
      border-radius: 20px;
    }

    .landing-page input:focus {
      border: 1px solid white;
      background-color: transparent;
      box-shadow: none;
      border-radius: 20px;
      color: white;
    }

    .landing-page input::placeholder{
      color: white;
    }

    .landing-page .ulasan .transparent .icon {
      background-color: transparent;
      border: none;
      color: white;
      margin-left: -35px;
    }

    .landing-page .ulasan .transparent button:focus {
      outline: none;
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
    </div>
  </nav>

  <main>
      <div class="landing-page">
        <div class="container">
          <div class="row">
            <div class="col-md-3 font" id="lp-left">
              <img src="<?= base_url('./assets/img/' . $detail['gambar']); ?>" class="img" alt="...">
              <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027696.9026568707!2d107.53626534687051!3d-6.968503623008225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a3f828c33b%3A0xeaeb3dc32157b35d!2sPT.%20Taman%20Wisata%20Candi%20Borobudur%20Prambanan%20Dan%20Ratu%20Boko!5e0!3m2!1sen!2sid!4v1603615170270!5m2!1sen!2sid" width="300px" height="150px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-9">
              <h1 class="judul"><?= $detail['nama_cagar'] ?></h1>
              <nav class="comment">
                <div class="nav nav-tabs grey" id="nav-tab" role="tablist">
                  <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Detail</a>
                  <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ulasan</a>
                </div>
              </nav>
              <div class="tab-content isi p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <p class="scroll2">
                    <?= $detail['deskripsi'] ?>
                  </p>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="scroll">
                    <div class="media mb-3">
                      <img src="data:image/png;base64,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" class="mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </div>
                    </div>
                    <form action="" class="mt-3 ulasan">
                      <div class="row transparent">
                        <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="nama...">
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control " placeholder="email anda...">
                        </div>
                      </div>
                      <div class="row transparent mt-2">
                        <div class="col-md-12 d-flex">
                          <input type="text" name="" id="" class="form-control" placeholder="pesan...">
                          <button type="submit" class="icon"><i class="far fa-paper-plane"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      </div>
    </main>

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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>