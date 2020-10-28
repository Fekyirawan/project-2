<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <script src="https://use.fontawesome.com/7e050b97de.js"></script>

    <link rel="stylesheet" type="text/css" href="public/fontawesome/css/all.min.css">


    <title>Store Online</title>

    <style type="text/css">
      body{
        background-color: #E6E6FA;
      }

    </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container" >
          <h3><a href="{{url('/Home')}}"><i class="fas fa-store mr-2"></i></a></h3>
          <a class="navbar-brand mr-auto font-weight-bold" href="{{url('/Home')}}">Store Online</a>
        <div>
          <form class="form-inline my-10 my-lg-0 float-right">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <h3><a href="{{url('sign')}}"><i class="fas fa-user-circle ml-5 "></i></a></h3>
      </div>
      </nav>
       <nav class="navbar navbar-expand-lg navbar-light bg-light lane text-center">
        <div class="container" >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                  <a class="nav-link" href="Home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

 <div class="text">

   <P style="text-align: center; margin-top: 20px;" class="font-weight-bold">PRODUK TERBARU</P>

 </div>

      <div class="row pt-4 pl-5 ">  
        <div class="card " style="width: 13rem; margin-left: 80px;">
          <img src="public/img/akustik.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gitar Akustik</h5>
            <p class="card-text">RP 5.000.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
           <p> <a href="{{url('/akustik')}}" class="btn btn-warning">BELI</a></p>
          </div>
        </div>
        <div class="card ml-4 mr-4" style="width: 13rem;">
          <img src="public/img/bass1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gitar Bass</h5>
            <p class="card-text">RP 3.500.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
            <p><a href="{{url('/bass')}}" class="btn btn-warning">BELI</a></p>
          </div>
        </div>
        <div class="card" style="width: 13rem;">
          <img src="public/img/drum1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Drum</h5>
            <p class="card-text">RP 6.500.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p><a href="drum" class="btn btn-warning">BELI</a></p>
          </div>
        </div>
        <div class="card ml-4 mr-4" style="width: 13rem;">
          <img src="public/img/piano.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Piano</h5>
            <p class="card-text">RP 4.890.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
           <p> <a href="piano" class="btn btn-warning">BELI</a></p>
            
          </div>
        </div>
      </div>
     <div class="footer bg-danger" style="padding: 20px 0px 20px 0px; text-align: center; margin-top: 70px;">
        &copy; Copyright <strong><span>Feky Irawan</span></strong>. All Rights Reserved
     </div>
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>