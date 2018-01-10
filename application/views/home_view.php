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
		<h3 style="text-align: left;">Popular Courses</h3>
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

<!-- Top User -->
<div id="about" class="about">
	<div class="container">
			<h1 style="text-align: left;">Top <span>user</span></h1>
			<div class="specialty-grids-top">
				<div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-education a1" aria-hidden="true"></span>
					</figure>
					<h5>Jack</h5> <p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-home a2" aria-hidden="true"></span>
					</figure>
					<h5>Cameron</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						 <span class="glyphicon glyphicon-leaf a3" aria-hidden="true"></span>						
					</figure>
					<h5>Lily</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>	
<!--//Top User-->

<!-- courses -->
<div class="event" id="events">
	<div class="container">
		<h3 style="text-align: left;">EDITOR PICKS COURSES</h3>
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
	
</div>

<!-- //courses -->
<hr/>
<!--about-->
<div id="about" class="about">
	<div class="container">
			<h1>About <span>us</span></h1>
			<!-- <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut enim ad tempor incididunt ut labore et dolore magna aliqua.</h2> -->
			<div class="specialty-grids-top">
				<div class="col-md-3 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-education a1" aria-hidden="true"></span>
					</figure>
					<h5>Yusron Hanan Zain</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-3 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-home a2" aria-hidden="true"></span>
					</figure>
					<h5>Arya Bayu Ageng</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-3 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						 <span class="glyphicon glyphicon-leaf a3" aria-hidden="true"></span>						
					</figure>
					<h5>Karina Widhia</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="col-md-3 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						 <span class="glyphicon glyphicon-leaf a3" aria-hidden="true"></span>						
					</figure>
					<h5>Qoriatul Masfufah</h5>
					<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium elerisque ipsum vehicula pharetra.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			
				<div class="clearfix"></div>
			</div>
	</div>
	<div class="clearfix"></div>