	
	<div class="header">
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
								<h3><a href="#"><span><?php echo $texts[1] ?></span><?php echo $texts[2] ?></a></h3>
								<h6><?php echo $texts[3] ?></h6>
							</div>
						</li>
						<?php } ?>
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
		<h3 style="text-align: left;text-transform: uppercase;">Discussion</h3>
		<?php foreach ($list_discuss as $discuss) { ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal5"><img src="images/e2.jpg" alt="image"></a> -->
			<h4><a href="#" data-toggle="modal" data-target="#myModal5" title="<?php echo $discuss->subject; ?>">
				<?php 
                        if (strlen($discuss->subject) < 24) {
                          echo $discuss->subject;
                        }
                        else{
                        echo  substr($discuss->subject, 0,23).'..';
                        } ?>
			</a></h4>
				<h6>By an <a href="#"><?php echo $discuss->username ?></a>, <?php echo $discuss->comment_created ?>
				<br>in <a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $discuss->random_code ?>" style="color:#d9534f;"><?php echo $discuss->title ?></a></h6>
				<p><?php 
                        if (strlen($discuss->text_comment) < 37) {
                          echo $discuss->text_comment;
                        }
                        else{
                        echo  substr($discuss->text_comment, 0,38).'..';
                        } ?></p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">

					<?php 
					if(array_key_exists($discuss->id_comment, $comment_amount)) {
					$comments =  $comment_amount[$discuss->id_comment];
					}
					 ?>
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i><?php echo $comments; ?></h6>
					
				</div>	
				<div class="eve-w3lright e1">
					<a href="<?php echo base_url().'discuss/'.$discuss->random_code ?>" data-toggle="" data-target="" title="<?php echo $discuss->subject; ?>"><h5>More</h5></a>
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
											<img src="images/e2.jpg" alt="blog-image" />
											<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
									</div>
								</div>
						
							</div>
				       </div>
					   
