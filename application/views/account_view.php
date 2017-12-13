<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

</head>
<body>
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
<div class="main-w3layouts" id="home">
	<!--top-bar-->
	<div class="top-search-bar">
		<div class="header-top-nav">
			<ul>
				<?php 
				if ($this->session->userdata('logged_in') == TRUE) {
					
				 ?>
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
								<input type="email" placeholder="Email" required="" name="email">
								<input type="password" placeholder="Password" name="password">
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
								<input type="text" placeholder="Name" name="name">
								<input type="email" placeholder="Email" required="" name="email">
								<input type="text" name="username" placeholder="Username">
								<input type="password" placeholder="Password" name="password">
								<input type="text" placeholder="City" name="city">
								<input type="text" name="bio" placeholder="Bio">
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
								<li><a href="<?php echo base_url(); ?>home" class="hvr-underline-from-center active">Home</a></li>
								<li><a href="<?php echo base_url(); ?>course" class="hvr-underline-from-center active">Courses</a></li>
								<li><a href="<?php echo base_url(); ?>qna" class="hvr-underline-from-center active">QnA</a></li>
								<!-- <li><a href="#gallery" class="hvr-underline-from-center scroll">Gdjvb</a></li>
								<li><a href="#team" class="hvr-underline-from-center scroll">Our Team</a></li>
								<li><a href="#events" class="hvr-underline-from-center scroll">Events</a></li> -->
								<li><a href="<?php echo base_url(); ?>myaccount" class="hvr-underline-from-center active">MyAccount</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
				</nav>
			</div>
	<!-- //navigation -->


							<!-- <div class="timeline-nav-bar hidden-sm hidden-xs">
					            <div class="row">
					              <div class="col-md-3">
					                <div class="profile-info">
					                  <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
					                  <h3><?php echo $user_data->name ?></h3>
					                  <p class="text-muted"><?php echo $user_data->interest ?></p>
					                </div>
					              </div>
					              <div class="col-md-9">
					                <ul class="list-inline profile-menu"> -->

					                  <!-- <li><a href="<?php echo base_url() ?>MyAccount" <?php if($active == 'timeline'){echo 'class="active"';} ?> >Timeline</a></li>
					                  <li><a href="<?php echo base_url() ?>MyAccount/About" <?php if($active == 'about'){echo 'class="active"';} ?>>About</a></li> -->
					                  <!-- <li><a href="<?php echo base_url() ?>MyAccount/#">Album</a></li> -->

					                  <!-- <li><a href="<?php echo base_url() ?>MyAccount/Following" <?php if($active == 'following'){echo 'class="active"';} ?>>Following</a></li>
					                  <li><a href="<?php echo base_url() ?>MyAccount/Follower" <?php if($active == 'follower'){echo 'class="active"';} ?>>Follower</a></li>
					                </ul>
					                <ul class="follow-me list-inline">
					                  <li>1,299 people following you</li>
					                  <li><a href="<?php echo base_url() ?>MyAccount/#"><button class="btn-primary">Edit Account</button></a></li>
					                </ul>
					              </div>
					            </div>
					          </div> -->


	<div class="" style="background:rgba(0, 0, 0, 0.51);">
				<div class="callbacks_container">
					<ul class="rslides" id="">
						<li>
						
							<div class="slider-info" style="background:rgba(0, 0, 0, 0);">

								<div>
						          <img src="http://placehold.it/200x200" alt="" class="img-responsive profile-photo" style="border-radius: 50%; float: left;" />
						      	</div>

								<div>
									<h3><?php echo $user_info->name; ?></h3>
									<h4><?php echo $user_info->bio; ?></h4>
									<h4><?php echo $user_info->city; ?></h4>
									<br/> <br/> <br/>
									<button class="btn btn-default"><a href="#" data-toggle="modal" data-target="#edituser"><i class="fa fa-pencil"></i>Edit Account</a></button>
									<button class="btn btn-default"><a href="#" data-toggle="modal" data-target=""><i class="fa fa-plus"></i>Follow</a></button>
								</div>
								
							</div>

							
						</li>
							
					</ul>
				</div>
				<div class="clearfix"></div>

		<!-- //Slider -->
	</div>


	<!-- Modal99 -->
		<div class="modal fade" id="edituser" tabindex="-1" role="dialog" >
			<div class="modal-dialog" role="document">
			<!-- Modal content-->
				<div class="modal-content news-w3l">
						<div class="modal-header">
							<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
							<h4>Edit Profile</h4>
							<!--newsletter-->
							<div class="login-main wthree">
							   <form action="<?php echo base_url(); ?>myaccount/edit_user" method="post" enctype="multipart/form-data">
								<input type="text" placeholder="Name" value="<?php echo $user_info->name ?>" name="name">
								<input type="email" placeholder="Email" required="" name="email" value="<?php echo $user_info->email ?>">
								<input type="text" name="username" placeholder="Username" value="<?php echo $user_info->username ?>" disabled>
								<input type="text" placeholder="City" name="city" value="<?php echo $user_info->city ?>">
								<input type="text" name="bio" placeholder="Bio" value="<?php echo $user_info->bio ?>">
								<input type="submit" value="Save" name="submit">
								
							</form>
							</div>		
						</div>
					</div>
				</div>
			 </div>
			<div class="clearfix"></div>
	<!-- //Modal99 -->

</div>
<!--main-content-->

<!-- <div class="timeline-nav-bar hidden-sm hidden-xs">
	    <div class="row">
	      <div class="col-md-3">
	        
	      </div>
	      
	    </div>
	  </div> -->


<!-- post courses -->
<div class="event" id="events">
	<div class="container">
		<?php
		$notif = $this->session->flashdata('notif');
		 if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
      	  } ?>
	<div class="btn-group">
		<a class="btn btn-danger" data-toggle="modal" data-target="#modalpost"><i class="fa fa-plus"></i> </a>
		<a class="btn btn-danger" data-toggle="modal" data-target="#modalpost">Add Course </a>
	</div>

	<div class="modal fade" id="modalpost" tabindex="-1" role="dialog" >
		<div class="modal-dialog" role="document">
			<!-- Modal content-->
			<div class="modal-content news-w3l">
				<div class="modal-header">
							<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
							<h4>Add New Course</h4>
							<!--newsletter-->
							<div class="login-main wthree">
							 <form action="<?php echo base_url(); ?>myaccount/newcourse_title" method="post" enctype="multipart/form-data">
								Course Name 
								<input type="text" name="coursename" style="border-bottom:none" class="form-control" >
								Subject 
								<select class="form-control" name="subject">
                                <option value="">All</option>
                                <?php 
                                foreach ($list_subject as $sbj) {
                                 ?>
                                    <option value="<?php echo $sbj->value ?>"><?php echo $sbj->text ?></option>
                                <?php 
                            
                            } ?>
                                </select>
                                Description
                                <textarea name="description" class="form-control"> </textarea>
                                
							<!-- <label for="file-upload" class="custom-file-upload ">
    						<span class="glyphicon glyphicon-upload"></span>  Upload Thumbnail
							</label> -->
								<br/>
								Choose Thumbnail
								<input id="file-upload" name="thumbnail" type="file" class="form-control"/>
							
								<input type="submit" name="submit" value="Create Now">
							</form>
							</div>
						<!--//newsletter-->			
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
		<div class="row">
<div class="col-md-6">



        <div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" id="formcourses" method="get" action="<?php echo base_url() ?>myaccount" role="search">
                <div class="input-group">
                                                                                                
                    <input type="text" id="title" name="title" class="form-control" value="<?php if(!empty($title)) { echo $title; } ?>">
                
                    <div class="input-group-btn">
                        <input type="submit"  class="btn btn-search btn-danger" value="Search" id="searchcourses">
                        <!-- <button type="button" class="btn btn-search btn-danger" id="searchcourses">
                            <span class="glyphicon glyphicon-search"></span>
                            <span class="label-icon">Search</span>
                        </button> -->
                        <!-- <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button> -->
                        <select class="form-control" name="subject">
                                <option value="">All</option>
                                <?php 
                                foreach ($list_subject as $sbj) {
                                 if ($sbj->value == $subject) {
                                    
                                 ?>
                                 <option value="<?php echo $sbj->value ?>" selected="selected"><?php echo $sbj->text ?></option>
                                 <?php }
                                 else { ?>
                                    <option value="<?php echo $sbj->value ?>"><?php echo $sbj->text ?></option>
                                <?php 
                            }
                            } ?>
                                </select>
                      <!--   <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="label-icon">Mathematic</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">BHS INDONESIA</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">dummy</span>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">dummy</span>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">dummy</span>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">dummy</span>
                                </a>
                            </li>

                             <li>
                                <a href="#">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="label-icon">dummy</span>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>  
            </form>   
         
        </div>
</div>
</div>

		<h3 style="text-align: left;">My Courses</h3>
		
		<?php 
        if (!empty($list_courses)) {
        foreach ($list_courses as $courses) {
			
		 ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#myModal5"><img src="<?php echo base_url() ?>assets/images/<?php echo $courses->thumbnail ?>" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#myModal5"><?php echo $courses->title ?></a></h4>
				<?php 
					if(array_key_exists($courses->id_user, $username)) {
					$usrnm =  $username[$courses->id_user];
				}?>
				<h6>By  <a href="<?php echo base_url() ?><?php echo $usrnm ?>">
					<?php echo $usrnm ?>
				</a>, <?php echo $courses->created_at ?></h6>
				<p><?php echo $courses->description ?></p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i>17</h6>
					<h6><i class="fa fa-heart-o" aria-hidden="true"></i>78</h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="<?php echo base_url(); ?>index.php/lesson"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<?php 
    }
    } else{ ?>
		  <div id="about" class="about">
    <div class="container">
            <h1> <span>Sorry!</span></h1>
            <h2>Not Found. Try Again</h2>
    </div>
</div>
        <?php } ?>
		
	</div>
</div>

						<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Educational</h4>
											<img src="<?php echo base_url() ?>assets/images/e2.jpg" alt="blog-image" />
											<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->
						<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Educational</h4>
											<img src="<?php echo base_url() ?>assets/images/e1.jpg" alt="blog-image" />
											<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
									</div>
								</div>
						
							</div>
				       </div>

					   <!-- //Modal1 -->
						<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Educational</h4>
											<img src="<?php echo base_url() ?>assets/images/e3.jpg" alt="blog-image" />
											<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->

<!-- //post courses -->


<!--tidak ada course-->
<!-- <div id="about" class="about">
	<div class="container">
			<h1> <span>Wohoo!</span></h1>
			<h2>No course to preview.</h2>
	</div>
</div> -->
	
	<div class="clearfix"></div>
<!--//tidak ada course-->


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
					<li><a href="<?php echo base_url(); ?>home" class="active">Home</a></li>
					<li><a href="<?php echo base_url(); ?>course" class="active">Course</a></li>
					<li><a href="#services" class="scroll">QnA</a></li>
					<li><a href="#gallery" class="scroll">My Account</a></li>
				</ul>
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>Address</h4>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
				</ul>
			</div> -->
			
			<!-- <div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2017 Educational. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts.</a></p>
			</div> -->
		<!-- </div>
	</div> -->

<!-- //footer -->



<!--disini-->

<!-- js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>


<script src="<?php echo base_url(); ?>assets/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chocolat.css" type="text/css" media="screen">
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

	

</body>
</html>