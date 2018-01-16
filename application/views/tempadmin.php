<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin T-Learning</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/icon logo.png" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendorss/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendorss/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendorss/nprogress/nprogress.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendorss/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url(); ?>assets/vendorss/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url(); ?>assets/vendorss/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url(); ?>assets/vendorss/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url(); ?>assets/vendorss/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendorss/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/builds/css/custom.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
    <style type="text/css">
      .breaks{
    overflow-wrap: break-word;
    word-wrap: break-word;
    -ms-word-break: break-all;
    word-break: break-word;
    -ms-hyphens: auto;
    -moz-hyphens: auto;
    -webkit-hyphens: auto;
    hyphens: auto;
  }
    </style>
  </head>

  <body class="nav-md">
    <?php if ($this->session->flashdata('notif_success')): ?>
                            <script>
                                swal({
                                    title: "Success",
                                    text: "<?php echo $this->session->flashdata('notif_success'); ?>",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('notif_failed')): ?>
                            <script>
                                swal({
                                    title: "Failed",
                                    text: "<?php echo $this->session->flashdata('notif_failed'); ?>",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'error'
                                });
                            </script>
                    <?php endif; ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Admin T-Learning</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Administrator,</span>
                <h2>Arya Bayu</h2>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                    <li><a href="<?php echo base_url(); ?>admin/"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a><i class="fa fa-book"></i> All Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/get_user">Data User</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/get_course">Data Course</a></li>
                       <li><a href="<?php echo base_url(); ?>admin/get_discuss">Data Discussion</a></li>
                       <li><a href="<?php echo base_url(); ?>admin/get_comment">Data Comment</a></li>
                       <li><a href="<?php echo base_url(); ?>admin/report_top">Data Report</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="<?php echo base_url(); ?>admin/broadcast"><i class="fa fa-bullhorn"></i> Broadcast</a>
                  <li><a><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/subject">Subject</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/slider">Slider</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/testi">Testimonial</a></li>
                    </ul>
                  </li>

                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="<?php echo base_url(); ?>assets/images/<?php echo $user_login->photo ?>" alt=""><?php
                  $names = explode(" ",$user_login->name);

                   echo $names[0]; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url() ?>admin/logout_admin"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <?php $this->load->view($main_view); ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendorss/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendorss/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendorss/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendorss/nprogress/nprogress.js"></script>
    <!-- ECharts -->
    <script src="<?php echo base_url(); ?>assets/vendorss/echarts/dist/echarts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendorss/echarts/map/js/world.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/builds/js/custom.min.js"></script>

    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendorss/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendorss/iCheck/icheck.min.js"></script>
    
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url(); ?>assets/vendorss/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendorss/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendorss/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url(); ?>assets/vendorss/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url(); ?>assets/vendorss/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/vendorss/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url(); ?>assets/vendorss/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url(); ?>assets/vendorss/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url(); ?>assets/vendorss/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url(); ?>assets/vendorss/starrr/dist/starrr.js"></script>

  
	
  </body>
</html>
