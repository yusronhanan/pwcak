	
	<div class="header">
		<!-- Slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
						
							<div class="slider-info">
								<p>Question and Answer</p>
								<p>for  discuss and boost our knowledge</p>
								<!-- <h3><a href="index.html"><span>Edu</span> cational</a></h3> -->
								<!-- <h6>wisdom begins with wonder.</h6> -->
								
							</div>

							<div class="container">
							    <div class="row">
							        <div class="col-sm-6 col-sm-offset-3">
							            <div id="imaginary_container">
							            	<form method="" action="">
							                <div class="input-group stylish-input-group input-append">
							                    <input type="text" class="form-control"  placeholder="Search" >
							                    <div class="input-group-btn">
                                                <input type="submit"  class="btn btn-search btn-danger btn-secondary" value="Go!" id="#">
                                            </div>
							                    <!-- <span class="input-group-addon">
							                        <button type="submit">
							                            <span class="glyphicon glyphicon-search"></span>
							                        </button>  
							                    </span> -->
							                </div>
							            </form>
							            </div>
							        </div>
								</div>
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
		<h3 style="text-align: left;text-transform: uppercase;">Discussion</h3>
		<?php foreach ($list_discuss as $discuss) { ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal5"><img src="images/e2.jpg" alt="image"></a> -->
			<h4><a href="#" data-toggle="modal" data-target="#myModal5"><?php echo $discuss->subject ?></a></h4>
				<h6>By an <a href="#"><?php echo $discuss->username ?></a>, <?php echo $discuss->comment_created ?>
				<br>in <a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $discuss->random_code ?>" style="color:#d9534f;"><?php echo $discuss->title ?></a></h6>
				<p><?php echo $discuss->text_comment ?></p>
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
					<a href="<?php echo base_url().'discuss/'.$discuss->random_code ?>" data-toggle="" data-target=""><h5>More</h5></a>
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
					   
