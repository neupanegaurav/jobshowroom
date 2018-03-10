@include('layouts.layout')



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#" class="free">Search Jobs</a></li>
                    <li><a href="#" class="free post-bg">Post Resume </a></li>
                    <li><a href="#"> Post Jobs</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="contact.html">Contact</a></li>

                 

                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--Home page style-->
    <header class="inner-banner">

        <div class="container">
            <div class="row">
                <div class="inner-wrapper">
                    <div class="col-md-12">
                        <!-- Login -->
                        <div class="container">

                            <div class="card card-container">

                                <ul class="nav nav-tabs final-login">
                                    <li class="active"><a data-toggle="tab" href="#sectionA">Job Seeker</a></li>
                                    <li><a data-toggle="tab" href="#sectionB">Employer</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="sectionA" class="tab-pane fade in active">
                                        <form class="form-horizontal" method="POST" action="/jobseekerlogin " enctype='multipart/form-data' >
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email" placeholder="Email"  name="email" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password" placeholder="Password"  name="password" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-default" value="Login">
                                            </div>
                                        </form>

                                        <div class="col-sm-12">
                                            <hr class="card_hrOr">
                                            <span class="card_spanOr">or</span>
                                        </div>
                                        <!-- social-btn -->
                                        <div class="row card_socialButtons">
                                            <div class="col-sm-12">
                                                <a href="#" class="btn btn-lg btn-block card_btn-facebook">
                                                    <i class="fa fa-facebook visible-xs"></i>
                                                    <span class="hidden-xs">Facebook</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a href="#" class="btn btn-lg btn-block card_btn-twitter">
                                                    <i class="fa fa-twitter visible-xs"></i>
                                                    <span class="hidden-xs">Twitter</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a href="#" class="btn btn-lg btn-block card_btn-google">
                                                    <i class="fa fa-google-plus visible-xs"></i>
                                                    <span class="hidden-xs">Google+</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.social-btn -->

                                        <div class="signin-help">
                                            <span class="pull-left"><a href="reset-password.blade.php">Forgot your password? </a></span>
                                            <span class="pull-right"><a href="register.blade.php">Register</a></span>
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>

                                    <div id="sectionB" class="tab-pane fade">
                                        <form>

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email" placeholder="Email" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password" placeholder="Password" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-default" value="Login">
                                            </div>
                                        </form>
                                        <div class="signin-help">
                                            <span class="pull-left"><a href="reset-password.blade.php">Forgot your password? </a></span>
                                            <span class="pull-right"><a href="register.blade.php">Register</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- /.header /.home -->
@include('layouts.footer')