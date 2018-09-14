
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Indo-Learning</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/icon logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/lesson/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/lesson/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/lesson/css/font-awesome.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url(); ?>assets/lesson/css/custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/lesson/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/lesson/js/screenfull.js"></script>
<!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>


    <!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'> -->
<style class="cp-pen-styles">
/*html, body {*/
/*  background-color: #f0f2fa;*/
/*  font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;*/
/*  color: #555f77;*/
/*  -webkit-font-smoothing: antialiased;*/
/*}*/

input, textarea {
  outline: none;
  border: none;
  display: block;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  font-size: 1rem;
  color: #555f77;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #ced2db;
}
input::-moz-placeholder, textarea::-moz-placeholder {
  color: #ced2db;
}
input:-moz-placeholder, textarea:-moz-placeholder {
  color: #ced2db;
}
input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  color: #ced2db;
}

p {
  line-height: 1.3125rem;
}

.comments {
  /*margin: 2.5rem auto 0;*/
  max-width: 60.75rem;
  padding: 0 1.25rem;
}

.comment-wrap {
  margin-bottom: 1.25rem;
  display: table;
  width: 100%;
  min-height: 5.3125rem;
}
.comment-reply {
  margin-bottom: 1.25rem;
  display: table;
  width: 90%;
  min-height: 5.3125rem;
  margin-left: 70px
}
.comment-judul {
  margin-left: 3.5rem;
  margin-bottom: : 2.5rem;
  /*display: table;*/
  /*width: 100%;*/
  /*min-height: 2.3125rem;*/
}
.comment-button {
  margin-bottom: 1.25rem;
  /*display: table;*/
  /*width: 100%;*/
  min-height: 2.5125rem;
}

.photo {
  padding-top: 0.625rem;
  display: table-cell;
  width: 3.5rem;
}
.photo .avatar {
  height: 2.25rem;
  width: 2.25rem;
  border-radius: 50%;
  background-size: contain;
}
.photo .ava-me {
	height: 2.25rem;
  width: 2.25rem;
  border-radius: 50%;
  background-size: contain;
  background-repeat: no-repeat;

	<?php 
	$avame = base_url().'assets/images/'.$user_login->photo.'';
	 ?>
background-image: url('<?php echo $avame ?>');
}


.comment-block {
  padding: 1rem;
  background-color: #fff;
  display: table-cell;
  vertical-align: top;
  border-radius: 0.1875rem;
  
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
}
.comment-block textarea {
  width: 100%;
  resize: none;
}

.comment-text {
  margin-bottom: 1.25rem;

}

.bottom-comment {
  color: #acb4c2;
  font-size: 0.875rem;
}


.comment-date {
  float: left;
}

.comment-actions {
  float: right;
}
.comment-actions li {
  display: inline;
  margin: -2px;
  cursor: pointer;
}
.comment-actions li.complain {
  padding-right: 0.75rem;
  border-right: 1px solid #e1e5eb;
}
.comment-actions li.reply {
  padding-left: 0.75rem;
  padding-right: 0.125rem;
}
.comment-actions li:hover {
  color: #d9534f;
}
.thumb_true {
	color: #d9534f;
}
.thumb_true :hover{
	color: #acb4c2;
}

span.userspan:hover{
	color:#1e5d92;	
}

i.del_reply{
	color:#acb4c2;	
}
i.del_reply:hover{
	color:black;
}
.breaks{
    overflow-wrap: break-word;
    word-wrap: break-word;
    -ms-word-break: break-all;
    word-break: break-word;
    -ms-hyphens: auto;
    -moz-hyphens: auto;
    -webkit-hyphens: auto;
    hyphens: auto;
  }
</style>
<!----->

<!--pie-chart--->
<script src="<?php echo base_url(); ?>assets/lesson/js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="<?php echo base_url(); ?>assets/lesson/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href=""><?php echo substr($title_info->title ,0,5); ?>..</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php
		              $names = explode(" ",$getuser_in->name);

		               echo $names[0]; ?><i class="caret"></i></span><img src="<?php echo base_url() ?>assets/images/<?php echo $getuser_in->photo; ?>" style="border-radius: 50px;" width="50px"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li>
		                <li><a href="<?php echo base_url().$getuser_in->username; ?>"><i class="fa fa-user" target="_blank"></i>My Account</a></li>
		                <li><a href="<?php echo base_url(); ?>auth/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <!-- <li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon " ></i><span class="nav-label"><?php echo $getcontent->step_title; ?></a>
                    </li> -->
                   
                   <?php
				if (!empty($list_content)) {
				$i = 1;
				 foreach ($list_content as $list_c) {
					?>
				

					<li>
                        <a href="" id="go_step" class=" hvr-bounce-to-right" title="<?php echo  $list_c->step_title; ?>"><i class="fa fa-file-text-o nav_icon "></i><span class="nav-label"><?php echo $i++; ?> : <?php 
                        if (strlen($list_c->step_title) < 15) {
                          echo $list_c->step_title;
                        }
                        else{
                        echo  substr($list_c->step_title, 0,14).'..';
                        } ?></a>
                        <form action="<?php echo base_url(); ?>lesson/<?php echo $title_info->random_code; ?>" id="<?php echo  $list_c->step_number; ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="step_number" value="<?php echo  $list_c->step_number; ?>">
                        <input type="submit" class="hidden" name="GO" id="goo">
                        </form>
                    </li>
                   
					<?php
				}
				?>
				
				<?php

				}
				else{
					?>
					<li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon "></i><span class="nav-label">Lesson 1 : KOSONG/</span></a>
                        
                    </li>
					<?php
				}
				 ?>
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	

		    <div class="banner">
		   
				<h2>
				<a href=""><?php echo $title_info->title; ?></a>
				<i class="fa fa-angle-right"></i>
				<span>by: <a href="<?php echo base_url().$maker_info->username; ?>"><?php echo $maker_info->name; ?></a></span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="grid-system">
			<div class="horz-grid">
		 		<div class="grid" style="padding:20px"> <!-- -hor -->
		 			<h3 id="grid-example-basic" ><?php echo $getcontent->step_title;?></h3>
		 			<!-- <p class="" > -->
            <?php echo $getcontent->content; ?>
          <!-- </p> -->
				</div>
				<div style="text-align: right; padding-right: 35px">
					<?php if ($next != 0) {
					?>
					<a href="" id="go_step"><button type="submit" class="btn btn-danger">Next</button></a>
					<form action="<?php echo base_url(); ?>lesson/<?php echo $title_info->random_code; ?>" id="<?php echo  $next; ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="step_number" value="<?php echo  $next; ?>">
                        <input type="submit" class="hidden" name="GO" id="goo">
                    </form>
					<?php
					}
					else {
						?>
					<a href="<?php echo base_url() ?>course"><button class="btn btn-success">Selesai</button></a>
					<?php 
					} ?>
						
				</div>

				 <div style="text-align: left; padding-left: 35px">
				 	<?php if ($before != 0) {
								?>
                    <!-- before -->
				 				
                                <form action="<?php echo base_url(); ?>lesson/<?php echo $title_info->random_code; ?>" id="<?php echo  $before; ?>" method="post" enctype="multipart/form-data">
		                        <input type="hidden" name="step_number" value="<?php echo  $before; ?>">
		                        <input type="submit" class="hidden" name="GO" id="goo">
                    			</form>
                                <a href="" id="before_step" class="btn btn-danger" style="font-family: 'Montserrat-Regular'">Previous</a>
                                
                    			<?php 
                    		} 
								?>
                            </div>
				<!----> 		
			</div>
		</div>
		<!--//content-->

		<div class="grid-system">
			<div class="horz-grid">
		 		<div class="grid-hor">
		 			<?php if (!empty($list_comment_2top)) { ?>

		 			
		 			<div style="padding-left: 15px">
					    <h3>Popular discussion of this course <br><p/>
					</div>
		 			<!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> -->
					<div class="container">
					    <div class="row">
					    	<div class="comments">
		
		
		<?php foreach ($list_comment_2top as $comment) {
			?>
			<div class="comment-wrap">
				<!-- <div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>

				</div> -->
				<div class="comment-block">
					<?php 
					if(array_key_exists($comment->id_user, $username)) {
					$usrnm =  $username[$comment->id_user];
					}?>
					<h5 style="color: #d9534f;"><?php  echo $comment->subject ?> <a href="<?php echo base_url().$usrnm; ?>"><span style="font-size: 0.875rem;" class="userspan"><?php echo $usrnm; ?></span></a>
						<?php  
							if ($this->session->userdata('logged_id') == $comment->id_user) {
								?>
								<span class="badge" style="font-size: 0.875rem;background-color:#d9534f;">you</span>
							<?php
							}
							else if($comment->id_user == $maker_info->id_user){
								?>
								<span class="badge" style="font-size: 0.875rem;background-color:#d9534f;">creator</span>
							<?php
							}
						 ?>
						</h5>
					<!-- <div class="bottom-comment"> -->
						<ul class="comment-actions">
										<li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li>
								</ul>
					<!-- </div> -->
						<p class="comment-text breaks" style="color:black;"><?php echo $comment->text_comment ?></p>
						<div class="bottom-comment">
								<div class="comment-date"><?php
								$this->load->helper('date');
								$timestamp = strtotime($comment->created_at);
								// $nowstr = strtotime(time());
							
								$time = timespan($timestamp, time()) . ' ago';
								echo $time;
								   ?></div>
								<ul class="comment-actions">
					<?php 
                    if(array_key_exists($comment->id_comment, $like_amount)) {
                    $likes =  $like_amount[$comment->id_comment];
                    }
                    $thumb = '';
                    if (!empty($liked)) {
                        if(in_array($comment->id_comment, $liked)) {
                        $thumb = 'thumb_true';
                    }
                    }
                    if(array_key_exists($comment->id_comment, $dislike_amount)) {
                    	$dislikes =  $dislike_amount[$comment->id_comment];
                    }
                    $thumbb = '';
                    if (!empty($disliked)) {
                        if(in_array($comment->id_comment, $disliked)) {
                        $thumbb = 'thumb_true';
                    }
                    }
                     if(array_key_exists($comment->id_comment, $reply_amount)) {
                    	$replies =  $reply_amount[$comment->id_comment];
                    }
                    ?>
										<li class="reply likes_comment <?php echo $thumb; ?>" id="<?php echo $comment->id_comment ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $likes; ?></li>
										<li class="reply dislikes_comment <?php echo $thumbb; ?>" id="<?php echo $comment->id_comment ?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <?php echo $dislikes; ?></li>
										<li class="reply" id="reply-c"><i class="fa fa-reply" aria-hidden="true"></i> <?php echo $replies; ?></li>
										<?php if($this->session->userdata('logged_id') == $comment->id_user) { ?>
										<li class="reply delete" id="<?php echo $comment->id_comment ?>"><i class="fa fa-trash" aria-hidden="true"></i></li>
										<?php } ?>
								</ul>
									</div>
								
				</div>
		</div>
		<div class='comment-reply hidden'>
				<div class='photo'>
				<div class='ava-me'>
			</div>
			</div>
			<div class='comment-block'>
				<ul class='comment-actions'>
				<li class='reply' id='dell_reply' title='Delete'><i class='fa fa-trash' aria-hidden='true'>
			</i>
			</li>
			</ul>
			<form action=''>
				<textarea name='subject' id='subject' cols='30' rows='1' placeholder='Subject'></textarea>
				<hr>
			<textarea name='text_comment' id='text_comment' cols='30' rows='3' placeholder='Comment Text'></textarea>
			</form>
			<ul class='comment-actions'>
				<li class='reply' title='Send' id="<?php echo $comment->id_comment ?>">
				<i class='fa fa-paper-plane' aria-hidden='true'>
			</i></li>
			</ul>
			</div>
		</div>
		<?php
    } ?>
    <?php 
    ?>
    <div class="pull-right">
    <a href="<?php echo base_url()?>discuss/<?php echo $title_info->random_code ?>" class="pull-right"><button class="btn btn-danger pull-right" style="border-radius:50px;"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
    <br>
    <p class="pull-right">to make new discussion,<br> see discussion in detail</p>
</div>
    <?php
  }
    else{ ?>
      <p><i>Tidak ada diskusi. Mari membuat, klik disini </i> <a href="<?php echo base_url()?>discuss/<?php echo $title_info->random_code ?>"><button class="btn btn-danger" style="border-radius:50px;"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></a></p>
    <?php } ?>

		
</div>

</div>

					    	
					    </div>
				

	 
		<!---->
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url(); ?>assets/lesson/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>assets/lesson/js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url(); ?>assets/lesson/js/bootstrap.min.js"> </script>

	
	 <script type="text/javascript">
    	$(document).ready(function(){
   
    $("a#go_step").click(function(){
    $(this).next().children( "#goo" ).click();     
    return false;
}); 
    $("a#next_step").click(function(){
    $(this).next().children( "#goo" ).click();     
    return false;
}); 
     $("a#before_step").click(function(){
    $(this).prev().children( "#goo" ).click();     
    return false;
});
}); 

//      $(window).load(function() {
     	
//         var theHash = "#qJ";
//         $("html, body").animate({scrollTop:$(theHash).offset().top}, 800);
//       });
// });
</script>
<script type="text/javascript">
		$(document).ready(function(){
			
		$('li#reply-c').click(function(event) {
  		 	var here = $(this).parent().parent().parent().parent();
        		// $(this).parent().parent().parent().parent()
        		if (here.next().hasClass('hidden')) {
        		here.next().removeClass('hidden');
        	}				
        	});
		
		});
	
	</script>
	<script type="text/javascript">
		 $("li.delete").on('click', delete_comment);
		$("li#dell_reply").click(function(event) {
				var here = $(this).parent().parent().parent();
				if (!here.hasClass('hidden')) {
        		here.addClass('hidden');
        	}
		});	
		$("li[title=Send]").click(function(event) {
		
			var subject = $(this).parent().prev().find('textarea#subject').val();
  		 	var text_comment = $(this).parent().prev().find('textarea#text_comment').val();
  		 	var reply_id = $(this).attr('id');
  		 	var id_title = <?php echo $title_info->id_title; ?>
  		 	// alert(subject+' '+text_comment+' '+reply_id);
  		 		$.ajax({
                    url: '<?php echo base_url(); ?>course/comment_up',
                    type: 'post',
                    context: this,
                    data: {subject : subject, text_comment :text_comment  , reply_comment:reply_id,id_title:id_title},
                    success: function(e){
                    	 if (e == "false") {

                    	 }
                  		else{
                    	 	var data = e.split("|");
                    	 		var divcomment_re = $(this).parent().parent().parent();
                    	 		divcomment_re.addClass('hidden');
                    	 		$(this).parent().prev().children("textarea#subject, textarea#text_comment").val("");

                    	 		// 0 subject,1 username, 2 text_comment, 3 created at, 4 total reply comment, 5 id action, 6 id_user
                    	 		var id_in = <?php echo $this->session->userdata('logged_id')?>;
                    	 		var maker_info_id = <?php echo $maker_info->id_user?>;
                    	 		if(id_in == data[6]){ 
                    	 			divcomment_re.after('<div class="comment-reply"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 0.875rem;" class="userspan">@'+data[1]+'</span></a><span class="badge" style="font-size: 0.875rem;background-color:#d9534f;">you</span></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[5]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div>');
                    	 		}
                    	 		else if(id_in == maker_info_id) {
                    	 			divcomment_re.after('<div class="comment-reply"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 0.875rem;" class="userspan">@'+data[1]+'</span></a><span class="badge" style="font-size: 0.875rem;background-color:#d9534f;">creator</span></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[5]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div>');
                    	 		}
                    	 		 else { 
                    	 		divcomment_re.after('<div class="comment-reply"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 0.875rem;" class="userspan">@'+data[1]+'</span></a></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[5]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div>');
                    	 		 } 
						 }
                    	divcomment_re.prev().children().children().children().children('li#reply-c').html('<i class="fa fa-reply" aria-hidden="true"></i> '+data[4]+'');
                    	
                    	 divcomment_re.next().children().children().children().children('li.delete').on('click', delete_comment);
                    	 divcomment_re.next().children().children().children().children('li.likes_comment').on('click', likes_comment);
                    	 divcomment_re.next().children().children().children().children('li.dislikes_comment').on('click', dislikes_comment);

                    	 // mini_notif();
                    }
                });
		});	
			
			function delete_comment(){
				if (confirm('Are you sure you want to delete this?')) {
				var id_comment = $(this).attr('id');
				var here = $(this).parent().parent().parent().parent();
				// alert(id_action);
					$.ajax({
                    url: '<?php echo base_url(); ?>course/comment_delete',
                    type: 'post',
                    context: this,
                    data: {id_comment : id_comment},
                    success: function(e){
                    	 if (e == "false") {
                    	 	alert('gagal');
                    	 }
                  		else{
                    	 	here.remove();
					}
				}	
					});	
			}
		}
			
		
	</script>
	<script type="text/javascript">
	$("li.likes_comment").on('click', likes_comment);
	$("li.dislikes_comment").on('click', dislikes_comment);
		
	function likes_comment(){
			<?php	if ($this->session->userdata('logged_in') == TRUE) {  ?>

		var id_comment = $(this).attr('id');
		var id_title = <?php echo $title_info->id_title; ?>;
		// alert(id_action + id_title);
		$.ajax({
                    url: '<?php echo base_url(); ?>home/thumb_comment',
                    type: 'post',
                    context: this,
                    data: {id_comment : id_comment, id_title : id_title, type_action : '2',type_delete :'4'},
                    success: function(e){
                         if(e == "false") {alert('Maaf, thumb_up anda gagal');}
                         
                         else  {
                         	var data = e.split("|");
                        	if($(this).hasClass('thumb_true')){
                        	$(this).removeClass('thumb_true');
                        	$(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+data[0]);
                        	}
	                        else{
	                        $(this).addClass('thumb_true');
	                        $(this).next().removeClass('thumb_true');
	                        $(this).next().html('<i class="fa fa-thumbs-down" aria-hidden="true"></i>'+data[1]);
	                        $(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+data[0]);
	                        }
                    }
				}
                });
		<?php }
		else {
			?>
			 swal({
                       title: "Failed",
                       text: "Anda harus login terlebih dahulu",
                       timer: 1500,
                       showConfirmButton: false,
                       type: 'warning'
			});
			<?php
		} ?>
       		
	}
		
	function dislikes_comment(){
				<?php	if ($this->session->userdata('logged_in') == TRUE) {  ?>

		var id_comment = $(this).attr('id');
		var id_title = <?php echo $title_info->id_title; ?>;
		// alert(id_action + id_title);
		$.ajax({
                    url: '<?php echo base_url(); ?>home/thumb_comment',
                    type: 'post',
                    context: this,
                    data: {id_comment : id_comment, id_title : id_title, type_action : '4',type_delet :'2'},
                    success: function(e){
                         if(e == "false") {alert('Maaf, thumb_up anda gagal');}
                         
                         else  {
                         	var data = e.split("|");
                        	
                        if($(this).hasClass('thumb_true')){
                        	$(this).removeClass('thumb_true');

                        	$(this).html('<i class="fa fa-thumbs-down" aria-hidden="true"></i>'+data[0]);
                        	}
	                        else{
	                        $(this).addClass('thumb_true');
	                        $(this).prev().removeClass('thumb_true');
	                        $(this).prev().html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+data[1]);
	                        $(this).html('<i class="fa fa-thumbs-down" aria-hidden="true"></i>'+data[0]);
	                        }
                    }
				}
                });
		<?php }
		else {
			?>
			 swal({
                       title: "Failed",
                       text: "Anda harus login terlebih dahulu",
                       timer: 1500,
                       showConfirmButton: false,
                       type: 'warning'
			});
			<?php
		} ?>
	}
	
</script>
</body>
</html>

