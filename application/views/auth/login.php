<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="gilang">
  <meta name="description" content="blablabla">

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
      background: linear-gradient(rgba(0, 0, 0, 0.73), rgba(0, 0, 0, 0.73)), url("assets/img/_QTeGT478_8.png");
      background-position: center;
      background-size: cover;
      height: 100vh;
      display: flex;
      flex-wrap: wrap;
    }
    

    .landing-page .form {
      margin-top: 25vh;
      padding: 100px 20px;
    }

    .landing-page .form input {
      border-radius: 20px;
    }

    .landing-page .form input,
    .landing-page .form button,
    .landing-page .form {
      border-radius: 20px;

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
                <li class="nav-item ">
                  <a class="nav-link" href="<?= base_url('user'); ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item">
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
        <div class="col-md-6 form ">
        <?= $this->session->flashdata('message'); ?>
          <form class="user" method="post" action="<?= base_url('auth'); ?>">
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Login
            </button>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="<?= base_url(); ?>auth/registration">Create an Account!</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="<?= base_url('./assets/img/cropped-Logo-SMKN-12-JAKARTA-5.png') ?>" width="500px" style="margin-top:20vh;" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>