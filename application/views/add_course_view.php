
<!DOCTYPE HTML>
<html>
<head>
<title>T-Learning</title>
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
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<style type="text/css">
  .custom-input-file {
    overflow: hidden;
    position: relative;
    width: 400px;
    height: 400px;
    background-repeat: no-repeat;
    /*background-attachment: fixed;*/
    background-position: center; 
    background-size: 400px;
    /*border-radius: 120px;*/
}
.changephoto{
    z-index: 999;
    line-height: 0;
    font-size: 0;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
    margin: 0;
    padding:0;
    left:0;
}
.uploadPhoto {
    position: absolute;
    top: 25%;
    left: 25%;
    display: none;
    width: 50%;
    height: 50%;
    color: #fff;    
    text-align: center;
    line-height: 60px;
    text-transform: uppercase;    
    background-color: rgba(0,0,0,.3);
    /*border-radius: 50px;*/
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
   
</style>
</head>
<body>
<div id="wrapper">
<?php 
				$tit_info = explode("|", $title_info); ?>

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="#"><?php echo substr($tit_info[0],0,7); ?>..</a></h1>         
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

		               echo $names[0]; ?><i class="caret"></i></span><img src="<?php echo base_url() ?>assets/images/<?php echo $getuser_in->photo; ?>" style="border-radius: 50px;" width="50px" height="50px"></a>
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

				<?php
				if (!empty($list_content)) {
				$i = 1;
				
				 foreach ($list_content as $list_c) {
					
					?>
				
					<!-- kurang if step_number == $step echo selected //membedakan -->
					
					<li>
                        <a href="" id="go_step" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon "></i><span class="nav-label"><?php echo $i++; ?> : <?php 
                        if (strlen($list_c->step_title) < 15) {
                          echo $list_c->step_title;
                        }
                        else{
                        echo  substr($list_c->step_title, 0,14).'..';
                        } ?></a>
                        <form action="<?php echo base_url(); ?>add_course/<?php echo $tit_info[3]; ?>" id="<?php echo  $list_c->step_number; ?>" method="post" enctype="multipart/form-data">
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
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon "></i><span class="nav-label">1 : KOSONG</span></a>
                        
                    </li>
					<?php
				}
				 ?>
                    
                   
                    
                   
                    <li>
                        <a href="#" data-toggle="modal" data-target="#settingcourse" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Setting</span></a>
                        
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#editthumbnail" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon "></i><span class="nav-label">Edit Thumbnail</span></a>
                        
                    </li>
                </ul>
            </div>
			</div>
        </nav>
        <!-- Modal setting course -->
		<div class="modal fade" id="settingcourse" tabindex="-1" role="dialog" >
		<div class="modal-dialog" role="document">
			<!-- Modal content-->
			<div class="modal-content news-w3l">
				<div class="modal-header">
							<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
							<h4>Edit Course</h4>
							<!--newsletter-->
							<div class="login-main wthree">
							 
							 <form action="<?php echo base_url(); ?>add_course/<?php echo $tit_info[3]; ?>" method="post" enctype="multipart/form-data">

							 	<input type="hidden" name="id_title" value="<?php echo $tit_info[2]; ?>">
							 	<input type="hidden" name="step_number" value="<?php echo $step; ?>">
								Course Name 
								<input type="text" name="coursename" class="form-control" value="<?php echo $tit_info[0]; ?>">
								Subject 
								 <select class="form-control" name="subject">
                                <?php 
                                foreach ($list_subject as $sbj) {
                                 if ($sbj->text == $tit_info[5]) {
                                    
                                 ?>
                                 <option value="<?php echo $sbj->text ?>" selected="selected"><?php echo $sbj->text ?></option>
                                 <?php }
                                 else { ?>
                                    <option value="<?php echo $sbj->text ?>"><?php echo $sbj->text ?></option>
                                <?php 
                            }
                            } ?>
                                </select>
                                Description
                                <textarea name="description" class="form-control" rows="5"><?php echo $tit_info[4]; ?></textarea>
                                
							<!-- <label for="file-upload" class="custom-file-upload ">
    						<span class="glyphicon glyphicon-upload"></span>  Upload Thumbnail
							</label> -->
								<br/>
								<!-- Choose Thumbnail -->
								<!-- <input id="file-upload" name="thumbnail" type="file" class="form-control"/> -->
								<br>
								<input type="submit" name="settingcourse" value="Update Now" class="btn btn-danger pull-right">
								<br>
							</form>
							</div>
						<!--//newsletter-->			
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal setting course -->
	<!-- Modal edit thumbnail course -->
		<div class="modal fade" id="editthumbnail" tabindex="-1" role="dialog" >
		<div class="modal-dialog" role="document">
			<!-- Modal content-->
			<div class="modal-content news-w3l">
				<div class="modal-header">
							<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
							<h4>Edit Thumbnail</h4>
							<!--newsletter-->
							<div class="login-main wthree">
							 <form id="formthumbnail" action ="<?php echo base_url();?>add_course/<?php echo $tit_info[3]; ?>" method="post" enctype="multipart/form-data">
						      	<div class="custom-input-file" id="previewavatar" style="background-image:url('<?php echo base_url() ?>assets/images/<?php echo $tit_info[6]; ?>');display: block;margin: 0 auto;">
                                    <label class="uploadPhoto">
                                        EDIT
                                        <input type="file" id="filethumbnail" name="photothumbnail" class="change-avatar changephoto">
                                    </label>
                                </div>
                                <input type="hidden" name="id_title" value="<?php echo $tit_info[2]; ?>">
							 	<input type="hidden" name="step_number" value="<?php echo $step; ?>">
								<br/>
								<!-- Choose Thumbnail -->
								<!-- <input id="file-upload" name="thumbnail" type="file" class="form-control"/> -->
								<br>
								<input type="submit" name="editthumbnail" value="Update Now" class="btn btn-danger pull-right">
								<br>
							</form>
							</div>
						<!--//newsletter-->			
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal edit thumbnail course -->
	

        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	

		    <div class="banner">
		   	
				<h2>
				
				<a href="#"><?php echo $tit_info[0]; ?></a>
				<i class="fa fa-angle-right"></i>
				<span>by: <?php echo $tit_info[1]; ?></span>
				<?php 
				if ($tit_info[7] == '0') {
				 	$publishh = 'Publish Now';
				 }
				 else{
				 	$publishh = 'Unpublish Now';
				 } ?>
				<button class="btn btn-danger pull-right publishh" id="<?php echo $tit_info[3]; ?>"><?php echo $publishh ?></button>
		    
				</h2>
			</div>
		    <?php
		$notif = $this->session->flashdata('notif');
		 if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
      	  } ?>
		<!--//banner-->
		<!--content-->
		<div class="grid-system">
			<div class="horz-grid">
		 		<div class="grid-hor">
		 			<form action="<?php echo base_url(); ?>add_course/<?php echo $tit_info[3]; ?>" method="post" enctype="multipart/form-data">
		 			<h3 id="grid-example-basic">
		 			<input type="text" name="step_title" placeholder="Your Title" value="<?php if(!empty($getcontent)){ echo $getcontent->step_title;} ?>" style="padding: 8px;text-align: center;"> </h3>

		 			<br>
		 			<input type="hidden" name="id_title" value="<?php echo $tit_info[2]; ?>">
		 			
		 			<input type="hidden" name="step_number" value="<?php
		 			echo $step; ?>">
		 			
		 			<textarea name="content" class="ckeditor" id="ckeditor"><?php if(!empty($getcontent)){ echo $getcontent->content;} ?></textarea>
		 			
				</div>
				<div style="text-align: right; padding-right: 35px">
					<input type="submit" name="save" class="btn btn-danger" value="SAVE">

					<?php 
					if ($step >= $last) {
					 ?>
					 <input type="submit" name="newstep" class="btn btn-success" value="NEW STEP">
					<?php 
					} ?>
					
					<input type="submit" name="done" class="btn btn-danger" value="SAVE AND BACK TO MY ACCOUNT">
					</form>	
				</div>
				<?php if(!empty($getcontent)){ ?>
				 <div class="btn-group">
				 	
                                <a class="btn btn-default" href="<?php echo base_url() ?>myaccount/delete_content/<?php echo $getcontent->id_course; ?>"><i class="fa fa-trash"></i></a>
                            
                           
                 </div>
                 <?php } ?>
				<!----> 		
			</div>
		</div>
		<!--//content-->


	 
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
	
	<?php if ($this->session->flashdata('notif_success')): ?>
                            <script>
                                swal({
                                    title: "Success",
                                    text: "<?php echo $this->session->flashdata('notif_success'); ?>",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('notif_failed')): ?>
                            <script>
                                swal({
                                    title: "Failed",
                                    text: "<?php echo $this->session->flashdata('notif_failed'); ?>",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'error'
                                });
                            </script>
                    <?php endif; ?>

    <script type="text/javascript">
    	$(document).ready(function(){
    
    $("a#go_step").click(function(){
    $(this).next().children( "#goo" ).click();     
    return false;
}); 
});

    	$("button.publishh").click(function(event) {
        if (confirm('Anda akan mengubah status publish course ini, anda yakin?')) {
              var random_code = $(this).attr('id');
              var status = $(this).html();
              if (random_code != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>course/edit_publish",
                      type: 'post',
                      context: this,
                      data: {
                          random_code: random_code, status : status
                      },
                      success: function(e) {
                        if (e == 'true') {
                          if (status == 'Publish Now') {
                                 $(this).html('Unpublish Now');
                                }
                                else{
                                  $(this).html('Publish Now');
                                }
                      }
                      else{
                        alert('Maaf, anda belum menambahkan content course');
                      }
                      }
                  });
              }
              }
          });
	  
	
// 	window.onbeforeunload = function (event) {
//     var message = 'Important: Please click on \'Save\' button to leave this page.';
//     if (typeof event == 'undefined') {
//         event = window.event;
//     }
//     if (event) {
//         event.returnValue = message;
//     }
//     return message;
// };

</script>

</body>
</html>

