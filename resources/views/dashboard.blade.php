@extends('layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="css/dashboard.css">
@stop

@section('scripts')
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
@stop

@section('content')
<div class="mg-top-navbar"></div>
<div id="elearning-hello">
    <div class="container">
        <div class="row padding-top-15px padding-bottom-15px">
            <div class="col-md-2 col-sm-3">
                <img class="img-responsive" id="elogo" src="images/e.png">
            </div>
            <div class="col-md-10 col-sm-9">
            <h1 class="intro-salutation">Hello {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}! <span class="intro-welcome"><br>Welcome to your E-Learning Dashboard</span></h1>
                <span class="intro-text">This E-Learning System serves as an additional learning tool for students. Online lessons or modules are uploaded by teachers as well as practice drills, quizzes and exams.</span>
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
@stop