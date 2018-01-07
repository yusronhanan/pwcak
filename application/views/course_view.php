<script type="text/javascript">
    function load_infinite() {
            var load_infinite = 'load_infinite';
            var start = $('div.load_beforethis').attr('id');
    
            $.ajax({
            url:"<?php echo base_url(); ?>Infinitive/infinite",
            method:"POST",
            data:{load_infinite:load_infinite,start:start},
            // dataType:"json",
            success:function(e){
                var data = e.split("|");
                $('div.load_beforethis').prepend(data[0]);
                $('div.load_beforethis').attr('id',data[1]);
                $("a.lesson_view").on('click', lesson_modal);
                $('h6.thumb_in').on('click', thumb_in);
            }
        });
        }
    // window.onload = load_infinite;
</script>
<style type="text/css">
	.navbar .navbar-search .dropdown-menu { min-width: 25px; }
.dropdown-menu .label-icon { margin-left: 5px; }
.btn-outline {
    background-color: transparent;
    color: inherit;
    transition: all .5s;
}

</style>
<div class="header">
				<div class="callbacks_container">
					<ul class="rslides" id="">
						<li>
						
							<div class="slider-info">
								<p>find your passion</p>
								<h3><a href="index.html"><span>Edu</span> cational</a></h3>
								<h6>place where you get lesson</h6>
							</div>
						</li>
							
					</ul>
				</div>
				<div class="clearfix"></div>
	</div>
</div>
<!--main-content-->

					<div class="clearfix"></div>

<!-- courses -->
<div class="event" id="events">
	<div class="container">

<div class="row">
<div class="col-md-6">



        <div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" id="formcourses" method="get" action="<?php echo base_url() ?>course" role="search">
                <div class="input-group">
                                                                                                
                    <input type="text" id="title" name="title" class="form-control" value="<?php if(!empty($title)) { echo $title; } ?>" placeholder="search courses">
                
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
		<!-- <div class="input-group custom-search-form">
				<form action="#" method="post">
					<input type="search" placeholder="Search Here..." required="" />
					<input type="submit" value=" ">
				</form>
		</div> -->

		<h3 style="text-align: left;">COURSES</h3>
		
        <?php 
        if (!empty($list_courses)) {
        foreach ($list_courses as $courses) {
			
		 ?>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $courses->random_code ?>"><img src="<?php echo base_url() ?>assets/images/<?php echo $courses->thumbnail ?>" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $courses->random_code ?>"><?php echo $courses->title ?></a></h4>
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
					<?php 
                    if(array_key_exists($courses->id_title, $comment_amount)) {
                    $comments =  $comment_amount[$courses->id_title];
                    }
                     ?>
                    <h6><i class="fa fa-comment-o" aria-hidden="true"></i><?php echo $comments; ?></h6>
					<?php 
                    if(array_key_exists($courses->id_title, $like_amount)) {
                    $likes =  $like_amount[$courses->id_title];
                    }
                    $thumb = '';
                    if (!empty($liked)) {
                        if(in_array($courses->id_title, $liked)) {
                        $thumb = 'thumb_true';
                    }
                    }
                    ?>
                    <h6 id="<?php echo $courses->random_code ?>" class="thumb_in <?php echo $thumb ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i><?php echo $likes; ?></h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $courses->random_code ?>"><h5>More</h5></a>
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
        <div class="load_beforethis" id="15"></div>
        <button class="btn btn-danger" id="load_infinite">LOAD PLEASE</button>
	</div>
</div>
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
<!-- //courses -->
<script type="text/javascript">
    $("a.lesson_view").on('click', lesson_modal);
            function lesson_modal(){
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
                   }
</script>