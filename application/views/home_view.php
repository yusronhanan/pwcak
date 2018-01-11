<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/testimoni/css/flexslider.css" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 

<style>
.demo{ background: #f8f8f8; }
.testimonial{
    margin: 0 20px 40px;
}
.testimonial .testimonial-content{
    padding: 35px 25px 35px 50px;
    margin-bottom: 35px;
    background: #fff;
    border: 1px solid #f0f0f0;
    position: relative;
}
.testimonial .testimonial-content:after{
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    background: #fff;
    position: absolute;
    bottom: -10px;
    left: 22px;
    transform: rotate(45deg);
}
.testimonial-content .testimonial-icon{
    width: 50px;
    height: 45px;
    background: #ff4242;
    text-align: center;
    font-size: 22px;
    color: #fff;
    line-height: 42px;
    position: absolute;
    top: 37px;
    left: -19px;
}
.testimonial-content .testimonial-icon:before{
    content: "";
    border-bottom: 16px solid #e41212;
    border-left: 18px solid transparent;
    position: absolute;
    top: -16px;
    left: 1px;
}
.testimonial .description{
    font-size: 15px;
    font-style: italic;
    color: #8a8a8a;
    line-height: 23px;
    margin: 0;
}
.testimonial .title{
    display: block;
    font-size: 18px;
    font-weight: 700;
    color: #525252;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin: 0 0 5px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #ff4242;
}
.owl-theme .owl-controls{
    margin-top: 20px;
}
.owl-theme .owl-controls .owl-page span{
    background: #ccc;
    opacity: 1;
    transition: all 0.4s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #ff4242;
}

</style>


	<div class="header">
		<!-- Slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
						
							<div class="slider-info">
								<p>wisdom begins with wonder.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Education is a vaccine for violence.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>wisdom begins with wonder.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Learning never exhausts the mind.</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>wisdom begins with wonder.</h6>
							</div>
						</li>
							
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		<!-- //Slider -->
	</div>

<!--main-content-->


<!-- Popular courses -->
<div class="event" id="events">
	<div class="container">
		<h3>Popular Courses</h3>
		<?php foreach ($list_pcourses as $pcourses) {
			
		 ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $pcourses->random_code ?>"><img src="<?php echo base_url() ?>assets/images/<?php echo $pcourses->thumbnail ?>" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $pcourses->random_code ?>"><?php echo $pcourses->title ?></a></h4>
				<?php 
					if(array_key_exists($pcourses->id_user, $username)) {
					$usrnm =  $username[$pcourses->id_user];
				}?>
				<h6>By  <a href="<?php echo base_url() ?><?php echo $usrnm ?>">
					<?php echo $usrnm ?>
				</a>, <?php echo $pcourses->created_at ?></h6>
				<p><?php echo substr($pcourses->description, 0,105) ?>...</p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<?php 
					if(array_key_exists($pcourses->id_title, $comment_amount)) {
					$comments =  $comment_amount[$pcourses->id_title];
					}
					 ?>
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i><?php echo $comments; ?></h6>
					<?php 
					if(array_key_exists($pcourses->id_title, $like_amount)) {
					$likes =  $like_amount[$pcourses->id_title];
					}
					$thumb = '';
					if (!empty($liked)) {
						if(in_array($pcourses->id_title, $liked)) {
						$thumb = 'thumb_true';
					}
					}
					?>
					<h6 id="<?php echo $pcourses->random_code ?>" class="thumb_in <?php echo $thumb ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo $likes; ?></h6>
				</div>
				<div class="eve-w3lright e1">
					<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $pcourses->random_code ?>"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<?php } ?>
		
	</div>
</div>

					   <!-- //Modal1 -->

<!-- //popular courses -->

<!-- Our Feature -->
<div id="about" class="about">
	<div class="container">
			<h1>Our <span>Features</span></h1>
			<div class="specialty-grids-top">
				<div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-education a1" aria-hidden="true"></span>
					</figure>
					<h5>Enroll</h5> <p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-home a2" aria-hidden="true"></span>
					</figure>
					<h5>Subscribe</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						 <span class="glyphicon glyphicon-leaf a3" aria-hidden="true"></span>						
					</figure>
					<h5>Disscussion</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>	
<!--//Our Feature-->


<!-- testii start -->

<div class="event" id="events">
<!-- <div class="demo"> -->
    <div class="container">
    		<h3 class="title">Testimonials</h3>
    	<p></p>
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
 
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
 
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>

                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
</div>


<!-- testii end -->



<!-- editor picks -->
<div class="event" id="events">
	<div class="container">
		<h3>EDITOR PICKS COURSES</h3>
		<?php foreach ($list_vcourses as $rcourses) {
			
		 ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $rcourses->random_code ?>"><img src="<?php echo base_url() ?>assets/images/<?php echo $rcourses->thumbnail ?>" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $rcourses->random_code ?>"><?php echo $rcourses->title ?></a></h4>
				<?php 
					if(array_key_exists($rcourses->id_user, $username)) {
					$usrnm =  $username[$rcourses->id_user];
				}?>
				<h6>By  <a href="<?php echo base_url() ?><?php echo $usrnm ?>">
					<?php echo $usrnm ?>
				</a>, <?php echo $rcourses->created_at ?></h6>
				<p><?php echo substr($rcourses->description, 0,105) ?>...</p>
			</div>

			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<?php 
					if(array_key_exists($rcourses->id_title, $comment_amount)) {
					$comments =  $comment_amount[$rcourses->id_title];
					}
					 ?>
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i><?php echo $comments; ?></h6>
					 <?php 
					if(array_key_exists($rcourses->id_title, $like_amount)) {
					$likes =  $like_amount[$rcourses->id_title];
					}
					$thumb = '';
					if (!empty($liked)) {
						if(in_array($rcourses->id_title, $liked)) {
						$thumb = 'thumb_true';
					}
					}
					?>
					<h6 id="<?php echo $rcourses->random_code ?>" class="thumb_in <?php echo $thumb ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo $likes; ?></h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $rcourses->random_code ?>"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<?php } ?>
		</div>
	</div>
<!-- editor picks-->


<!-- gallery -->
	<div class="portfolio" id="gallery" style="margin-top: 0px;">
		<h3> Editor Picks Courses</h3>
			
			<div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
			 
				<div class="col-md-4 grid slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal1"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g1.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4>Educational</h4>
								<p> Education is not a problem. Education is an opportunity.</p>
							</figcaption>
						</a>						
					</figure>
				</div>
				<div class="col-md-4 grid slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal2"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g2.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4>Educational</h4>
								<p> Education is not a problem. Education is an opportunity.</p>							
							</figcaption>	
							</a>						
					</figure>
				</div>
				<div class="col-md-4 grid slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal3"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g3.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4>Educational</h4>
								<p> Education is not a problem. Education is an opportunity.</p>							
							</figcaption>
						</a>						
					</figure>
				</div>
				
				<div class="clearfix"></div>
			 </div>
			<div class="portfolio-top wow fadeInUp animated" data-wow-delay=".5s">
				<div class="col-md-3 grid grid-wi slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal4"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g4.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4 class="effcet-text"> Educational</h4>
								<p> Learning is never done without errors and defeat.</p>							
							</figcaption>	
						</a>						
					</figure>
				</div>
				<div class="col-md-3 grid grid-wi slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal5"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g5.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4 class="effcet-text"> Educational</h4>
								<p>Learning is never done without errors and defeat.</p>							
							</figcaption>
							</a>						
					</figure>
				</div>
				<div class="col-md-3 grid grid-wi slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal6"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g6.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4 class="effcet-text">Educational</h4>
								<p>Learning is never done without errors and defeat.</p>							
							</figcaption>
						</a>						
					</figure>
				</div>
				<div class="col-md-3 grid grid-wi slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal7"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g7.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4 class="effcet-text"> Educational</h4>
								<p> Learning is never done without errors and defeat.</p>							
							</figcaption>
						</a>						
					</figure>
				</div>
				<div class="clearfix"></div>
			 </div>
		</div>
	<!-- Portfolio Modals -->
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">
			
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
							
	                        <img src="<?php echo base_url(); ?>assets/images/g1.jpg" class="img-responsive" alt="">
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	           
	        </div>
	    </div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">
	         
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
	                      
	                        <img src="<?php echo base_url(); ?>assets/images/g2.jpg" class="img-responsive" alt="">
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	           
	        </div>
	    </div>
	    </div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">
	           
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
	                     
	                        <img src="<?php echo base_url(); ?>assets/images/g3.jpg" class="img-responsive" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	            </div>
	       
	    </div>
	</div>
<<<<<<< HEAD
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">
				
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
	                       
	                        <img src="<?php echo base_url(); ?>assets/images/g4.jpg" class="img-responsive" alt="">
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	            
	        </div>
	    </div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">

	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
	                       
	                        <img src="<?php echo base_url(); ?>assets/images/g5.jpg" class="img-responsive" alt="">
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	           
	        </div>
	    </div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">
	           
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
	                       
	                        <img src="<?php echo base_url(); ?>assets/images/g6.jpg" class="img-responsive" alt="">
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	            </div>
	        
	    </div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	        <div class="close-modal" data-dismiss="modal">
	            <div class="lr">
	                <div class="rl"></div>
	            </div>
	        </div>
	        <div class="container">
	            
	                <div class="col-lg-8 col-lg-offset-2">
	                    <div class="modal-body">
	                        <h3>Educational</h3>
	                     
	                        <img src="<?php echo base_url(); ?>assets/images/g7.jpg" class="img-responsive" alt="">
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div>
	         
	        </div>
	    </div>
	</div>
	<!-- /Portfolio Modals -->
	<!-- //gallery -->

	
</div>

<!-- //courses -->

<hr/>
<!-- footer -->
<!-- 	<div style="background-color: #212121; height: 50px;"> -->
		
	<!-- <div class="container"> -->
		<p style="text-align: center;">© 2017 T-Learning. All rights reserved | <a href="<?php echo base_url(); ?>myaccount/about_us">About Us</a></p>
	<!-- </div> -->

	<!-- </div> -->
<!-- //footer -->


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
					            }
					        });
					    }
					});
</script>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[980,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });
});
</script>

=======
	<div class="clearfix"></div>
>>>>>>> 8ccd7a19d6c549982b8d80faf1aa9761b14a1707
