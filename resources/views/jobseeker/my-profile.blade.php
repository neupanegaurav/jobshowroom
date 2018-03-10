<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>My Profile | Job ShowRoom </title>
      <meta name="description" content="Job ShowRoom , Job portal Nepal">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Google fonts links-->
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <!--Font awesome-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Core css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link href="../css/animate.min.css" rel="stylesheet">
      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="../css/owl.carousel.min.css">
      <link rel="stylesheet" href="../css/owl.theme.default.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive css-->
      <link rel="stylesheet" href="../css/responsive.css" />
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
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
               <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="Logo" class="img-responsive" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav hidden-xs">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle" src="../images/avatar-pic.png"  alt=""> <span class="fa fa-caret-down"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                     <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                     <li class="divider"></li>
                     <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <!-- /.container-->
      </nav>
      <div class="page-wrapper">
         <div class="container">
            <!-- content -->
            <div class="content dashboard-container">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                     <div class="section left-bar">
                        <div class="box">
                           <!-- Menu -->
                           <div class="side-menu">
                              <nav class="navbar navbar-default" role="navigation">
                                 <!-- Main Menu -->
                                 <div class="side-menu-container">
                                    <ul class="nav navbar-nav">
                                       <li ><a href="overview.blade.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Overview</a>
                                       </li>
                                       <li class="active"><a href="my-profile.blade.php"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
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
                                                   <li><a href="basic-info.html">Basic Information</a></li>
                                                   <li><a href="education.blade.php">Education</a></li>
                                                   <li><a href="training.html">Training</a></li>
                                                   <li><a href="workexperience.blade.php">Work Experience</a></li>
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
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-9 no-padding">
                     <!-- main-bar -->
                     <div class="section main-bar dashboard-content">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="box">
                                 <div class="box-header">
                                    <span class="pull-left"><strong>My Profile</strong></span>
                                    <span class="btn-small btn-cont pull-right">Download Cv</span>
                                 </div>
                                 <div class="box-body">
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12 col-md-3">
                                          <img class="img-circle" src="../images/avatar-pic.png" alt="">
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-9">
                                          <div class="personal-info">
                                              <span><strong> {{$jobseekerdetail->name}}</strong> </span><br>
                                             <span>Address: {{$jobseekerdetail->address}}</span>
                                             <br>
                                             <span>Phone: {{$jobseekerdetail->contact_no}}</span>
                                             <br>
                                             <span>Email: {{$jobseekerdetail->rel_user->email}}</span>
                                             <br>
                                             <span>Date of Birth: March 11, 1976</span>
                                             <br>
                                          </div>
                                       </div>
                                       <div class="col-xs-12 col-sm-12">
                                          <div class="personal-details">
                                             <div class="career-objective">
                                                <h2><i class="fa fa-th-list" aria-hidden="true"></i>Objective</h2>
                                                <p>--</p>
                                             </div>
                                             <div class="work-experience">
                                                <h2><i class="fa fa-file-code-o" aria-hidden="true"></i>Work Experience</h2>
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                                                   </div>
                                                   <div class="col-md-9">
                                                      <span class="job-title"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                                      <p></p>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="education">
                                                <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</h2>
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                      2003  
                                                   </div>
                                                   <div class="col-md-9">
                                                      <span class="job-title"><i class="fa fa-certificate" aria-hidden="true"></i></span>
                                                      <p></p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="job-reference">
                                                <h2><i class="fa fa-address-card-o" aria-hidden="true"></i> Job Preference</h2>
                                                <div class="row">
                                                   
                                                   <div class="col-md-offset-3 col-md-9">
                                                      <h3> <i class="fa fa-list" aria-hidden="true"></i>Looking for : Senior Level</h3>
                                                     
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="skills">
                                                <h2><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Specializations and Skills</h2>
                                                <div class="row">
                                                   
                                                   <div class="col-md-offset-3 col-md-9">
                                                      <h3> <i class="fa fa-list" aria-hidden="true"></i>Skill</h3>
                                                      <span class="badge">Bootstrap</span>
                                                      <span class="badge">HTML5</span>
                                                      <span class="badge">CSS3</span>
                                                   </div>
                                                </div>
                                             </div>

                                            <div class="per-info">
                                                <h2><i class="fa fa-address-card-o" aria-hidden="true"></i>Personal Information</h2>
                                                <div class="row">

                                                    <div class="col-md-offset-3 col-md-9">
                                                   
                                                        <i class="fa fa-list" aria-hidden="true"></i>Permanent Address : Dist-sapatary, Rajbiraj-3

                                                    </div>

                                                     <div class=" col-md-offset-3 col-md-9">
                                                   
                                                        <i class="fa fa-list" aria-hidden="true"></i>Permanent Address : Dist-sapatary, Rajbiraj-3
                                                        
                                                    </div>
                                                </div>
                                             </div>  
                                          </div>
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
            </div>
            <!-- /.content -->
         </div>
         <!-- /.container -->
      </div>
      <!-- /.page-wrapper -->      

  <section id="footer-menu" class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="footer-menu-wrapper">

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="menu-item">

                                <img src="images/logo-footer.png" alt="logo">
                                <address> Kalanki <br>
                              Kathmandu, Nepal
                            </address>

                                <h5>Contact Information </h5>
                                <p>E: <a href="mailto:care@decadeint.com">info@showroom.com</a>
                                    <br> P: (+977) 1 0000000, 0000000
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
                                     <li><a href="news-listing.html">Jobs news</a> </li>
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
                            <p>Copyright &copy; 2017 Job ShowRoom . All Rights Reserved.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">
                            <span>Site Powered by <a href="#" target="_blank">Job ShowRoom </a></span>

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
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/wow.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/main.js"></script>
   </body>
</html>