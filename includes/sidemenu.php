<!--<style>-->
<!--    .list-active.active {-->
<!--        background: #fff !important;-->
<!--        color: #212529 !important;-->
<!--    }-->
<!--    .sidebar-nav ul .sidebar-item .sidebar-link.list-active.active i{-->
<!--        color: #9598a4 !important;-->
<!--    }-->
<!--    .sidebar-nav ul .sidebar-item .sidebar-link.list-active.active span{-->
<!--        color: #9598a4 !important;-->
<!--    }-->
<!--</style>-->


<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo $currentPage; ?>dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                  <!-- <ul aria-expanded="false" class="collapse  first-level">
                      <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classic </span></a></li>
                      <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Analytical </span></a></li>
                      <li class="sidebar-item"><a href="index3.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Cryptocurrency </span></a></li>
                      <li class="sidebar-item"><a href="index4.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Overview </span></a></li>
                      <li class="sidebar-item"><a href="index5.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> E-Commerce </span></a></li>
                      <li class="sidebar-item"><a href="index6.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Sales </span></a></li>
                      <li class="sidebar-item"><a href="index7.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> General </span></a></li>
                      <li class="sidebar-item"><a href="index8.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Trendy </span></a></li>
                      <li class="sidebar-item"><a href="index9.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Campaign </span></a></li>
                      <li class="sidebar-item"><a href="index10.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Modern </span></a></li>
                  </ul> -->
              </li>
              <!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Master </span></li>
              <li class="sidebar-item"> <a class="sidebar-link two-column has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Master  </span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item"><a href="master_cast.php" class="sidebar-link"><i class="mdi mdi-cast"></i><span class="hide-menu"> Cast Master </span></a></li>
                      <li class="sidebar-item"><a href="master_subcast.php" class="sidebar-link"><i class="mdi mdi-cast"></i><span class="hide-menu"> Sub Cast Master </span></a></li>
                      <li class="sidebar-item"><a href="master_community.php" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> Community Master </span></a></li>
                      <li class="sidebar-item"><a href="master_section.php" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Section Master </span></a></li>
                      <li class="sidebar-item"><a href="master_class.php" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Class Master </span></a></li>
                      <li class="sidebar-item"><a href="master_admissionsource.php" class="sidebar-link"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> Admission Source </span></a></li>
                      <li class="sidebar-item"><a href="master_state.php" class="sidebar-link"><i class="far fa-building"></i><span class="hide-menu"> State </span></a></li>
                      <li class="sidebar-item"><a href="master_city.php" class="sidebar-link"><i class="fas fa-building"></i><span class="hide-menu"> City </span></a></li>
                      <li class="sidebar-item"><a href="master_village.php" class="sidebar-link"><i class="fas fa-building"></i><span class="hide-menu"> Village </span></a></li>
                      <li class="sidebar-item"><a href="master_academicyear.php" class="sidebar-link"><i class="mdi mdi-yeast"></i><span class="hide-menu"> Academic Year </span></a></li>
                      <li class="sidebar-item"><a href="master_applicationstatus.php" class="sidebar-link"><i class="mdi mdi-message-processing"></i><span class="hide-menu"> Application Status </span></a></li>
                      <li class="sidebar-item"><a href="master_examstatus.php" class="sidebar-link"><i class="mdi mdi-message-processing"></i><span class="hide-menu"> Exam Status </span></a></li>
                      <li class="sidebar-item"><a href="master_arabicsection.php" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Arabic Section Master </span></a></li>
                      <li class="sidebar-item"><a href="master_arabicclass.php" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Arabic Class Master </span></a></li>
                      <li class="sidebar-item"><a href="master_entranceexam.php" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Entrance Exam Paper </span></a></li>
                      <li class="sidebar-item"><a href="master_feecategory.php" class="sidebar-link"><i class="mdi mdi-currency-inr"></i><span class="hide-menu"> Fee Category </span></a></li>
                      <li class="sidebar-item"><a href="master_feehead.php" class="sidebar-link"><i class="mdi mdi-currency-inr"></i><span class="hide-menu"> Fee Head </span></a></li>
                      <li class="sidebar-item"><a href="master_addfeebyclass.php" class="sidebar-link"><i class="mdi mdi-currency-inr"></i><span class="hide-menu"> Add Fee by class </span></a></li>
                      <li class="sidebar-item"><a href="master_bankmaster.php" class="sidebar-link"><i class="mdi mdi-bank"></i><span class="hide-menu"> Bank Master </span></a></li>
                      <li class="sidebar-item"><a href="master_accounttype.php" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> Account Type Master</span></a></li>
                      <li class="sidebar-item"><a href="master_accounthead.php" class="sidebar-link"><i class="mdi mdi-account-box"></i><span class="hide-menu"> Account Head Master</span></a></li>
                  </ul>
              </li> -->
              


              <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">UI</span></li>
              <li class="sidebar-item mega-dropdown"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Master </span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item"><a href="<?php echo $currentPage; ?>role" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu"> Role Master </span></a></li>
                      <li class="sidebar-item"><a href="<?php echo $currentPage; ?>pages/users" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> User Master </span></a></li>
                      <li class="sidebar-item"><a href="<?php echo $currentPage; ?>pages/tablemaster" class="sidebar-link"><i class="fas fa-table"></i><span class="hide-menu"> Table Master </span></a></li>
                      <li class="sidebar-item"><a href="<?php echo $currentPage; ?>pages/tablefiled" class="sidebar-link"><i class="fas fa-table"></i><span class="hide-menu"> Table Filed </span></a></li>

                      <li class="sidebar-item"><a href="<?php echo $currentPage; ?>pages/tablepermission" class="sidebar-link"><i class="fas fa-universal-access"></i><span class="hide-menu"> Table Filed Permission </span></a></li>

                      

                  </ul>
              </li>

              
              
             
                
              <!-- ============================================================== -->
              <!-- ========================= MPD MENUS ===================== -->
              <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark list-active" href="https://corp11.myclassboard.com/Signin/EnquiryForm_Custom?OrgGUID=A07AA0C2-7C79-44E6-8069-C78115C2BE36&fhl=1" target="_blank" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">ADMINSSION</span></a></li>-->
              <!-- ============================================================== -->
              


              <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Tables</span></li>
              <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span class="hide-menu">Tables</span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      
                      <?php 
                      $result=mysqli_query($conn,"SELECT * FROM `tbl_showhide`");
                      while($row=mysqli_fetch_array($result))
                      {
                         $nametable = str_replace("_"," ",$row['tablename']);
                        $menuname = ltrim($nametable, "tbl");
                        $showid = $row['id'];
                    ?>

                      <li class="sidebar-item"><a href="javascript:void(0);" onclick="submitForm<?php echo $showid; ?>()" class="sidebar-link"><i class="mdi mdi-collage"></i><span class="hide-menu"> <?php echo strtoupper($menuname);?> </span></a>
                      </li>

                      <form id="hiddenForm<?php echo $showid; ?>" action="<?php echo $currentPage; ?>pages/dynamic" method="POST" style="display:none;">
                          <input type="hidden" name="userID" value="<?php echo $showid; ?>">
                          <input type="submit" value="Submit">
                      </form>
                      <script>
                          function submitForm<?php echo $showid; ?>() {
                              document.getElementById('hiddenForm<?php echo $showid; ?>').submit();
                          }
                      </script>
                    <?php } ?>
                  </ul>
              </li>

              
              <!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Charts</span></li>
              <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> Charts</span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-morris.html" aria-expanded="false"><i class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> Morris Chart</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chart-js.html" aria-expanded="false"><i class="mdi mdi-svg"></i><span class="hide-menu">Chartjs</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-sparkline.html" aria-expanded="false"><i class="mdi mdi-chart-histogram"></i><span class="hide-menu">Sparkline Chart</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chartist.html" aria-expanded="false"><i class="mdi mdi-blur"></i><span class="hide-menu">Chartis Chart</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chemical-weapon"></i><span class="hide-menu">C3 Charts</span></a>
                          <ul aria-expanded="false" class="collapse second-level">
                              <li class="sidebar-item"><a href="chart-c3-axis.html" class="sidebar-link"><i class="mdi mdi-arrange-bring-to-front"></i> <span class="hide-menu">Axis Chart</span></a></li>
                              <li class="sidebar-item"><a href="chart-c3-bar.html" class="sidebar-link"><i class="mdi mdi-arrange-send-to-back"></i> <span class="hide-menu">Bar Chart</span></a></li>
                              <li class="sidebar-item"><a href="chart-c3-data.html" class="sidebar-link"><i class="mdi mdi-backup-restore"></i> <span class="hide-menu">Data Chart</span></a></li>
                              <li class="sidebar-item"><a href="chart-c3-line.html" class="sidebar-link"><i class="mdi mdi-backburger"></i> <span class="hide-menu">Line Chart</span></a></li>
                          </ul>
                      </li>
                      <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Echarts</span></a>
                          <ul aria-expanded="false" class="collapse second-level">
                              <li class="sidebar-item"><a href="chart-echart-basic.html" class="sidebar-link"><i class="mdi mdi-chart-line"></i> <span class="hide-menu">Basic Charts</span></a></li>
                              <li class="sidebar-item"><a href="chart-echart-bar.html" class="sidebar-link"><i class="mdi mdi-chart-scatterplot-hexbin"></i> <span class="hide-menu">Bar Chart</span></a></li>
                              <li class="sidebar-item"><a href="chart-echart-pie-doughnut.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Pie &amp; Doughnut Chart</span></a></li>
                          </ul>
                      </li>
                  </ul>
              </li> -->
              <!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Sample Pages</span></li>
              <li class="sidebar-item mega-dropdown"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Pages </span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item"><a href="authentication-login1.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login </span></a></li>
                      <li class="sidebar-item"><a href="starter-kit.html" class="sidebar-link"><i class="mdi mdi-crop-free"></i> <span class="hide-menu">Starter Kit</span></a></li>
                      <li class="sidebar-item"><a href="pages-animation.html" class="sidebar-link"><i class="mdi mdi-debug-step-over"></i> <span class="hide-menu">Animation</span></a></li>
                      <li class="sidebar-item"><a href="pages-search-result.html" class="sidebar-link"><i class="mdi mdi-search-web"></i> <span class="hide-menu">Search Result</span></a></li>
                      <li class="sidebar-item"><a href="authentication-login2.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login 2 </span></a></li>
                      <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-camera-iris"></i> <span class="hide-menu">Gallery</span></a></li>
                      <li class="sidebar-item"><a href="pages-treeview.html" class="sidebar-link"><i class="mdi mdi-file-tree"></i> <span class="hide-menu">Treeview</span></a></li>
                      <li class="sidebar-item"><a href="pages-block-ui.html" class="sidebar-link"><i class="mdi mdi-codepen"></i> <span class="hide-menu">Block UI</span></a></li>
                      <li class="sidebar-item"><a href="authentication-register1.html" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Register</span></a></li>
                      <li class="sidebar-item"><a href="pages-session-timeout.html" class="sidebar-link"><i class="mdi mdi-timer-off"></i> <span class="hide-menu">Session Timeout</span></a></li>
                      <li class="sidebar-item"><a href="pages-session-idle-timeout.html" class="sidebar-link"><i class="mdi mdi-timer-sand-empty"></i> <span class="hide-menu">Session Idle Timeout</span></a></li>
                      <li class="sidebar-item"><a href="pages-utility-classes.html" class="sidebar-link"><i class="mdi mdi-tune"></i> <span class="hide-menu">Helper Classes</span></a></li>
                      <li class="sidebar-item"><a href="authentication-register2.html" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Register 2</span></a></li>
                      <li class="sidebar-item"><a href="pages-maintenance.html" class="sidebar-link"><i class="mdi mdi-camera-iris"></i> <span class="hide-menu">Maintenance Page</span></a></li>
                      <li class="sidebar-item"><a href="ui-user-card.html" class="sidebar-link"><i class="mdi mdi-account-box"></i> <span class="hide-menu"> User Card </span></a></li>
                      <li class="sidebar-item"><a href="pages-profile.html" class="sidebar-link"><i class="mdi mdi-account-network"></i><span class="hide-menu"> User Profile</span></a></li>
                      <li class="sidebar-item"><a href="authentication-lockscreen.html" class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu"> Lockscreen</span></a></li>
                      <li class="sidebar-item"><a href="ui-user-contacts.html" class="sidebar-link"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu"> User Contact</span></a></li>
                      <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-vector-triangle"></i><span class="hide-menu"> Invoice Layout </span></a></li>
                      <li class="sidebar-item"><a href="pages-invoice-list.html" class="sidebar-link"><i class="mdi mdi-vector-rectangle"></i><span class="hide-menu"> Invoice List</span></a></li>
                      <li class="sidebar-item"><a href="authentication-recover-password.html" class="sidebar-link"><i class="mdi mdi-account-convert"></i><span class="hide-menu"> Recover password</span></a></li>
                      <li class="sidebar-item"><a href="map-google.html" class="sidebar-link"><i class="mdi mdi-google-maps"></i><span class="hide-menu"> Google Map </span></a></li>
                      <li class="sidebar-item"><a href="map-vector.html" class="sidebar-link"><i class="mdi mdi-map-marker-radius"></i><span class="hide-menu"> Vector Map</span></a></li>
                      <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i> <span class="hide-menu"> Material Icons </span></a></li>
                      <li class="sidebar-item"><a href="eco-products.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i> <span class="hide-menu">Eco - Products</span></a></li>
                      <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Fontawesome Icons</span></a></li>
                      <li class="sidebar-item"><a href="icon-themify.html" class="sidebar-link"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu"> Themify Icons</span></a></li>
                      <li class="sidebar-item"><a href="icon-weather.html" class="sidebar-link"><i class="mdi mdi-weather-cloudy"></i><span class="hide-menu"> Weather Icons</span></a></li>
                      <li class="sidebar-item"><a href="eco-products-cart.html" class="sidebar-link"><i class="mdi mdi-cart"></i> <span class="hide-menu">Eco- Products Cart</span></a></li>
                      <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><i class="mdi mdi mdi-image-broken-variant"></i> <span class="hide-menu"> Simple Line icons</span></a></li>
                      <li class="sidebar-item"><a href="icon-flag.html" class="sidebar-link"><i class="mdi mdi-flag-triangle"></i><span class="hide-menu"> Flag Icons</span></a></li>
                      <li class="sidebar-item"><a href="timeline-center.html" class="sidebar-link"><i class="mdi mdi-clock-fast"></i> <span class="hide-menu"> Center Timeline </span></a></li>
                      <li class="sidebar-item"><a href="eco-products-edit.html" class="sidebar-link"><i class="mdi mdi-cart-plus"></i> <span class="hide-menu">Eco- Products Edit</span></a></li>
                      <li class="sidebar-item"><a href="timeline-horizontal.html" class="sidebar-link"><i class="mdi mdi-clock-end"></i><span class="hide-menu"> Horizontal Timeline</span></a></li>
                      <li class="sidebar-item"><a href="timeline-left.html" class="sidebar-link"><i class="mdi mdi-clock-in"></i><span class="hide-menu"> Left Timeline</span></a></li>
                      <li class="sidebar-item"><a href="timeline-right.html" class="sidebar-link"><i class="mdi mdi-clock-start"></i><span class="hide-menu"> Right Timeline</span></a></li>
                      <li class="sidebar-item"><a href="eco-products-detail.html" class="sidebar-link"><i class="mdi mdi-camera-burst"></i> <span class="hide-menu">Eco- Product Details</span></a></li>
                      <li class="sidebar-item"><a href="error-400.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i> <span class="hide-menu"> Error 400 </span></a></li>
                      <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 403</span></a></li>
                      <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 404</span></a></li>
                      <li class="sidebar-item"><a href="eco-products-orders.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Eco- Product Orders</span></a></li>
                      <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 500</span></a></li>
                      <li class="sidebar-item"><a href="error-503.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 503</span></a></li>
                      <li class="sidebar-item"><a href="eco-products-checkout.html" class="sidebar-link"><i class="mdi mdi-clipboard-check"></i> <span class="hide-menu">Eco- Products Checkout</span></a></li>
                  </ul>
              </li>
              <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-notification-clear-all"></i><span class="hide-menu">DD</span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.1</span></a></li>
                      <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.2</span></a></li>
                      <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i> <span class="hide-menu">Menu 1.3</span></a>
                          <ul aria-expanded="false" class="collapse second-level">
                              <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.1</span></a></li>
                              <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.2</span></a></li>
                              <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.3</span></a></li>
                              <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.4</span></a></li>
                          </ul>
                      </li>
                      <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-playlist-check"></i><span class="hide-menu"> item 1.4</span></a></li>
                  </ul>
              </li> -->
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>