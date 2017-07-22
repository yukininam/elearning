<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Learning Dashboard</title>
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">    

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--Start Navigation-->
        <nav id="nav-menu" class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="spinner-master navbar-toggle"  data-toggle="collapse" data-target="#myNavbar">
                        <input type="checkbox" id="spinner-form" />
                        <label for="spinner-form" class="spinner-spin">
                            <div class="spinner diagonal part-1"></div>
                            <div class="spinner horizontal"></div>
                            <div class="spinner diagonal part-2"></div>
                        </label>
                    </div>
                    <!--<button type="button" class="hide navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>-->
                    <a class="navbar-brand" href="#">
                        <img src="images/elearninglogowh.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-nav-collapse">
                        <li class="active"><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a></li>
                        <li><a href="exams.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;Exams</a></li>
                        <li><a href="grades.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Grades</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/profile.png" id="profilepic" class="img-circle">
                                Edgren<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;My Profile</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End Navigation-->
        <!--Start Contents-->
        <!--Intro Section-->

        <style type="text/css">
            #elogo {
                max-width: 120px;
                margin: 0 auto;
            }
            #elearning-hello {
                background-color: #fff7dc;
            }
            .slick-prev:before, .slick-next:before {
                color: #ababab;
            }
            .elearning-slider {
                padding: 0 15px;
            }
            .elearning-slider img {
                width: 100%;
            }
            .elearning-slider .panel-heading {
                padding: 0;
            }
            .elearning-slider .elearning-slides {
                margin: 15px;
            }
            .elearning-slider .slick-prev {
                left: -10px;
            }
            .elearning-slider .slick-next {
                right: -10px;
            }
            .elearning-slides {
                outline: none;
            }
            .elearning-slides .panel {
                box-shadow: 0 0 8px 0 rgba(0,0,0,.1);
            }
            #elearning-my-courses {
                background: #f5f5f5;
                border-bottom: 1px solid #ccc;
                border-top: 1px solid #ccc;
                padding: 15px 0px;
                font-size: 15px;
            }
            #elearning-my-courses h2 {
                font-size: 16px;
                margin: 0;
                font-weight: bold;
            }
        </style>
        <div class="mg-top-navbar"></div>
        <div id="elearning-hello">
            <div class="container">
                <div class="row padding-top-15px padding-bottom-15px">
                    <div class="col-md-2 col-sm-3">
                        <img class="img-responsive" id="elogo" src="images/e.png">
                    </div>
                    <div class="col-md-10 col-sm-9">
                        <h1 class="heading-name">Hello Edgren! <span class="subheading"><br/>Welcome to your E-Learning Dashboard</span></h1>
                        <span class="normal-text">This E-Learning System serves as an additional learning tool for students. Online lessons or modules are uploaded by teachers as well as practice drills, quizzes and exams.</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="elearning-my-courses">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <h2>My Courses</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="elearning-courses">
            <div class="container">
                <div class="row padding-top-15px padding-bottom-15px">
                    <section class="elearning-slider slider">
                        <div class="elearning-slides">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="images/calculus.png">
                                </div>
                                <div class="panel-body">
                                    <span class="subject-text">
                                        In mathematics education, <b>Pre-calculus</b> is a course with university or high school level algebra and trigonometry that is designed to prepare students for the study of calculus. Schools often distinguish between algebra and trigonometry as two separate parts of the coursework.</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elearning-slides">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="images/earthscience.png">
                                </div>
                                <div class="panel-body">
                                    <span class="subject-text">
                                        <b>Earth Science</b> is the study of the Earth and its neighbors in space. It is an exciting science with many interesting and practical applications. Some Earth scientists use their knowledge of the Earth to locate and develop energy and mineral resources.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elearning-slides">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     <img src="images/genmath.png">
                                </div>
                                <div class="panel-body">
                                    <span class="subject-text">
                                        <b>General Mathematics</b> focuses on using mathematics effectively, efficiently and critically to make informed decisions. It provides students with the mathematical knowledge, skills and understanding to solve problems in real contexts for a range of workplace, personal, further learning and community settings.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elearning-slides">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="images/oralcomm.png">
                                </div>
                                <div class="panel-body">
                                    <span class="subject-text">
                                    This one-semester basic course in speech is designed to develop each student's ability to communicate effectively in his or her academic, business, and social life. The major emphasis is on the preparation and delivery of formal speeches, but many areas of the communication process are explored.
                                    </span>
                                </div>
                            </div>
                      </div>
                        <div class="elearning-slides">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="images/komunikasyon.png">
                                </div>
                                <div class="panel-body">
                                    <span class="subject-text">
                                    Nagtataglay and kursong ito ng mga babasahin, mga gawain, mga pagtataya, at mga pagpapahalagang iniangkop sa kakayahan at interes ng mga mag-aaral upang maging makabuluhan, napapanahon, kawili-wili, nakalilinang ng kritikal at mapanuring pag-iisip, at nakapaghahanda sa mga pagsubok at realidad ng totoong buhay.
                                    </span>
                                </div>
                            </div>
                      </div>
                  </section>
              </div>
          </div>
      </div>
      <!--End of Intro Section-->
      <!--Subjects Section-->

      <!--End of Subjects Section-->
      <!--End Contents-->
      <!--Footer-->
      <div class="ftr">
        <div class="container">
            <div class="row">
                <footer>
                    <div>
                      <p><b>DepEd Tarlac City Schools Division <i class="fa fa-copyright" aria-hidden="true"></i> 2017</b></p>
                      <p>Created with Passion by AMACC CODEC<br/></p>
                  </div>
              </footer>
          </div>
      </div>
    </div>

    <!--End Footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="plugins/slick/slick.js"></script>

    <script type="text/javascript">
        $('.elearning-slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
            {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
            ]
        });
    </script>

</body>
</html>