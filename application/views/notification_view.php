
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
                    <tbody>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Yusron Hanan</h6>
                                <p>Started following you</p>
                            </td>
                            <td class="march">
                               24 Des 17 
                            </td>
                          
                             <td >
                             <i class="fa fa-plus-square-o icon-state-warning"></i>
                                
                            </td>
                        </tr>
                       <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in1.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Uyab</h6>
                                <p>Giving thanks</p>
                            </td>
                            <td class="march">
                                23 Des 17
                            </td>
                          
                             <td >
                               <i class="fa fa-user icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in2.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Qori</h6>
                                <p>Giving comment</p>
                                <div style="height: 50px;width: 425px;border: 1px solid #BDBDBD;border-radius: 4px;margin-top: 5px">
                                <b> @karin </b> leave a comment <br/>
                                   "This course is really helpful:)"
                                </div>
                            </td>
                            <td class="march">
                                21 Des 17
                            </td>
                          
                             <td >
                               <i class="fa  fa-comment-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in3.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Karin</h6>
                                <p>Started following you</p>
                            </td>
                            <td class="march">
                              18 Des 17 
                            </td>
                          
                             <td >
                               <i class="fa fa-plus-square-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in4.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lily</h6>
                                <p>Giving comment</p>
                                <div style="height: 50px;width: 425px;border: 1px solid #E0E0E0;border-radius: 4px;margin-top: 5px">
                                   
                                </div>
                            </td>
                            <td class="march">
                                in 4 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in5.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                                in 3 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in6.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                               in 2 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in7.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in8.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in9.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in10.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="<?php echo base_url(); ?>assets/lesson/images/in11.jpg" alt="" />
                            </td>
                            <td class="table-text">
                                <h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                    </tbody>
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

