<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Learning Login</title>

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container container-login">
      <div class="row row-login">
        <div class="col-md-8 col-sm-8 eq-col hidden-xs">
          <div>
            <img src="images/loginbg.png" class="wow fadeIn" data-wow-delay="0.5s" id="loginbg">
            <img src="images/elearninglogo.png" class="wow fadeInUp" data-wow-delay="1s" id="elearninglogo">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 eq-col">
            <img src="images/elearninglogo.png" class="wow fadeIn visible-xs" data-wow-delay="0.5s" id="elearninglogo-xs">
          <div id="div-login" class="wow fadeInDown" data-wow-delay="0s" >
            <div class="panel panel-default">
              <div id="login-panel-heading" class="panel-heading">
                E-LEARNING LOGIN
              </div>
              @if(Session::has('notice'))
              <div class="alert alert-dismissable alert-{{ Session::get('notice.type') }}">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="fa fa-fw fa-exclamation-triangle"></i>{{ Session::get('notice.msg') }}
              </div>
              @endif
              @if(Session::has('expired'))
              <div class="alert alert-dismissable alert-{{ Session::get('expired.type') }}">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="fa fa-fw fa-exclamation-triangle"></i>{{ Session::get('expired.msg') }}
              </div>
              @endif
              <div class="panel-body">

                {!! Form::open(array('url' => 'login', 'role' => 'form')) !!}
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>

                  <button type="submit" style="color:#fff; text-decoration:none; font-weight:bold;" class="btn btn-info btn-login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

                  </button>
                {!! Form::close() !!}
              </div>
              <div class="panel-footer">
                <a href="#" class="pull-left">Forgot Password?</a>
              </div>
            </div>
          </div>
        </div>
        <div class="footnote">        
          <br/>DepEd Tarlac City Schools Division
          <i class="fa fa-copyright" aria-hidden="true"></i> 2017
          <br/>Created with Passion by AMACC CODEC    
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>

