<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/style1.css')}}">
<style>
.jumbotron{
  background-image: url('{{asset("img/4.jpg")}}');
  background-size : cover;
  height : 540px;
  text-align : center;
  position: relative;
}
</style>
    <title>Halaman || Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
     <div class="container">
      <a class="navbar-brand">DISHUBSU</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{url('pricing')}}">Pricing</a>
            <a class="nav-item nav-link" href="{{url('pricing')}}">Features</a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item btn btn-primary tombol" href="{{url('login')}}">Admin</a>
          </div>
        </div>
      </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><span>Selamat Datang</span> di<br><span>DINAS PERHUBUNGAN</span><br> Sumatera Utara</h1>
      <a href="" class="btn btn-primary tombol">OUR WORK</a>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="{{asset('img/user.png')}}" alt="" class="float-left">
                    <h4>24 Housr</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="col-lg">
                    <img src="{{asset('img/user.png')}}" alt="" class="float-left">
                    <h4>24 Housr</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="col-lg">p
                    <img src="{{asset('img/user.png')}}" alt="" class="float-left">
                    <h4>24 Housr</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row workingspace">
        <div class="col-lg-6">
            <img src="{{asset('img/2.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-5">
            <h3>You <span>work</span> like at <span>home</span></h3>
            <p>Bekerja dengan hati yang suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
            <a href="" class="btn btn-primary">Gallery</a>
        </div>
    </div>

    <div class="row workingspace">
        <div class="col-lg-6">
            <img src="{{asset('img/3.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-5">
            <h3>You <span>work</span> like at <span>home</span></h3>
            <p>Bekerja dengan hati yang suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
            <a href="" class="btn btn-primary">Gallery</a>
        </div>
    </div>

    <div class="row workingspace">
        <div class="col-lg-6">
            <img src="{{asset('img/4.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-5">
            <h3>You <span>work</span> like at <span>home</span></h3>
            <p>Bekerja dengan hati yang suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
            <a href="" class="btn btn-primary">Gallery</a>
        </div>
    </div>

    <section class="testimoni">
      <div class="row justify-content-center kuat">
        <div class="col-lg-8">
          <h5>"Bekerja dengan hati yang suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</h5>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 justify-content-center d-flex">
        <figure class="figure">
            <img src="{{asset('img/gmb1.jpg')}}" class="figure-img img-fluid rounded-circle" alt="anime1">
        </figure>
        <figure class="figure">
            <img src="{{asset('img/gbr2.jpg')}}" class="figure-img img-fluid rounded-circle utama" alt="anime2">
            <figcaption class="figure-caption">
                <h5>Yin-xin young</h5>
                <p>Negeri Konoha</p>
            </figcaption>
        </figure>
        <figure class="figure">
            <img src="{{asset('img/img3.jpg')}}" class="figure-img img-fluid rounded-circle" alt="anime3">
        </figure>
        </div>
      </div>
    </section>

    <div class="row footer">
        <div class="col text-center">
            <p>2022 All Right Reserved By Beby Nosderita Lahagu</p>
        </div>
    </div>

</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
