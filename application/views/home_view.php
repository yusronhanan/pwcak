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

	
	<div class="header" style="background: url(<?php echo base_url().'assets/images/'.$sld_img; ?>) no-repeat center;">
		<!-- Slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<?php foreach ($slider as $sld) { 
							$texts = explode("|",$sld->text);
						?>
						<li>
							<div class="slider-info">
								<p><?php echo $texts[0] ?></p>
								<h3><a href="#"><span>EDU</span>CATIONAL</a></h3>
								<h6><?php echo $texts[1] ?></h6>
							</div>
						</li>
						<?php } ?>
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
			<h4><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $pcourses->random_code ?>" title="<?php echo $pcourses->title ?>">
				<?php 
                        if (strlen($pcourses->title) < 25) {
                          echo $pcourses->title;
                        }
                        else{
                        echo  substr($pcourses->title, 0,24).'..';
                        } ?>
			</a></h4>
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
					<h5>Learning</h5> <p>Dimana saja dan kapan saja. Banyak konten pelajaran yang akan membuat kalian bisa belajar apa saja. Belajar pun lebih menarik karena ada fitur gambar dan video!</p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-share-alt a2" aria-hidden="true"></span>
					</figure>
					<h5>Sharing</h5>
					<p>Anda punya konten pelajaran untuk di share? Disinilah satu tempat yang tepat untuk learning and sharing.</p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						 <span class="glyphicon glyphicon-comment a3" aria-hidden="true"></span>						
					</figure>
					<h5>Disscussion</h5>
					<p>Jika ada yang kurang dipahami atau ingin bertanya seputar course yang anda ikuti, buat aja diskusi baru atau baca beberapa diskusi yang sudah ada.</p>
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
                	<?php foreach ($testimonial as $testi) { 
            	$testii = explode('|', $testi->text);
             ?>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>

                            <p class="description">
                                <?php echo $testii[0] ?>
                            </p>
                        </div>
                        <h3 class="title"><?php echo $testii[1] ?></h3>
                        <span class="post"><?php echo $testii[2] ?></span>
                    </div>
                      <?php } ?>
                </div>
            </div>
          
        </div>
    </div>
<!-- </div> -->
</div>


<!-- testii end -->


<!-- gallery -->
	<div class="portfolio" id="gallery" style="margin-top: 0px;">
		<h3> Editor Picks Courses</h3>
			
			<div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
			
				<?php 
				$i = 0;
				foreach ($list_vcourses as $rcourses) {  
					$i++; ?>
				
				<div class="col-md-4 grid slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal1" class="pick_view" data-toggle="modal" id="<?php echo $rcourses->random_code ?>">

						<img src="<?php echo base_url(); ?>assets/images/<?php echo $rcourses->thumbnail ?>" alt="<?php echo $rcourses->title ?>"  width ="550px" height="366px"/>
							<figcaption>
								<h4><?php echo $rcourses->title ?></h4>
								<p> <?php echo substr($rcourses->description, 0,75) ?>...</p>				
								<?php 
					if(array_key_exists($rcourses->id_user, $username)) {
					$usrnm =  $username[$rcourses->id_user];
				}?>
					<p>by <?php echo $usrnm ?></p>
					<?php 
					if(array_key_exists($rcourses->id_title, $comment_amount)) {
					$comments =  $comment_amount[$rcourses->id_title];
					}
					if(array_key_exists($rcourses->id_title, $like_amount)) {
					$likes =  $like_amount[$rcourses->id_title];
					}
						?>		
						<p><i class="fa fa-comment-o"><?php echo $comments ?></i> | <i class="fa fa-thumbs-up"><?php echo $likes ?></i></p>
							</figcaption>	
							</a>						
					</figure>
				</div>
				<?php if ($i == 3) {
					echo '<div class="clearfix"></div>';
					$i = 0;
				} ?>
				<?php } ?>
				<!-- <div class="col-md-4 grid slideanim">
					<figure class="effect-jazz">
					<a href="#portfolioModal3"  data-toggle="modal">

						<img src="<?php echo base_url(); ?>assets/images/g3.jpg" alt="img25" class="img-responsive"/>
							<figcaption>
								<h4>Educational</h4>
								<p> Education is not a problem. Education is an opportunity.</p>							
							</figcaption>
						</a>						
					</figure>
				</div> -->
				
				<!-- <div class="clearfix"></div> -->
			 <!-- </div> -->
			<!-- <div class="portfolio-top wow fadeInUp animated" data-wow-delay=".5s"> -->
				
				<div class="clearfix"></div>
			 <!-- </div> -->
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
	                        <h3 id="titlee_lesson">Educatiaonal</h3>
							
	                        <img id="imgg_lesson" src="" class="img-responsive" alt="">
	                        <p id="descc_lesson"></p>

	                        <p id="namee_lesson"></p>
	                        
	                        <a id="goo_lesson" href="">Enroll</a>
	                    </div>
	                </div>
	           
	        </div>
	    </div>
	</div>
	
	<!-- /Portfolio Modals -->
	<!-- //gallery -->
				
<script type="text/javascript">
			$("a.pick_view").click(function(event) {
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
					                $('#titlee_lesson').html(data[0]);
					                $('#imgg_lesson').attr('src','<?php echo base_url() ?>assets/images/'+data[1]);
					                $('#descc_lesson').html(data[2]);
					                $('#namee_lesson').html('by <a href="<?php echo base_url() ?>'+data[4]+'">'+data[3]+'</a>');
					                // $('#usernamee_lesson').attr('href','<?php echo base_url() ?>'+data[4]);
					                $('#goo_lesson').attr('href','<?php echo base_url() ?>lesson/'+random_code);
					            }
					        });
					    }
					});
</script>
	
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

	<div class="clearfix"></div>