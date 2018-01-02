<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>Project view details page - Bootdey.com</title>
    <!-- css files -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-notifications.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //css files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- <link href="<?php echo base_url(); ?>assets/css/skywalk-docs.min.css" rel="stylesheet" type="text/css" media="all"> -->
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>assets/css/netdna-bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">

    <style type="text/css">
    	body{
        /*margin-top:20px;*/
      background:#eee;
      }
      /* PROJECTS */
      .project-people,
      .project-actions {
        text-align: right;
        vertical-align: middle;
      }
      dd.project-people {
        text-align: left;
        margin-top: 5px;
      }
      .project-people img {
        width: 32px;
        height: 32px;
      }
      .project-title a {
        font-size: 14px;
        color: #676a6c;
        font-weight: 600;
      }
      .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
      }
      .project-manager .tag-list li a {
        font-size: 10px;
        background-color: white;
        padding: 5px 12px;
        color: inherit;
        border-radius: 2px;
        border: 1px solid #e7eaec;
        margin-right: 5px;
        margin-top: 5px;
        display: block;
      }
      .project-files li a {
        font-size: 11px;
        color: #676a6c;
        margin-left: 10px;
        line-height: 22px;
      }

      /* PROFILE */
      .profile-content {
        border-top: none !important;
      }
      .profile-stats {
        margin-right: 10px;
      }
      .profile-image {
        width: 120px;
        float: left;
      }
      .profile-image img {
        width: 96px;
        height: 96px;
      }
      .profile-info {
        margin-left: 120px;
      }
      .feed-activity-list .feed-element {
        border-bottom: 1px solid #e7eaec;
      }
      .feed-element:first-child {
        margin-top: 0;
      }
      .feed-element {
        padding-bottom: 15px;
      }
      .feed-element,
      .feed-element .media {
        margin-top: 15px;
      }
      .feed-element,
      .media-body {
        overflow: hidden;
      }
      .feed-element > .pull-left {
        margin-right: 10px;
      }
      .feed-element img.img-circle,
      .dropdown-messages-box img.img-circle {
        width: 38px;
        height: 38px;
      }
      .feed-element .well {
        border: 1px solid #e7eaec;
        box-shadow: none;
        margin-top: 10px;
        margin-bottom: 5px;
        padding: 10px 20px;
        font-size: 11px;
        line-height: 16px;
      }
      .feed-element .actions {
        margin-top: 10px;
      }
      .feed-element .photos {
        margin: 10px 0;
      }
      .feed-photo {
        max-height: 180px;
        border-radius: 4px;
        overflow: hidden;
        margin-right: 10px;
        margin-bottom: 10px;
      }
      .file-list li {
        padding: 5px 10px;
        font-size: 11px;
        border-radius: 2px;
        border: 1px solid #e7eaec;
        margin-bottom: 5px;
      }
      .file-list li a {
        color: inherit;
      }
      .file-list li a:hover {
        color: #1ab394;
      }
      .user-friends img {
        width: 42px;
        height: 42px;
        margin-bottom: 5px;
        margin-right: 5px;
      }

      .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 0;
        padding: 0;
      }
      .ibox.collapsed .ibox-content {
        display: none;
      }
      .ibox.collapsed .fa.fa-chevron-up:before {
        content: "\f078";
      }
      .ibox.collapsed .fa.fa-chevron-down:before {
        content: "\f077";
      }
      .ibox:after,
      .ibox:before {
        display: table;
      }
      .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: inherit;
        margin-bottom: 0;
        padding: 14px 15px 7px;
        min-height: 48px;
      }
      .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
      }
      .ibox-footer {
        color: inherit;
        border-top: 1px solid #e7eaec;
        font-size: 90%;
        background: #ffffff;
        padding: 10px 15px;
      }
      ul.notes li,
      ul.tag-list li {
        list-style: none;
      }
        .custom-input-file {
          overflow: hidden;
          position: relative;
          width: 200px;
          height: 200px;
          background-repeat: no-repeat;
          /*background-attachment: fixed;*/
          background-position: center; 
          background-size: 200px;
          /*border-radius: 120px;*/
      }
      .changephoto{
          z-index: 999;
          line-height: 0;
          font-size: 0;
          position: absolute;
          opacity: 0;
          filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
          margin: 0;
          padding:0;
          left:0;
      }
      .uploadPhoto {
          position: absolute;
          top: 25%;
          left: 25%;
          display: none;
          width: 50%;
          height: 50%;
          color: #fff;    
          text-align: center;
          line-height: 60px;
          text-transform: uppercase;    
          background-color: rgba(0,0,0,.3);
          /*border-radius: 50px;*/
          cursor: pointer;
      }
      .custom-input-file:hover .uploadPhoto { display: block; }

      h6.thumb_true {
        background: #d95459;
        color:#fff;
      }
      a.subs_false{
        color:#fff;
      }
      a.subs_true{
        color:#d9534f;
      }
      </style>

</head>
<body style="margin-top: 0px;">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      
      <!-- <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#">T- Learning</a>
      </div> -->


      <?php 
        if ($this->session->userdata('logged_in') != TRUE) { ?>

      <!-- Modal3 -->       
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
      <!-- Modal content-->
        <div class="modal-content news-w3l">
            <div class="modal-header">
              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
              <h4>Login Your Account</h4>
              <!--newsletter-->
              <div class="login-main wthree">
                <form action="<?php echo base_url(); ?>auth/login" method="post" enctype="multipart/form-data">
                <input type="email" placeholder="Email" required="" name="email" class="form-control">
                <input type="password" placeholder="Password" name="password" class="form-control">
                <input type="submit" name="submit" value="Login">
              </form>
              </div>
            <!--//newsletter-->     
            </div>
          </div>
        </div>
       </div>
      <div class="clearfix"></div>
  <!-- //Modal3 -->

      <!-- Modal4 -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
      <!-- Modal content-->
        <div class="modal-content news-w3l">
            <div class="modal-header">
              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
              <h4>Register Now</h4>
              <!--newsletter-->
              <div class="login-main wthree">
              <form action="<?php echo base_url(); ?>auth/submit_user" method="post">
                <input type="text" placeholder="Name" name="name" class="form-control">
                <input type="email" placeholder="Email" required="" name="email" class="form-control">
                <input type="text" name="username" placeholder="Username" class="form-control">
                <input type="password" placeholder="Password" name="password" class="form-control">
                <input type="text" placeholder="City" name="city" class="form-control">
                <input type="text" name="bio" placeholder="Bio" class="form-control">
                <input type="submit" value="Register Now" name="submit">
              </form>
              </div>
            <!--//newsletter-->     
            </div>
          </div>
        </div>
       </div>
       <?php } ?>
      <div class="clearfix"></div>

  <!-- //Modal4-->


          <div class="">
            <a class="navbar-brand" href="#">T-Learning</a>
          </div>
        

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right" style="width: 800px">
          <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="2" class="glyphicon glyphicon-bell notification-icon"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                  <!-- <ul class="notifications"> -->
                <li class="notification">
                    <div class="media">
                      <div class="media-left">
                        <div class="media-object">
                          <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
                        </div>
                      </div>
                      <div class="media-body">
                        <strong class="notification-title"><a href="#">Dave Lister</a> commented on <a href="#">DWARF-13 - Maintenance</a></strong>
                        <p class="notification-desc">I totally don't wanna do it. Rimmer can do it.</p>

                        <div class="notification-meta">
                          <small class="timestamp">27. 11. 2015, 15:00</small>
                        </div>
                      </div>
                    </div>
                </li>

                <li class="notification">
                    <div class="media">
                      <div class="media-left">
                        <div class="media-object">
                          <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
                        </div>
                      </div>
                      <div class="media-body">
                        <strong class="notification-title"><a href="#">Nikola Tesla</a> resolved <a href="#">T-14 - Awesome stuff</a></strong>

                        <p class="notification-desc">Resolution: Fixed, Work log: 4h</p>

                        <div class="notification-meta">
                          <small class="timestamp">27. 10. 2015, 08:00</small>
                        </div>

                      </div>
                    </div>
                </li>

                <li class="notification">
                    <div class="media">
                      <div class="media-left">
                        <div class="media-object">
                          <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
                        </div>
                      </div>
                      <div class="media-body">
                        <strong class="notification-title"><a href="#">James Bond</a> resolved <a href="#">B-007 - Desolve Spectre organization</a></strong>

                        <div class="notification-meta">
                          <small class="timestamp">1. 9. 2015, 08:00</small>
                        </div>

                      </div>
                    </div>
                </li>
              <!-- </ul> -->
                            </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->

          <li class="active"><a href="#">My Account</a></li>
          <li><a href="<?php echo base_url(); ?>discussion" class="active">Discussion</a></li>
          <li><a href="<?php echo base_url(); ?>course" class="active">Course</a></li>
          <li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>         
          
        </ul>
      </div>
    </div>
  </nav>

<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">T-Learning</a>


    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="<?php echo base_url() ?>course">Course</a></li>
      <li><a href="<?php echo base_url() ?>discussion">Discussion</a></li>
      <li class="active"><a href="<?php echo base_url().$username_id; ?>">My Account</a></li>
    </ul>
 <!--    <button class="btn btn-danger navbar-btn">Button</button> -->
  <!-- </div>
</nav> -->


<div class="container">
<div class="row">
        <div class="col-md-9">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">

                                    <!-- <?php
                                      $subss_amount = '0';
                                        if (!empty($subs_amount)) {
                                          if(array_key_exists($user_info->id_user, $subs_amount)) {
                                          $subss_amount =  $subs_amount[$user_info->id_user];
                                          } 
                                        }
                                      if ($this->session->userdata('logged_id') == $user_info->id_user) {

                                       ?>
                                      
                                      
                                        <button class="btn btn-default btn-xs pull-right" style="margin-left: 25px;"><i class="fa fa-pencil"></i><a href="#" data-toggle="modal" data-target="#edituser"> Edit Account</a></button>
                                      
                                       <button class="btn btn-danger btn-xs pull-right"><a href="#" data-toggle="modal" data-target="" class="subs_false"><i class="fa fa-users"></i> Subscriber  <?php echo $subss_amount; ?></a></button>
                                       <?php }
                                       else { 
                                    
                                  
                                          $text = 'Subscribe';
                                          $subs = 'btn-danger'; #button class
                                          $a_subs ='subs_false' ; #a class
                                          $i_subs ='fa fa-plus'; #i class
                                        if (!empty($subscribed)) {
                                          if(in_array($user_info->id_user, $subscribed)) {
                                          $text = 'Disubscribe';
                                          $subs = 'btn-default'; #button class
                                          $a_subs ='subs_true' ; #a class
                                          $i_subs ='fa fa-users'; #i class
                                        }
                                      }
                                    
                                      ?>

                                    <button class="btn <?php echo $subs; ?> subs_in" id="<?php echo $user_info->id_user; ?>"><a href="#" data-toggle="modal" data-target="" class="<?php echo $a_subs; ?>"><i class="<?php echo $i_subs; ?>"></i> <?php echo $text; ?>  <?php echo $subss_amount; ?></a></button>
                                    <!-- <button class="btn btn-default"><a href="#" data-toggle="modal" data-target=""><i class="fa fa-users"></i> Disubscribe  1000</a></button> -->
                                  <?php } ?>

                                  <?php
                  $subss_amount = '0';
                    if (!empty($subs_amount)) {
                if(array_key_exists($user_info->id_user, $subs_amount)) {
                $subss_amount =  $subs_amount[$user_info->id_user];
                } 
              } 
                  if ($this->session->userdata('logged_id') == $user_info->id_user) {

                 ?>

                 <button class="btn btn-default btn-xs pull-right" style="margin-left: 25px;"><i class="fa fa-pencil"></i><a href="#" data-toggle="modal" data-target="#edituser"> Edit Account</a></button>

                 <button class="btn btn-danger btn-xs pull-right"><a href="#" data-toggle="modal" data-target="" class="subs_false"><i class="fa fa-users"></i> Subscriber  <?php echo $subss_amount; ?></a></button>
                 <?php }
                 else { 
              
            
                    $text = 'Subscribe';
                    $subs = 'btn-danger'; #button class
                    $a_subs ='subs_false' ; #a class
                    $i_subs ='fa fa-plus'; #i class
                  if (!empty($subscribed)) {
                    if(in_array($user_info->id_user, $subscribed)) {
                    $text = 'Disubscribe';
                    $subs = 'btn-default'; #button class
                    $a_subs ='subs_true' ; #a class
                    $i_subs ='fa fa-users'; #i class
                  }
                }
              
                  ?>

                  <button class="btn <?php echo $subs; ?> subs_in pull-right" id="<?php echo $user_info->id_user; ?>"><a href="#" data-toggle="modal" data-target="" class="<?php echo $a_subs; ?>"><i class="<?php echo $i_subs; ?>"></i> <?php echo $text; ?>  <?php echo $subss_amount; ?></a></button>
                  <!-- <button class="btn btn-default"><a href="#" data-toggle="modal" data-target=""><i class="fa fa-users"></i> Disubscribe  1000</a></button> -->
                <?php } ?>

                <?php 
                  if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>

                  <!-- Modal edit user -->
                    <div class="modal fade" id="edituser" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                      <!-- Modal content-->
                        <div class="modal-content news-w3l">
                            <div class="modal-header">
                              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
                              <h4> Edit Profile</h4>
                              <!--newsletter-->
                              <div class="login-main wthree">
                                 <form action="<?php echo base_url(); ?>myaccount/edit_user" method="post" enctype="multipart/form-data">
                                <input type="text" placeholder="Name" value="<?php echo $user_info->name ?>" name="name" class="form-control">
                                <input type="email" placeholder="Email" required="" name="email" value="<?php echo $user_info->email ?>" class="form-control">
                                <input type="text" name="username" placeholder="Username" value="<?php echo $user_info->username ?>" disabled class="form-control">
                                <input type="text" placeholder="City" name="city" value="<?php echo $user_info->city ?>" class="form-control">
                                <input type="text" name="bio" placeholder="Bio" value="<?php echo $user_info->bio ?>" class="form-control">
                                <input type="submit" value="Save" name="submit">
                                
                              </form>
                              </div>    
                            </div>
                          </div>
                        </div>
                       </div>
                      <div class="clearfix"></div>
                  <!-- //Modal edit user -->
                 <?php }
                 ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <?php 
                                  if ($this->session->userdata('logged_id') == $user_info->id_user) {
                                   ?>
                                   <form id="formfoto" class="" action ="<?php echo base_url();?>myaccount/editphoto" method="post" enctype="multipart/form-data">
                                      <div class="custom-input-file" id="previewavatar" style="background-image:url('<?php echo base_url() ?>assets/images/<?php echo $user_info->photo; ?>');border-radius: 50%; float: left; margin-left: 80px;">
                                          <label class="uploadPhoto">
                                              Edit
                                              <input type="file" id="filefoto" name="photoprofile" class="change-avatar changephoto">
                                          </label>
                                      </div>
                                   </form>
                                   <?php }
                                   else { ?>
                                  <div>
                                      <img src="<?php echo base_url() ?>assets/images/<?php echo $user_info->photo; ?>" alt="" class="img-responsive profile-photo" style="border-radius: 50%; float: left;" height="200px" width="200px" />
                                  </div>
                                      <?php } ?>
                            </div>
                            <div class="col-lg-7" id="cluster_info">
                                <dl class="dl-horizontal" style="margin-top: 25px;">

                                    <dt>Name:</dt> <dd><?php echo $user_info->name; ?></dd>
                                    <dt>Bio:</dt> <dd><?php echo $user_info->bio; ?></dd>
                                    <dt>Location:</dt> <dd><?php echo $user_info->city; ?></dd>
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                            <div class="panel blank-panel">
                            <div class="panel-heading">
                                <div class="panel-options">
                                    <ul class="nav nav-tabs">
                                        <li class=""><a href="#tab-1" data-toggle="tab" aria-expanded="false">My Course</a></li>
                                        <li class=""><a href="#tab-2" data-toggle="tab" aria-expanded="false">All Notifications</a></li>
                                        <li class="active"><a href="#tab-3" data-toggle="tab" aria-expanded="true">Last activity</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                            <div class="tab-content">
                            <div class="tab-pane" id="tab-1">
                              -coursenya-
                            </div>
                            <div class="tab-pane active" id="tab-2">
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-3">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Title</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                           Create project in webapp
                                        </td>
                                        <td>
                                           12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                        <p class="small">
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                        </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            Various versions
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            There are many variations
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            Latin words
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Latin words, combined with a handful of model sentence structures
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            The generated Lorem
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            The first line
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            The standard chunk
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                            Lorem Ipsum is that
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            Contrary to popular
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            </p>
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                            </div>

                            </div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="wrapper wrapper-content project-manager">
                <h4>Project description</h4>
                <p class="small">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                </p>
                <p class="small font-bold">
                    <span><i class="fa fa-circle text-warning"></i> High priority</span>
                </p>
                <h5>Project tag</h5>
                <ul class="tag-list" style="padding: 0">
                    <li><a href="#"><i class="fa fa-tag"></i> biword</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i> Lorem ipsum</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i> Passages</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i> Variations</a></li>
                </ul>
                <h5>Project files</h5>
                <ul class="list-unstyled project-files">
                    <li><a href="#"><i class="fa fa-file"></i> Project_document.docx</a></li>
                    <li><a href="#"><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                    <li><a href="#"><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                    <li><a href="#"><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                </ul>
                <div class="text-center m-t-md">
                    <a href="#" class="btn btn-xs btn-primary">Add files</a>
                    <a href="#" class="btn btn-xs btn-primary">Report contact</a>

                </div>
            </div>
        </div>
    </div>
</div>
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
<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script type="text/javascript">
	
</script>

<script type="text/javascript">
  <?php if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>
  document.getElementById("filefoto").onchange = function() {
        document.getElementById("formfoto").submit();
  }  
  <?php } ?>

  
  $('h6.thumb_in').click(function(event) {
    <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>
    var random_code = $(this).attr('id');
    // alert(random_code);
    $.ajax({
                    url: '<?php echo base_url(); ?>home/thumb_up',
                    type: 'post',
                    context: this,
                    data: {random_code : random_code},
                    success: function(e){
                          if(e == "false") {alert('Maaf, thumb_up anda gagal');}
                         
                         else  {
                          if($(this).hasClass('thumb_true')){
                          $(this).removeClass('thumb_true');
                          $(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+e);
                          }
                          else{
                          $(this).addClass('thumb_true');
                          $(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+e);
                          }
                    }
        }
                });
    <?php }
    else {
      ?>
       swal({
                       title: "Failed",
                       text: "Anda harus login terlebih dahulu",
                       timer: 1500,
                       showConfirmButton: false,
                       type: 'warning'
      });
      <?php
    } ?>
          
  });

  $('button.subs_in').click(function(event) {
    <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>
    var id_user = $(this).attr('id');
    // alert(id_user);
    $.ajax({
                    url: '<?php echo base_url(); ?>home/subs_up',
                    type: 'post',
                    context: this,
                    data: {id_user : id_user},
                    success: function(e){
                          if(e == "false") {alert('Maaf, subs_up anda gagal');}
                         
                         else  {
                          if($(this).hasClass('btn-default')){
                          $(this).removeClass('btn-default');
                          $(this).addClass('btn-danger');
                          
                          $(this).html('<a href="#" data-toggle="modal" data-target="" class="subs_false"><i class="fa fa-plus"></i> Subscribe  '+e+'</a>');
                          }
                          else{
                          $(this).removeClass('btn-danger');
                          $(this).addClass('btn-default');
                          
                          $(this).html('<a href="#" data-toggle="modal" data-target="" class="subs_true"><i class="fa fa-users"></i> Disubscribe  '+e+'</a>');
                          }
                    }
        }
                });
    <?php }
    else {
      ?>
       swal({
                       title: "Failed",
                       text: "Anda harus login terlebih dahulu",
                       timer: 1500,
                       showConfirmButton: false,
                       type: 'warning'
      });
      <?php
    } ?>
          
  });

</script>

</body>
</html>