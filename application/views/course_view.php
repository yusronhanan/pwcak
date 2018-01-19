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

</div>
<!--main-content-->

					<div class="clearfix"></div>

<!-- courses -->
<div class="event" id="events">
	<div class="container">

<div class="row">
<div class="col-md-8">



        <div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" id="formcourses" method="get" action="<?php echo base_url() ?>course" role="search">
                <div class="input-group col-md-12">
                                                                                                
                    <input type="text" id="title" name="title" class="form-control" value="<?php if(!empty($title)) { echo $title; } ?>" placeholder="search by course name or user maker">
                
                    <div class="input-group-btn">
                        <input type="submit"  class="btn btn-search btn-danger" value="Search" id="searchcourses">
                        
                        <select class="form-control" name="subject">
                            <option value="">All</option>
                                <?php 
                                foreach ($list_subject as $sbj) {
                                 if ($sbj->text == $subject) {
                                    
                                 ?>
                                 <option value="<?php echo $sbj->text ?>" selected="selected"><?php echo $sbj->text ?></option>
                                 <?php }
                                 else { ?>
                                    <option value="<?php echo $sbj->text ?>"><?php echo $sbj->text ?></option>
                                <?php 
                            }
                            } ?>
                                </select>
                     
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
			<h4><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="<?php echo $courses->random_code ?>" title="<?php echo $courses->title ?>">
                    <?php 
                        if (strlen($courses->title) < 25) {
                          echo $courses->title;
                        }
                        else{
                        echo  substr($courses->title, 0,24).'..';
                        } ?> 

            </a>
            </h4>
				<?php 
					if(array_key_exists($courses->id_user, $username)) {
					$usrnm =  $username[$courses->id_user];
				}?>
				<h6>By  <a href="<?php echo base_url() ?><?php echo $usrnm ?>">
					<?php echo $usrnm ?>
				</a>, <?php echo $courses->created_at ?></h6>
				<p class="breaks"><?php echo substr($courses->description, 0,104) ?>...</p>
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
        <!-- <button class="btn btn-danger" id="load_infinite">LOAD PLEASE</button> -->
	</div>
</div>
<!-- <script type="text/javascript">
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
        
    </script> -->
   