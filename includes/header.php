<?php //include 'config/core.php';?>
<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
      <div class="navbar-header">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="<?php echo $currentPage; ?>dashboard.php">
              <!-- Logo icon -->
              <b class="logo-icon">
                  <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                  <!-- Dark Logo icon -->
                  <!-- <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                  <!-- Light Logo icon -->
                  <!-- <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                   <!-- dark Logo text -->
                   <h1>CRM </h1>
                   <!-- <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                   <!-- Light Logo text -->    
                   <!-- <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
              </span>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
      </div>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-left mr-auto">
              <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
              <!-- ============================================================== -->
              <!-- mega menu -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="d-none d-md-block">Mega <i class="fa fa-angle-down"></i></span>
                   <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                  </a>
                  <div class="dropdown-menu animated bounceInDown">
                      <div class="mega-dropdown-menu row"> -->
                          <!-- <div class="col-lg-3 col-xlg-2 mb-4">
                              <h4 class="mb-3">CAROUSEL</h4>
                              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active">
                                          <div class="container p-0"> <img class="d-block img-fluid" src="<?php //echo $currentPage; ?>assets/images/big/img1.jpg" alt="First slide"></div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="container p-0"><img class="d-block img-fluid" src="<?php// echo $currentPage; ?>assets/images/big/img2.jpg" alt="Second slide"></div>
                                      </div>
                                      <div class="carousel-item">
                                          <div class="container p-0"><img class="d-block img-fluid" src="<?php// echo $currentPage; ?>assets/images/big/img3.jpg" alt="Third slide"></div>
                                      </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                              </div>
                          </div> -->
                          <!-- <div class="col-lg-3 mb-4">
                              <h4 class="mb-3">ACCORDION</h4>
                              <div id="accordion">
                                  <div class="card mb-1">
                                      <div class="card-header" id="headingOne">
                                          <h5 class="mb-0">
                                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                      </button>
                                    </h5>
                                      </div>
                                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                          <div class="card-body">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card mb-1">
                                      <div class="card-header" id="headingTwo">
                                          <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                      </button>
                                    </h5>
                                      </div>
                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                          <div class="card-body">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card mb-1">
                                      <div class="card-header" id="headingThree">
                                          <h5 class="mb-0">
                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                      </button>
                                    </h5>
                                      </div>
                                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                          <div class="card-body">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div> -->
                          <!-- <div class="col-lg-3  mb-4">
                              <h4 class="mb-3">CONTACT US</h4>
                              <form>
                                  <div class="form-group">
                                      <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                  <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Enter email"> </div>
                                  <div class="form-group">
                                      <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-info">Submit</button>
                              </form>
                          </div>
                          <div class="col-lg-3 col-xlg-4 mb-4">
                              <h4 class="mb-3">List style</h4>
                              <ul class="list-style-none">
                                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                  <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                              </ul>
                          </div> -->
                      <!-- </div>
                  </div>
              </li> -->
              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                   <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li> -->
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                  <form class="app-search position-absolute">
                      <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                  </form>
              </li> -->
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                      <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                      <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                      <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                      <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                  </div>
              </li> -->
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                      
                  </a>
                  <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                      <span class="with-arrow"><span class="bg-primary"></span></span>
                      <ul class="list-style-none">
                          <li>
                              <div class="drop-title bg-primary text-white">
                                  <h4 class="mb-0 mt-1">4 New</h4>
                                  <span class="font-light">Notifications</span>
                              </div>
                          </li>
                          <li>
                              <div class="message-center notifications">
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                  </a>
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                  </a>
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                  </a>
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                          </li>
                      </ul>
                  </div>
              </li> -->
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                      
                  </a>
                  <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                      <span class="with-arrow"><span class="bg-danger"></span></span>
                      <ul class="list-style-none">
                          <li>
                              <div class="drop-title text-white bg-danger">
                                  <h4 class="mb-0 mt-1">5 New</h4>
                                  <span class="font-light">Messages</span>
                              </div>
                          </li>
                          <li>
                              <div class="message-center message-body">
                                  
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="user-img"> <img src="<?php echo $currentPage; ?>assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                  </a>
                                  
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="user-img"> <img src="<?php echo $currentPage; ?>assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                  </a>
                                  
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="user-img"> <img src="<?php echo $currentPage; ?>assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                  </a>
                                  
                                  <a href="javascript:void(0)" class="message-item">
                                      <span class="user-img"> <img src="<?php echo $currentPage; ?>assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                      <div class="mail-contnet">
                                          <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                          </li>
                      </ul>
                  </div>
              </li> -->
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $currentPage; ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                  <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                      <span class="with-arrow"><span class="bg-primary"></span></span>
                      <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                          <div class=""><img src="<?php echo $currentPage; ?>assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                          <div class="ml-2">
                              <h4 class="mb-0"><?php echo strtoupper($_SESSION["username"]);?></h4>
                              <!-- <p class=" mb-0">varun@gmail.com</p> -->
                          </div>
                      </div>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                      <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a> -->
                      <div class="dropdown-divider"></div>
                      <?php
                        if($currentPage != ''){
                      ?>
                          <a class="dropdown-item" href="<?php echo $currentPage; ?>logout_page.php"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                      <?php    
                        }else{
                      ?>
                          <a class="dropdown-item" href="<?php echo $currentPage; ?>logout.php"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                      <?php    
                        }
                      ?>
                      <!-- <div class="dropdown-divider"></div>
                      <div class="pl-4 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->
                  </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
          </ul>
      </div>
  </nav>
</header>