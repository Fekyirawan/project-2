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

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    <title>Store Online</title>

    <style type="text/css">
      body{
        background-color: #E6E6FA;
      }

      #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
      }

      #card-content {
      padding: 9px 44px;
      }
      #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
      }
      .underline-title {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
            height: 2px;
            margin: 1rem auto 0 auto;
            width: 89px;
      }

      a {
       text-decoration: none;
      }

      label {
          font-family: "Raleway", sans-serif;
          font-size: 11pt;
      }
      #forgot-pass {
          color: #2dbd6e;
          font-family: "Raleway", sans-serif;
          font-size: 10pt;
          margin-top: 3px;
          text-align: right;
      }
      .form {
          align-items: left;
          display: flex;
          flex-direction: column;
      }
      .form-border {
          background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
          height: 1px;
          width: 100%;
      }
      .form-content {
          background: #fbfbfb;
          border: none;
          outline: none;
          padding-top: 14px;
      }

      #signup {
          color: #2dbd6e;
          font-family: "Raleway", sans-serif;
          font-size: 10pt;
          margin-top: 16px;
          text-align: center;
      }
      #submit-btn {
          background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
          border: none;
          border-radius: 21px;
          box-shadow: 0px 1px 8px #24c64f;
          cursor: pointer;
          color: white;
          font-family: "Raleway SemiBold", sans-serif;
          height: 42.3px;
          margin: 0 auto;
          margin-top: 50px;
          transition: 0.25s;
          width: 153px;
      }
      #submit-btn:hover {
          box-shadow: 0px 1px 18px #24c64f;
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
      <div id="card"> 
        <div id="card-content">
          <div id="card-title">
            <h2>LOGIN</h2>
           <div class="underline-title"></div>
         </div>
        </div>
           <form method="post" class="form"> 

            <label for="user-email">&nbsp;Email</label>
            <input
             id="user-email"
             class="form-content"
             type="email"
             name="email"
             autocomplete="on"
             required />
            <div class="form-border"></div><label for="user-password">&nbsp;Password</label>
            <input
             id="user-password"
             class="form-content"
             type="password"
             name="password"
             required />
            <div class="form-border"></div><a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="#" id="signup">Don't have account yet?</a>

           </form>
      </div>
  
    










     <div class="footer bg-danger" style="padding: 20px 0px 20px 0px; text-align: center; margin-top: 70px;">
        &copy; Copyright <strong><span>Feky Irawan</span></strong>. All Rights Reserved
     </div>
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>