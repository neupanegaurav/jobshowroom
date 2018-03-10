@extends('Layouts.layout')
    @section('body')
        @include('Layouts.topbar')
        @include('Layouts.navigation')

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
                                            <form method="post" action="/jobseeker">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required >
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required >
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" name="repassword" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-default" value="Sign Up" >
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
                                                <span class="pull-left"><a href="login.html">Already you have accont ? </a></span>
                                                <span class="pull-right"><a href="login.html">Login</a></span>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div id="sectionB" class="tab-pane fade">
                                            <form method="post" action="/employeer">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" placeholder="Name" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="phone" placeholder="Phone" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-default" value="Sign Up">
                                                </div>
                                            </form>



                                            <div class="signin-help">
                                                <span class="pull-left"><a href="reset-password.html">Forgot your password? </a></span>
                                                <span class="pull-right"><a href="register.html">Register</a></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--/ Login -->

                        </div>
                    </div>
                </div>
            </div>

        </header>
        @include('Layouts.footer')
    @endsection

