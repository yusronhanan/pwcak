
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>

<!-- css files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
<!-- //online-fonts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/lesson/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/lesson/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/lesson/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.min.js"> </script>
<script src="<?php echo base_url(); ?>assets/lesson/js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url(); ?>assets/lesson/css/custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/lesson/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/lesson/js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
            

            
        });
        </script>
    <style>
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
    </style>
</head>
<body>
<div id="wrapper">
<div class="top-search-bar">
    <div class="header-top-nav">
        <div class="drop-men">

            <ul class=" nav_1">
                <?php 
                if ($this->session->userdata('logged_in') == TRUE) {
                    
                 ?>
                <li><a href="<?php echo base_url() ?>auth/logout" style="margin-right: 250px"><i class="fa fa-close" aria-hidden="true"></i>LOGOUT</a></li>
                <?php 
                }
                else { ?>
                
                <!-- link 404 not found -->
                
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
       <!----->
        
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->

    <!--grid-->
     <div class="inbox-mail">

<!-- tab content -->
<div class="col-md-12 tab-content tab-content-in" style="background-color: #EEEEEE">
<div class="tab-pane active text-style" id="tab1">
  <div class="col-md-3">
    <div style="text-align: right; padding-right: 25px; padding-top: 55px">
            <button class="btn btn-danger"><i class="fa fa-home"></i> <a href="<?php echo base_url();?>" style="color: white"> HOME</a> </button> 
    </div> 
  </div>
  <div class="inbox-right col-md-6">
            
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
                 <div class="float-left">
                   <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;margin-top: 30px">
                                
                                <h3> All Notifications</h3>
                            </div>
                    
                    
                </div>
                
               </div>
                <table class="table">

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
                </table>
               </div>
            </div>
            <div class="col-md-3"> </div>
</div>

</div>
<div class="clearfix"> </div>
   </div>
    
</div>

        <div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
    <script src="<?php echo base_url(); ?>assets/lesson/js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/lesson/js/scripts.js"></script>
    <!--//scrolling js-->


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>


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
</script>
<!-- start-smoth-scrolling -->

    <!-- bottom-top -->
    <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function() {
            /*
                var defaults = {
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
    <!-- //smooth scrolling -->
    <!--// bottom-top -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-3.1.1.min.js"></script>

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


    
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("button#load_infinite").on('click', load_infinite);
    });
        $(window).on("scroll", function() {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
        // alert('aaa');
        load_infinite();
    }
});
    </script>


</body>
</html>

