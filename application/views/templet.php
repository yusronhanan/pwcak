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
    <title>T-Learning</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/icon logo.png" />
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

    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">

    <style type="text/css">
    	body{margin-top:20px;
      /*background:#eee*/;
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
      a.go_link{
        color: #d95459;
      }
      .subsss{
        color:#d9534f;
      }

      </style>
      <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>
      <script type="text/javascript">
        function mini_notif() {
                var mini_notif = 'mini_notif';
          
                  $.ajax({
              url:"<?php echo base_url(); ?>home/mini_notif",
              method:"POST",
              data:{mini_notif:mini_notif},
              // dataType:"json",
              success:function(e){
                var data = e.split("|");
                // alert(data);
                $('ul#mininotif').html(data[0]);
                  if (data[1] == '0') {
                     $('i#count_notif').attr('data-count','0');
                     $('i#count_notif').removeClass('notification-icon');
                     $('h3#h_notif').html('Notifications (0)');
                   }
                  else{
                      $('i#count_notif').attr('data-count',data[1]);
                      $('i#count_notif').addClass('notification-icon');
                      $('h3#h_notif').html('Notifications ('+data[1]+')');
                   }
                
              }
            });
              }
          window.onload = mini_notif;
      </script>
      <?php } ?>
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
        <div style="margin-left: 875px; margin-top: 20px; font-size: 16px;">

        <a href="<?php echo base_url() ?>auth/logout" ><i class="fa fa-close" aria-hidden="true"></i>LOGOUT</a>

        <a href="#" style="margin-right: 25px;" data-toggle="modal" data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>Login</a>
        <a href="#" data-toggle="modal" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>Register</a>
       
       </div>

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
                <input type="text" placeholder="Name" name="name" class="form-control" required minlength="4">
                <input type="email" placeholder="Email" required name="email" class="form-control">
                <input type="text" name="username" placeholder="Username" class="form-control" required minlength="6">
                <input type="password" placeholder="Password" name="password" class="form-control" required minlength="8">
                <input type="text" placeholder="City" name="city" class="form-control" required minlength="5">
                <input type="text" name="bio" placeholder="Bio" class="form-control" required minlength="10">
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
            <a class="navbar-brand" href="<?php echo base_url();?>home"><img class="icon_cuy" src="<?php echo base_url();?>assets/images/icon logo.png" alt="icon" name="icon" style="width: 45px;height: auto;"></a>
          </div>


      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right" style="width: 800px">

        

          <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="0" class="<?php if ($this->session->userdata('logged_in') == TRUE) {
                echo 'glyphicon glyphicon-user';
                }
                else {
                  echo 'glyphicon glyphicon-log-in';
                  } ?>"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright" style="width: 100px">

              <ul class="dropdown-menu">
                <?php 
        if ($this->session->userdata('logged_in') == TRUE) {
          
         ?>
                <li class="notification">
                  <a href="<?php echo base_url().$this->session->userdata('username'); ?>" class="">
                    <strong class="notification-title"><i class="fa fa-user" aria-hidden="true"></i>My Account</strong></a>
                    <a href="<?php echo base_url() ?>auth/logout"><div class="media">
                        <strong class="notification-title"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</strong>
                    </div></a>
                </li>
                <?php 
                }
                else { ?>
                <li class="notification">
                    <a data-toggle="modal" data-target="#myModal3"><div class="media">
       
                        <strong class="notification-title"><i class="fa fa-key" aria-hidden="true"></i>Login</strong>
                    </div></a>
                </li>
                <li class="notification">
                    <a data-toggle="modal" data-target="#myModal4"><div class="media">
       
                        <strong class="notification-title"><i class="fa fa-lock" aria-hidden="true"></i>Register</strong>
                    </div> </a>
                </li>
                <?php } ?>

              </ul>



            </div>
          </li> <!-- /dropdown -->

          <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
          <li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
              <!-- class notification-icon di <i> -->
              <i data-count="0" id="count_notif" class="glyphicon glyphicon-bell"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#" id="notifc">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title" id="h_notif">Notifications (0)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu" id="mininotif">
                  <!-- <ul class="notifications"> -->
                
              <!-- </ul> -->
            </ul>

              <div class="dropdown-footer text-center">
                <a href="<?php echo base_url().$this->session->userdata('username'); ?>">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->
          <?php } ?>


          <!-- <?php if ($this->session->userdata('role') == '1') { ?>
          <li><a href="<?php echo base_url() ?>admin" class="active">Admin</a></li>
                <?php } ?> -->
          <li><a href="<?php echo base_url(); ?>discussion" class="active">Discussion</a></li>
          <li><a href="<?php echo base_url(); ?>course" class="active">Course</a></li>
          <li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>         
          
        </ul>
      </div>
    </div>
  </nav>

    
  <script src="<?php echo base_url(); ?>assets/js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <!--light-box-files -->
    <script>
    $(function() {
      $('.gallery-grid a').Chocolat();
    });
    </script>
 <!-- required-js-files-->
    
              <link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet">
                  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
                      <script>
                  $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                      items : 1,
                      lazyLoad : true,
                      autoPlay : true,
                      navigation : false,
                      navigationText :  false,
                      pagination : true,
                    });
                  });
                  </script>
                 <!--//required-js-files-->

<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
          $("#slider").responsiveSlides({
            auto: true,
            pager:false,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
          });
        });
      </script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */                
      $().UItoTop({ easingType: 'easeOutQuart' });
      });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


  <?php $this->load->view($main_view); ?>

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


  $('h6.thumb_in').on('click', thumb_in);
  function thumb_in(){
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
          
  }


</script>
<script type="text/javascript">
    $(document).ready(function(){

    $('a#notifc').click(function(event) {
        var mini_notif = 'notification_null';
            
            $.ajax({
                    url: '<?php echo base_url(); ?>home/mini_notif',
                    type: 'post',
                    data: {mini_notif : mini_notif},
                    success: function(e){
                       if (e == 0) {
                         $('i#count_notif').attr('data-count',"0");
                         $('i#count_notif').removeClass('notification-icon');
                        $('h3#h_notif').html('Notifications (0)');
                       }
                      else{
                          $('i#count_notif').attr('data-count',e);
                          $('i#count_notif').addClass('notification-icon');
                          $('h3#h_notif').html('Notifications ('+e+')');
                       }
                    }
                });
                  
          });
    });
    setInterval(function(){ mini_notif() }, 3000);

  </script>
  <div class="modal fade" id="lesson" tabindex="-1" role="dialog" >
              <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 id="title_lesson"></h4>
                      <p>by :<a href="" id="username_lesson"><i id="name_lesson"></i></a></p>
                      <img src="images/e2.jpg" id="img_lesson" alt="lesson" width="350px" height="350px" />
                      <span id="desc_lesson"></span>
                      <br>
                      <div class="eve-w3lright e1">
                <a href="" id="go_lesson"><button class="btn btn-danger pull-right">Enroll</button></a>
                    </div>
                  </div>

                </div>
            
              </div>
               </div>
<script type="text/javascript">
      $("a.lesson_view").click(function(event) {
              var random_code = $(this).attr('id');
              if (random_code != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>course/getlesson",
                      type: 'post',
                      data: {
                          random_code: random_code
                      },
                      success: function(e) {
                          var data = e.split("|");
                          $('#title_lesson').html(data[0]);
                          $('#img_lesson').attr('src','<?php echo base_url() ?>assets/images/'+data[1]);
                          $('#desc_lesson').html(data[2]);
                          $('#name_lesson').html(data[3]);
                          $('#username_lesson').attr('href','<?php echo base_url() ?>'+data[4]);
                          $('#go_lesson').attr('href','<?php echo base_url() ?>lesson/'+random_code);
                          $('#go_lesson').children().html(data[5]);
                      }
                  });
              }
          });
</script>
</body>
</html>
