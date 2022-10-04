<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{asset('fonts2/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css2/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css2/style.css')}}">

    <link rel="stylesheet" href="{{asset('campur/css/style.css')}}">

<style>
    .padding{
        padding-top: 20px;
        padding-bottom: auto;
    }
    .logo{
        padding-left: 10pt;
        padding-top: 70pt;
        width: 200pt;
    }
    body{
        background-image: url("{{asset('img/bg.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

    <title>Halaman || login</title>
  </head>
  <body>
    <div class="padding">
  <div class="container">
			<div class="row justify-content-between ">
				<div class="col ">
					<a class="navbar-brand">DINAS PERHUBUNGAN <span>SUMATERA UTARA</span></a>
				</div>
			</div>
		</div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="logo" src="{{asset('img/dishub1.png')}}" alt="Image" class="img-fluid">
          <img class="logo" src="{{asset('img/sumut.png')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>LOG IN</h3>
              <p class="mb-4">Silahkan Masukkan Username dan Password Dengan Benar</p>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{asset('js2/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js2/popper.min.js')}}"></script>
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <script src="{{asset('js2/main.js')}}"></script>

    <script src="{{asset('campur/js/jquery.min.js')}}"></script>
    <script src="{{asset('campur/js/popper.js')}}"></script>
    <script src="{{asset('campur/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('campur/js/main.js')}}"></script>
  </body>
</html>
