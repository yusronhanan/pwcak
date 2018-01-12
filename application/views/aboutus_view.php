

<style type="text/css">
    	body {
    margin-top: 20px;
}


/* Team */

.team-member {
    background: #fff;
    text-align: center;
    transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}

.team-member .team-photo {
    background: #fff;
    min-height: 200px;
    margin: 0 auto;
    padding: 24px 24px 32px 24px;
}

.team-member .team-attrs {
    padding: 2px 16px 16px 16px;
    color: #303030;
}

.team-member .team-attrs .team-name {
    font-size: 21px;
}

.team-member .team-attrs .team-position {
    font-size: 12px;
    letter-spacing: 2px;
    color: #a7a7a7;
}

.team-member .team-content {
    color: #303030;
    opacity: .8;
    padding: 16px 24px 40px 24px;
}

.team-member:hover {
    box-shadow: 2px 3px 9px rgba(0, 0, 0, 0.2);
}


/*------------------------------------------------------------------
[10. Hover Effects]
*/

.item-wrap {
    margin-bottom: 30px;
}

figure {
    position: relative;
    overflow: hidden;
    text-align: center;
}

figure img {
    position: relative;
    opacity: 1.0;
}

figure figcaption {
    padding: 1.0em;
    color: #303030;
    text-transform: uppercase;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

figure figcaption > .fig-description a {
    z-index: 1000;
    text-indent: 200%;
    white-space: nowrap;
    font-size: 0;
}

figure figcaption:before,
figure figcaption:after {
    pointer-events: none;
}

figure figcaption,
figure figcaption > a {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

figure h3 {
    word-spacing: -0.15em;
    font-family: "Montserrat", sans-serif;
}

figure h3 span {
    font-family: "Montserrat", sans-serif;
}

figure h3,
figure p {
    margin: 0;
}

figure p {
    letter-spacing: 1px;
    font-size: 68.5%;
}


/* Team Hover */

figure.effect-zoe {
    margin: 0;
    width: 100%;
    height: auto;
    min-width: 200px;
    max-height: none;
    max-width: none;
    float: none;
}

figure.effect-zoe img {
    display: inline-block;
    opacity: 1;
}

figure.effect-zoe p.icon-links {
    margin: 0px;
}

figure.effect-zoe p.icon-links a {
    color: #fff;
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(0, 200%, 0);
    transform: translate3d(0, 200%, 0);
}

figure.effect-zoe p.icon-links a i::before {
    color: #fff;
    font-size: 24px;
    display: inline-block;
    padding: 15px 10px;
    margin-left: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

figure.effect-zoe p.icon-links a:hover i::before {
    color: #f2f2f2;
}

figure.effect-zoe p.phone-number a {
    color: #fff;
    font-size: 12px;
}

figure.effect-zoe p.phone-number a:hover {
    color: #f2f2f2;
    text-decoration: none;
}

figure.effect-zoe figcaption {
    top: auto;
    bottom: 0;
    padding: 0;
    height: 8em;
    background: #a7a7a7;
    border-top: 3px solid #fff;
    color: #5d5d5d;
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
}

figure.effect-zoe:hover figcaption,
figure.effect-zoe:hover h2,
figure.effect-zoe:hover p.icon-links a {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

figure.effect-zoe:hover p.icon-links a:nth-child(3) {
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
}

figure.effect-zoe:hover p.icon-links a:nth-child(2) {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
}

figure.effect-zoe:hover p.icon-links a:first-child {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
    </style>

<body>

<!--about-->
<div id="about" class="about">
	<div class="container">
			<h1>About <span>us</span></h1>

			<div class="row bootstrap snippet">
			    <div class="col-md-3">
			        <div class="team-member">
			            <figure class="effect-zoe">
			                <div class="team-photo">
			                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Rachel James Johnes" class="img-responsive">
			                </div>
			                <div class="team-attrs">
			                    <div class="team-name font-accident-two-bold-italic">Arya Bayu Ageng P.</div>
			                    <div class="team-position">Back-End</div>
			                </div>
			                <div class="team-content small">
			                    Saya harap, T-Learning ini bisa membawa manfaat bagi banyak orang !
			                </div>
			                <figcaption>

			                    <p class="icon-links">
			                        <a href="mailto:aryabayu23@gmail.com"><i class="fa fa-envelope"></i></a>
			                        <a href="https://www.instagram.com/_aryabayu" target="_blank"><i class="fa fa-instagram"></i></a>
			                        <!-- <a href="#!"><i class="fa fa-facebook"></i></a> -->
			                    </p>

			                    <p class="phone-number">
			                        <a href="tel:+6285814264287">tel: +62 858 1426 4287</a>
			                    </p>
			                </figcaption>
			            </figure>
			        </div>
			        <div class="dividewhite4"></div>
			    </div>

			    <div class="col-md-3">
			        <div class="team-member">
			            <figure class="effect-zoe">
			                <div class="team-photo">
			                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Rachel James Johnes" class="img-responsive">
			                </div>
			                <div class="team-attrs">
			                    <div class="team-name font-accident-two-bold-italic">Karina Widhia N.</div>
			                    <div class="team-position">Front-End</div>
			                </div>
			                <div class="team-content small">
			                    Saya senang menjadi bagian dari T-Learning, ini merupakan masa-masa produktif paling berharga menurut saya !
			                </div>
			                <figcaption>
			                    <p class="icon-links">
			                        <a href="mailto:karinwidhia@gmail.com"><i class="fa fa-envelope"></i></a>
			                        <a href="https://www.instagram.com/karinwidhia" target="_blank"><i class="fa fa-instagram"></i></a>
			                    </p>

			                    <p class="phone-number">
			                        <a href="tel:+6282139307407">tel: +62 821 3930 7407</a>
			                    </p>
			                </figcaption>
			            </figure>
			        </div>
			        <div class="dividewhite4"></div>
			    </div>

			    <div class="col-md-3">
			        <div class="team-member">
			            <figure class="effect-zoe">
			                <div class="team-photo">
			                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Rachel James Johnes" class="img-responsive">
			                </div>
			                <div class="team-attrs">
			                    <div class="team-name font-accident-two-bold-italic">Qoriatul Masfufah</div>
			                    <div class="team-position">Front-End</div>
			                </div>
			                <div class="team-content small">
			                    Semoga T-Learning bermanfaat dan dapat jadi acuan untuk sharing ilmu !
			                </div>
			                <figcaption>
			                    <p class="icon-links">
			                        <a href="mailto:qoriatulmasfufah@gmail.com"><i class="fa fa-envelope"></i></a>
			                        <a href="https://www.instagram.com/qoriatulmasfufah" target="_blank"><i class="fa fa-instagram"></i></a>
			                    </p>

			                    <p class="phone-number">
			                        <a href="tel:+6281357316790">tel: +62 813 5731 6790</a>
			                    </p>
			                </figcaption>
			            </figure>
			        </div>
			        <div class="dividewhite4"></div>
			    </div>

			    <div class="col-md-3">
			        <div class="team-member">
			            <figure class="effect-zoe">
			                <div class="team-photo">
			                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Rachel James Johnes" class="img-responsive">
			                </div>
			                <div class="team-attrs">
			                    <div class="team-name font-accident-two-bold-italic">Yusron Hanan Zain V.I.</div>
			                    <div class="team-position">Back-End</div>
			                </div>
			                <div class="team-content small">
			                    T-Learning merupakan bagian <i>Teen Signature</i> yang indah untuk dikenang nantinya, terimakasih dan sukses !
			                </div>
			                <figcaption>
			                    <p class="icon-links">
			                        <a href="mailto:yusronzain@gmail.com"><i class="fa fa-envelope"></i></a>
			                        <a href="https://www.instagram.com/yusron_hzvi" target="_blank"><i class="fa fa-instagram"></i></a>
			                    </p>

			                    <p class="phone-number">
			                        <a href="tel:+6282251461910">tel: +62 822 5146 1910</a>
			                    </p>
			                </figcaption>
			            </figure>
			        </div>
			        <div class="dividewhite4"></div>
			    </div>
			</div>
	</div>
	
	<div class="clearfix"></div>
<!--//about-->

<br/>

<!--test-->
	<div id="testimonials" class="review">
		<div class="container">
		<h3 class="title-w3">Testimonials</h3>
				<div class="test-monials">
				<!--//screen-gallery-->
						<div class="sreen-gallery-cursual">
							
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                	<div class="test-review">
										<p><img src="images/left-quote.png" alt="">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src="images/right-quote.png" alt=""></p>
											<div class="img-agile">
												<img src="images/t1.jpg" class="img-responsive" alt=""/>
											</div>
											  <h5>James</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										 <p> <img src="images/left-quote.png" alt="">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src="images/right-quote.png" alt=""></p>
						                	<div class="img-agile">
											<img src="images/t2.jpg" class="img-responsive" alt=""/>
											</div>
											<h5>Williams Allen</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										     <p><img src="images/left-quote.png" alt="">Lorem ipsum dolor sit ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<img src="images/right-quote.png" alt=""></p>
						                	<div class="img-agile">
											<img src="images/t3.jpg" class="img-responsive" alt=""/>
											</div>
											<h5>Richard</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
			</div>
		</div>
<!--//test-->

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
			
