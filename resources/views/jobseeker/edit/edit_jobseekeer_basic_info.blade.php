<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Edit Basic Information | OLA Job</title>
    <meta name="description" content="OLA Job, Job portal Nepal">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google fonts links-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Core css -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    <link href="../../css/animate.min.css" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jqueryui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <!-- Responsive css-->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}" />
    <!--[if lt IE 9]>
    <script src="{{URL::asset('js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../../images/logo.png" alt="Logo" class="img-responsive" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav hidden-xs">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle" src="../../images/avatar-pic.png"  alt=""> <span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>

    </div>
    <!-- /.container -->
</nav>

<div class="page-wrapper">
    <div class="container">
        <!-- content -->
        <div class="content dashboard-container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="box">
                        <div class="box-header top-header">

                            <span class="pull-left title"><strong>Edit Profile</strong></span>

                            <span class="btn-small btn-green pull-right">View Profile</span>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">

                    <div class="section left-bar">


                        <div class="box">

                            <!-- side-menu -->
                            <div class="side-menu">

                                <nav class="navbar navbar-default" role="navigation">


                                    <div class="side-menu-container">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="overview.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Overview</a>
                                            </li>
                                            <li><a href="my-profile.html"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> My Status</a></li>

                                            <!-- Dropdown-->
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-1">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile <span class="caret"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id="dropdown-1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href="job-preference.html">Job Preference</a></li>
                                                            <li class="active"><a href="basic-info.html">Basic Information</a></li>
                                                            <li><a href="education.html">Education</a></li>
                                                            <li><a href="training.html">Training</a></li>
                                                            <li><a href="work-experience.html">Work Experience</a></li>
                                                            <li><a href="document.html">Document</a></li>
                                                            <li><a href="social-account.html">Social Account</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Dropdown-->
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-2">
                                                    <i class="fa fa-cog" aria-hidden="true"></i>Setting <span class="caret"></span>
                                                </a>

                                                <!-- Dropdown level 1 -->
                                                <div id="dropdown-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href="#">Privacy Setting</a></li>
                                                            <li><a href="change-email.html">Change Email</a></li>
                                                            <li><a href="#">Change Password</a></li>
                                                            <li><a href="#">Social Account</a></li>
                                                            <li><a href="#">Work Experience</a></li>
                                                            <li><a href="#">Deactive Accounts</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </li>

                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </nav>

                            </div><!-- /.side-menu -->

                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <!-- main-bar -->
                    <div class="section main-bar dashboard-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="box">
                                    <div class="box-header">
                                        <span class="pull-left"><strong>Basic Information > Edit Personal Information</strong></span>
                                        <span class="btn-small btn-cont pull-right">Edit basic Info</span>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12">

                                                <form method="POST" action="{{route('basicinfo.update',$editinfo->jobseeker_id)}}" class="form-horizontal edit-form">
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    {{csrf_field()}}

                                                    <div class="form-group">
                                                        <div class="col-sm-4  text-right">
                                                            <label for="full name" class="control-label">Full Name <font color="#FF0000">*</font>:</label>
                                                        </div>
                                                        <div class="col-sm-8 ">
                                                            <input required="" name="name" placeholder="Full Name" type="text" class="form-control" id="fname" size="30" value="{{$editinfo->name}}">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-sm-4 text-right">
                                                            <label for="gender" class="control-label">Gender <font color="#FF0000">*</font>:</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <select required="" name="gender" id="gender" class="form-control">
                                                                @if($editinfo->gender == 'male')
                                                                    <option value="male" selected>Male</option>
                                                                    <option value="female">Female</option>
                                                                @elseif($editinfo->gender == 'female')
                                                                    <option value="male">Male</option>
                                                                    <option value="female" selected>Female</option>
                                                                @else

                                                                    <option value="">Select Gender</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                @endif


                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-4 text-right">
                                                            <label for="gender" class="control-label">Marital Status <font color="#FF0000">*</font>:</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <select required="" name="marital_status" id="marital-status" class="form-control">
                                                                @if($editinfo->	marital_status == 'married')
                                                                    <option value="married" selected>Married</option>
                                                                    <option value="unmarried">Unmarried</option>
                                                                @elseif($editinfo->	marital_status == 'unmarried')
                                                                    <option value="married" >Married</option>
                                                                    <option value="unmarried" selected>Unmarried</option>
                                                                @else
                                                                    <option value="married">Married</option>
                                                                    <option value="unmarried">Unmarried</option>
                                                                @endif
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-4 text-right">
                                                            <label for="gender" class="control-label">Religion <font color="#FF0000">*</font>:</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <select required="" name="religion" id="religion" class="form-control">
                                                                <option value="">Select </option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Muslim">Muslim</option>
                                                                <option value="Christan">Christan</option>

                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-4  text-right">
                                                            <label for="dob" class="control-label">Date of Birth <font color="#FF0000">*</font>:</label>

                                                        </div>
                                                        <div class="col-sm-8 ">
                                                            <input required="" name="dob" placeholder="Date of Birth" type="date" class="form-control" id="datepicker" size="30" value="{{$editinfo->dob}}">

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-4  text-right">
                                                            <label for="nationality" class="control-label">Nationality <font color="#FF0000">*</font>:</label>

                                                        </div>
                                                        <div class="col-sm-8 ">
                                                            <select required="" name="nationality" id="nationality" class="form-control">
                                                                <option value="">Select Nationality</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="India">India</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="USA">USA</option>
                                                                <option value="UK">UK</option>

                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-4 text-right">
                                                            <label for="current-address" class="control-label">Current Address <font color="#FF0000">*</font>:</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input required="" name="current_address" placeholder="Current Address" type="text" class="form-control" id="current-address" size="30" value="{{$editinfo->address}}">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4 text-right">
                                                            <label for="current-address" class="control-label">Permanent Address <font color="#FF0000">*</font>:</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input required="" name="current-address" placeholder="Current Address" type="text" class="form-control" id="current-address" size="30" value="{{$editinfo->address}}">

                                                        </div>

                                                    </div>

                                                    <table class="table " id="contact">
                                                        <tr class="contact-tr">
                                                            <td class="contact-td">
                                                                <div class="form-group contact-details">
                                                                    <div class="col-sm-4 text-right">
                                                                        <label for="current-address" class="control-label">Contact No. <font color="#FF0000">*</font>:</label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <select required="" name="type" id="religion" class="form-control">
                                                                                    <option value="">Select </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="Home">Home</option>
                                                                                    <option value="Work">Work</option>
                                                                                </select>

                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input required="" name="current-address" placeholder="" type="text" class="form-control" id="current-address" size="30" value="{{$editinfo->contact}}">
                                                                            </div>

                                                                            <div class="remove-contact col-sm-3">


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <div class="box-footer text-center">
                                                        <div class="form-group ">
                                                            <!--  <a class="btn-small add-more" name="action_primary">+</a> -->

                                                            <a href="#" class="add-more"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Another Contact Number</a>

                                                        </div>

                                                        <input type="submit" value="submit" class="btn-small btn-parttime"> <span class="btn-small">Reset</span>
                                                    </div>


                                                </form>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box -->
                            </div>

                        </div>

                    </div>
                    <!-- /.main-bar -->

                </div>

            </div>

        </div><!-- /.content -->
    </div>  <!-- /.container -->

</div> <!-- /.page-wrapper -->


<section id="footer-menu" class="footer-menu">
    <div class="container">
        <div class="row">
            <div class="footer-menu-wrapper">

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">

                            <img src="../../images/logo-footer.png" alt="logo">
                            <address> Samakhusi Townplanning, <br>
                                Kathmandu, Nepal
                            </address>

                            <h5>Contact Information </h5>
                            <p>E: <a href="mailto:care@decadeint.com">care@decadeint.com</a>
                                <br> P: (+977) 1 4381281, 4383043
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">

                            <h5>Quick Links</h5>
                            <ul>

                                <li><a href="#">Home</a></li>
                                <li><a href="#">Search Jobs</a></li>
                                <li><a href="#">Jobseeker Login</a></li>
                                <li><a href="#">Employer Login </a> </li>
                                <li><a href="#">Feedback</a> </li>
                                <li><a href="#">Contact Us</a> </li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">

                            <h5>Legal</h5>
                            <ul>
                                <li>PRIVACY & COOKIES</li>
                                <li>TERMS OF USE</li>
                                <li>TRADEMARKS</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="menu-item">
                        <h5>Newsletter</h5>
                        <p>Insights await in your company's data. Bring them into focus with GPS .</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="form-control" value="Subscribe">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-brand">
                        <p>Copyright &copy; 2017 OLA Job. All Rights Reserved.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <span>Site Powered by <a href="http://www.decadeint.com/" target="_blank"><img alt="Decade International Pvt. Ltd." src="http://walkietalkienepal.com/img/decadeit-logo.fw.png"> Decade IT.</a></span>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--/.footer-->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<!--core js -->
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/wow.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/jquery-ui.js"></script>

</body>

</html>