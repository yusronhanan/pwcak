<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
<style type="text/css">
h6.thumb_true {
	background: #d95459;
	color:#fff;
}
.hvr:hover{
	background: #E0E0E0;
	color: b
}
</style>
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
                    	 	$('span#amountnotif').addClass('hidden');
                    	 }
                  else{
                    	 		$('span#amountnotif').removeClass('hidden');	
                    	 }
    			$('span#amountnotif').html(data[1]);
    		}
    	});
        }
    window.onload = mini_notif;
</script>

</head>
<body>
<div class="main-w3layouts" id="home">
	<!--top-bar-->
	<div class="top-search-bar">
		<div class="header-top-nav">
		<div class="drop-men">

			<ul class=" nav_1">
				<?php 
				if ($this->session->userdata('logged_in') == TRUE) {
					
				 ?>

				 <li class="dropdown at-drop ">
		              <a href="#" id="notifc" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i>NOTIF<span class="badge" id="amountnotif"></span></a>
		              <ul class="dropdown-menu menu1" id="mininotif" role="menu" style="min-width: 100px;max-height: 300px;overflow-y: scroll; text-align: -webkit-match-parent;">
		                
		                <!-- <li><a href="<?php echo base_url(); ?>notif" class="view" style="margin-left: 40px">View all messages</a></li> -->
		              </ul>
		              <!-- <ul class="hvr" style="padding: 10px; text-align: center;">
		                <li><div><a href="<?php echo base_url(); ?>notif" class="view" style="margin: 25px; text-align: center; color: black;">View all notifications</a></div></li>
		               </ul> -->
		            </li>

				<li><a href="<?php echo base_url() ?>auth/logout" ><i class="fa fa-close" aria-hidden="true"></i>LOGOUT</a></li>
				<?php 
				}
				else { ?>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>LOGIN</a></li>
				<li><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>REGISTER</a></li>
				
				<?php } ?>
			</ul>
			</div>
		</div>
	</div>
	<!-- Modal1 -->

	<!-- //Modal1 -->
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
				<!-- <div class="search">
						<form action="#" method="post">
							<input type="search" placeholder="Search Here..." required="" />
							<input type="submit" value=" ">
						</form>
				</div>
					<div class="clearfix"></div> -->
	<!--//top-bar-->
	<!-- navigation -->
			<div class ="top-nav">
				<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo base_url(); ?>" class="hvr-underline-from-center active">Home</a></li>
								<li><a href="<?php echo base_url(); ?>course" class="hvr-underline-from-center active">Courses</a></li>
								<li><a href="<?php echo base_url(); ?>discussion" class="hvr-underline-from-center active">Discussion</a></li>
								<!-- <li><a href="#gallery" class="hvr-underline-from-center scroll">Gdjvb</a></li>
								<li><a href="#team" class="hvr-underline-from-center scroll">Our Team</a></li>
								<li><a href="#events" class="hvr-underline-from-center scroll">Events</a></li> -->
								<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
								<li><a href="<?php echo base_url().$username_id; ?>" class="hvr-underline-from-center active">MyAccount</a>
									</li>
								<?php if ($this->session->userdata('role') == '1') { ?>
								<li><a href="<?php echo base_url() ?>admin" class="hvr-underline-from-center active">Admin</a>
									</li>
								<?php } } ?>
								
								
							</ul>
						</div>
						<div class="clearfix"> </div>	
				</nav>
			</div>

			
	<!-- //navigation -->

	<?php $this->load->view($main_view); ?>

	<!-- footer -->
	<!-- <div class="footer" id="footer">
		<div class="container">
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>About Us</h4>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
					fugiat nulla pariatur. <span>Excepteur sint occaecat cupidatat non proident 
					sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			</div>
			<div class="col-md-4 agileinfo_footer_grid mid-w3l nav2">
				<h4>Options</h4>
				<ul>
					<li><a href="#home" class="scroll">Home</a></li>
					<li><a href="#about" class="scroll">About Us</a></li>
					<li><a href="#services" class="scroll">Services</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
					<li><a href="#team" class="scroll">Team</a></li>
					<li><a href="#events" class="scroll">Events</a></li>
					<li><a href="#testimonials" class="scroll">Testimonials</a></li>
				</ul>
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>Address</h4>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2017 Educational. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts.</a></p>
			</div>
		</div>
	</div> -->

<!-- //footer -->


<!-- js -->
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
	$('h6.thumb_in').click(function(event) {
		<?php	if ($this->session->userdata('logged_in') == TRUE) {  ?>
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
</script>
	<script type="text/javascript">
		$(document).ready(function(){

		$('a#notifc').click(function(event) {
  		 	var mini_notif = 'notification_null';
                    	 // $('#amountNotifikasi').html('');

        		
        	 	$.ajax({
                    url: '<?php echo base_url(); ?>home/mini_notif',
                    type: 'post',
                    data: {mini_notif : mini_notif},
                    success: function(e){
                    	 if (e == '0') {
                    	 	$('span#amountnotif').addClass('hidden');
                    	 }
                  		else{
                    	 		$('span#amountnotif').removeClass('hidden');	
                    	 }
                    	 $('span#amountnotif').html(e);

                    	 
                    }
                });
        	 				
        	});
		});
		setInterval(function(){ mini_notif() }, 3000);

	</script>
	
	
</body>
<!-- </div>
</body> -->
</html>