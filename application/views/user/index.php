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
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/435892cee4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Red Hat Display', sans-serif;
            box-sizing: border-box;
    
        }

        .landing-page .images-slide span{
          font-size: 20px;
        }

        nav .navbar-brand {
          font-size: 36px;
          font-weight: bold;
          position: relative;
        }

        .navbar-brand::after {
          content: "";
          background: white;
          position: absolute;
          bottom: 0;
          left:0;
          width: 45px;
          height: 3px;
        }
        

        nav .nav-item {
          margin-right: 1em;
        }
        nav .nav-link{
            font-size: 18;
        }

        nav .dropdown .btn:focus{
          outline: none;
          box-shadow: none !important;
        }
        .landing-page {
          background: linear-gradient(rgba(0, 0, 0, 0.73), rgba(0, 0, 0, 0.73)),url('<?= base_url('assets/img/_QTeGT478_8.png') ?>');
          background-position: center;
          background-size: cover;
          height: 100vh;
          display: flex;
          flex-wrap: wrap;
          
        }

        .landing-page #lp-left {
          color: white;
        }

        .landing-page #lp-left h6{
          font-size: 20px;
          padding-bottom: .6rem;
        }
        .landing-page form {
          display: flex;
          border: 1px solid white;
          justify-content: space-between;
          border-radius: 100px;
        }
        .landing-page .search-field {
          height: 34px;
          border: none;
          width: 100%;
          background: transparent;
          /* border: 1px solid white; */
          padding: 20px;
          color: white;
        }
        .landing-page .search-icon{
          border: none;
          background: transparent;
        }
        .landing-page .search-field:focus {
          outline: none;
        }
        .landing-page .search-icon:focus {
          outline: none;
        }

        .landing-page form input:placeholder{
          font-size: 14px;
        }

        .landing-page form input#search::-webkit-input-placeholder {
          color: #65737e;
        }
        
        .landing-page form input#search:-moz-placeholder { /* Firefox 18- */
          color: #65737e;  
        }
        
        .landing-page form input#search::-moz-placeholder {  /* Firefox 19+ */
          color: #65737e;  
        }
        
        .landing-page form input#search:-ms-input-placeholder {  
          color: #65737e;  
        }

        .images-slide {
          background-color: transparent;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color: #fff;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
        }

        .swiper-container {
          width: 100%;
          padding-top: 50px;
          padding-bottom: 50px;
        }

        .swiper-slide {
          background-position: center;
          background-size: cover;
          width: 250px;
          height: 300px;
          border-radius: 20px;
          z-index: 200 !important;

        }

        .swiper-slide img{
          width: 250px;
          height: 300px;
          border-radius: 20px;
          display: block;
          object-fit: cover ;
          position: relative;
          
        }
        
        .swiper-slide-active{
          position:relative;
          display:inline-block;
            
          
        }
        .swiper-slide-active::before{
          content:'';
          position:absolute;
        }
        .swiper-slide-active::after{
          content:'';
          position:absolute;
          left:0; top:0;
          width:100%; height:100%;
          display:inline-block;
          border-radius: 20px;
          transition: .5s cubic-bezier(0.075, 0.82, 0.165, 1);
          background: linear-gradient(180deg, rgba(0, 0, 0, 0) 48.49%, rgba(0, 0, 0, 0.9) 89.12%);
        }
        #activeText {
          position: absolute;
          bottom: 0;
          padding-left: 10px;
          z-index: 10;

        }
        .swiper-btn{
          display: flex;
          align-items: center;
          justify-content: center;
        }

        #swiper-btn{
          outline: none;
          border: none;
          background-color: transparent;
        }
        #swiper-btn span {
          font-size: 50px;
        }

        @media (min-width: 768px) {
          .nav-nav-brand-pos {
            position: absolute;
          }
        }
    </style>
    <title>historism</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <div class="nav-brand-pos">
            <a class="navbar-brand" href="#">
                historism    
            </a>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?= base_url('user'); ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('user/category') ?>">Kategori</a>
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
              <div class="row d-flex align-items-center">
                  <div class="col-md-5 font" id="lp-left">
                    <h2>Eksplore your vacation spots with us</h2>
                    <h6>Search your cagar budaya</h6>
                    <form action="">
                        <input type="search" placeholder="Search destination" class="search-field">
                        <button class="search-icon" ><i class="fa fa-search" data-icon="mdi-light:magnify" style="font-size:20px; color: #fff; margin-left:-50px;"></i></button>
                    </form>
                  </div>
                  <div class="col-md-7">
                    <div class="images-slide">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img id="swiperImg" src="<?= base_url('./assets/img/_QTeGT478_8.png'); ?>">
                            <p id="activeText" style="font-size: 20px; font-weight: medium;"><span class="fas fa-map-marker-alt" data-inline="false" data-icon="gridicons:location" style="font-size: 30px; color: #fff;"></span>Prambanan</p>
                          </div>
                          <div class="swiper-slide">
                            <img id="swiperImg" src="<?= base_url('./assets/img/peter-jan-rijpkema-wI6o8OwUwdw-unsplash.jpg') ?>">
                            <p id="activeText" style="font-size: 20px; font-weight: medium;"><span class="fas fa-map-marker-alt" data-inline="false" data-icon="gridicons:location" style="font-size: 30px; color: #fff;"></span>Stone Henge</p>
                          </div>
                          <div class="swiper-slide">
                            <img id="swiperImg" src="<?= base_url('./assets/img/mohamed-noval-6BDoWZ4zxnE-unsplash.jpg') ?>">
                            <p id="activeText" style="font-size: 20px; font-weight: medium;"><span class="fas fa-map-marker-alt" data-inline="false" data-icon="gridicons:location" style="font-size: 30px; color: #fff;"></span>Stone Henge</p>
                          </div>
                          <div class="swiper-slide">
                            <img id="swiperImg" src="<?= base_url('./assets/img/peter-jan-rijpkema-wI6o8OwUwdw-unsplash.jpg') ?>">
                            <p id="activeText" style="font-size: 20px; font-weight: medium;"><span class="fas fa-map-marker-alt" data-inline="false" data-icon="gridicons:location" style="font-size: 30px; color: #fff;"></span>Stone Henge</p>
                          </div>
                        </div>
                        <div class="swiper-btn mt-4">
                          <div class="swiper-btn-prev mr-3">
                            <button id="swiper-btn" class="prev"><span class="fas fa-arrow-left" data-icon="mdi-light:arrow-left" style="font-size: 30px; color: #fff;"></span></button>
                          </div>
                          <div class="swiper-btn-next">
                            <button id="swiper-btn" class="next"><span class="fas fa-arrow-right" data-icon="mdi-light:arrow-right" style="font-size: 30px; color: #fff;"></span></button>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
      </div>

    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>

var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: false,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,//50,
      stretch: 0,
      depth:  220,//100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true
    },
    loop: false, 
    autoplay :{
      delay: 1000000000,
      disableonInteraction:true,
    },
    navigation: {
      nextEl: '.swiper-btn-next',
      prevEl: '.swiper-btn-prev',
    },
  });

//TEXT

  const prev = document.querySelector('.prev');
  const next = document.querySelector('.next');
  const landingPage = document.querySelector('.landing-page');
  var gradient = 'linear-gradient(rgba(0, 0, 0, 0.73), rgba(0, 0, 0, 0.73))';
  var backgroundImg = new Array (
      "<?= base_url('./assets/img/_QTeGT478_8.png') ?>",
      "<?= base_url('./assets/img/peter-jan-rijpkema-wI6o8OwUwdw-unsplash.jpg') ?>",
      "<?= base_url('./assets/img/mohamed-noval-6BDoWZ4zxnE-unsplash.jpg') ?>",
  );

  let i = 0 ;
  next.onclick = function(){
      if ( i < 1 ){
          landingPage.style.background = gradient+ ',' + 'url('+backgroundImg[i+1]+') center/cover';
          i++;
      }
    }
  prev.onclick = function(){
      if ( i > 0 ){
          landingPage.style.background = gradient+ ',' + 'url('+backgroundImg[i-1]+')center/cover' ;
          i--;
      }
  }


    </script>
  </body>
</html>