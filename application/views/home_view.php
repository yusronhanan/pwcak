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
				<a href="#" data-toggle="modal" data-target="#myModal5"><img src="<?php echo base_url() ?>assets/images/<?php echo $pcourses->thumbnail ?>" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#myModal5"><?php echo $pcourses->title ?></a></h4>
				<?php 
					if(array_key_exists($pcourses->id_user, $username)) {
					$usrnm =  $username[$pcourses->id_user];
				}?>
				<h6>By  <a href="<?php echo base_url() ?><?php echo $usrnm ?>">
					<?php echo $usrnm ?>
				</a>, <?php echo $pcourses->created_at ?></h6>
				<p><?php echo $pcourses->description ?></p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i>17</h6>
					<h6><i class="fa fa-heart-o" aria-hidden="true"></i>78</h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="<?php echo base_url() ?>#"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
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
		<h3 style="text-align: left;">SUGGESTION COURSES</h3>
		<?php foreach ($list_rcourses as $rcourses) {
			
		 ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#myModal5"><img src="<?php echo base_url() ?>assets/images/<?php echo $rcourses->thumbnail ?>" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#myModal5"><?php echo $rcourses->title ?></a></h4>
				<?php 
					if(array_key_exists($rcourses->id_user, $username)) {
					$usrnm =  $username[$rcourses->id_user];
				}?>
				<h6>By  <a href="<?php echo base_url() ?><?php echo $usrnm ?>">
					<?php echo $usrnm ?>
				</a>, <?php echo $rcourses->created_at ?></h6>
				<p><?php echo $rcourses->description ?></p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i>17</h6>
					<h6><i class="fa fa-heart-o" aria-hidden="true"></i>78</h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="<?php echo base_url() ?>#"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<?php } ?>
		
		</div>

	</div>
	
</div>

<!-- //courses -->


