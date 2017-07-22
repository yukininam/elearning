<!-- Start Navigation-->
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
                <li{{ Route::currentRouteName() == 'dashboard' ? ' class=active' : '' }}><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a></li>
                <li{{ Route::currentRouteName() == 'exams' ? ' class=active' : '' }}><a href="{{ url('exams') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;Exams</a></li>
                <li{{ Route::currentRouteName() == 'grades' ? ' class=active' : '' }}><a href="{{ url('grades') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Grades</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->firstname }} ! <img src="images/profile.png" id="profilepic" class="img-circle">
                        <!-- {{ Auth::user()->firstname }}&nbsp;<b class="caret"></b> -->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-table">
                            <div>
                                <img src="images/profile.png" class="img-circle img-profilepic">
                            </div>
                            <div>
                                <p class="dropdown-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                                <p class="dropdown-school">AMA Computer College</p>
                                <p class="dropdown-usertype">Student</p>
                            </div>
                        </li>

                        <li class="dropdown-table dropdown-background">
                            <div>
                                <button class="btn btn-sm btn-info pull-left">My Profile</button>
                            </div>
                            <div>
                                <a a href="{{ url('logout') }}" class="btn btn-sm btn-default pull-right btn-logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                            </div>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;My Profile</a></li> -->
                        <!-- <li><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li> -->
                    </ul>
                    <!-- <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;My Profile</a></li>
                        <li><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li>
                    <</ul> -->

                </li>
            </ul>
        </div>
    </div>
</nav>
<!--End Navigation -->