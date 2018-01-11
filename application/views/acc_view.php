<style type="text/css">
  body{
    background: #eee;
  }
</style>
<div class="container">
<div class="row">
        <div class="col-md-9">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">

                                    

                                  <?php
                  $subss_amount = '0';
                    if (!empty($subs_amount)) {
                if(array_key_exists($user_info->id_user, $subs_amount)) {
                $subss_amount =  $subs_amount[$user_info->id_user];
                } 
              } 
                  if ($this->session->userdata('logged_id') == $user_info->id_user) {

                 ?>

                 <button class="btn btn-default btn-xs pull-right" style="margin-left: 25px;"><i class="fa fa-pencil"></i><a href="#" data-toggle="modal" data-target="#edituser"> Edit Account</a></button>
                 <button class="btn btn-default btn-xs pull-right" style="margin-left: 25px;"><i class="fa fa-plus"></i><a href="#" data-toggle="modal" data-target="#modalpost"> Add Course</a></button>
                 <?php
    /*$notif = $this->session->flashdata('notif');*/
     if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
          } ?>

                 <button class="btn btn-danger btn-xs pull-right"><a href="#" data-toggle="modal" data-target="" class="subs_false"><i class="fa fa-users"></i> Subscriber  <?php echo $subss_amount; ?></a></button>
                 <?php }
                 else { 
              
            
                    $text = 'Subscribe';
                    $subs = 'btn-danger'; #button class
                    $a_subs ='subs_false' ; #a class
                    $i_subs ='fa fa-plus'; #i class
                  if (!empty($subscribed)) {
                    if(in_array($user_info->id_user, $subscribed)) {
                    $text = 'Disubscribe';
                    $subs = 'btn-default'; #button class
                    $a_subs ='subs_true' ; #a class
                    $i_subs ='fa fa-users'; #i class
                  }
                }
              
                  ?>

                  <button class="btn <?php echo $subs; ?> subs_in pull-right" id="<?php echo $user_info->id_user; ?>"><a href="#" class="<?php echo $a_subs; ?>"><i class="<?php echo $i_subs; ?>"></i> <?php echo $text; ?>  <?php echo $subss_amount; ?></a></button>
                  <!-- <button class="btn btn-default"><a href="#" data-toggle="modal" data-target=""><i class="fa fa-users"></i> Disubscribe  1000</a></button> -->
                <?php } ?>

                <?php 
                  if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>

                  <!-- Modal edit user -->
                    <div class="modal fade" id="edituser" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                      <!-- Modal content-->
                        <div class="modal-content news-w3l">
                            <div class="modal-header">
                              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
                              <h4> Edit Profile</h4>
                              <!--newsletter-->
                              <div class="login-main wthree">
                                 <form action="<?php echo base_url(); ?>myaccount/edit_user" method="post" enctype="multipart/form-data">
                                <input type="text" placeholder="Name" value="<?php echo $user_info->name ?>" name="name" class="form-control">
                                <input type="email" placeholder="Email" required="" name="email" value="<?php echo $user_info->email ?>" class="form-control">
                                <input type="text" name="username" placeholder="Username" value="<?php echo $user_info->username ?>" disabled class="form-control">
                                <input type="text" placeholder="City" name="city" value="<?php echo $user_info->city ?>" class="form-control">
                                <input type="text" name="bio" placeholder="Bio" value="<?php echo $user_info->bio ?>" class="form-control">
                                <input type="submit" value="Save" name="submit">
                                
                              </form>
                              </div>    
                            </div>
                          </div>
                        </div>
                       </div>
                      <div class="clearfix"></div>
                      <div class="modal fade" id="modalpost" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
      <!-- Modal content-->
      <div class="modal-content news-w3l">
        <div class="modal-header">
              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
              <h4>Add New Course</h4>
              <!--newsletter-->
              <div class="login-main wthree">
               <form action="<?php echo base_url(); ?>myaccount/newcourse_title" method="post" enctype="multipart/form-data">
                Course Name
                <input class="form-control" name="coursename" type="text">
                Subject
                <select class="form-control" name="subject">
                                <option>--Pilih--</option>
                                <?php 
                                foreach ($list_subject as $sbj) {
                                 ?>
                                    <option value="<?php echo $sbj->text ?>"><?php echo $sbj->text ?></option>
                                <?php                      
                            } ?>
                                </select>
                                Description
                                <textarea name="description" class="form-control"> </textarea>
                                
              <!-- <label for="file-upload" class="custom-file-upload ">
                <span class="glyphicon glyphicon-upload"></span>  Upload Thumbnail
              </label> -->
                <br/>
                Choose Thumbnail
                <input id="file-upload" name="thumbnail" type="file" class="form-control"/>
              
                <input type="submit" name="submit" value="Create Now">
              </form>
              </div>
            <!--//newsletter-->     
        </div>
      </div>
    </div>
  </div>
                  <!-- //Modal edit user -->
                 <?php }
                 ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <?php 
                                  if ($this->session->userdata('logged_id') == $user_info->id_user) {
                                   ?>
                                   <form id="formfoto" action="<?php echo base_url();?>myaccount/editphoto" method="post" enctype="multipart/form-data">
                                      <div class="custom-input-file" id="previewavatar" style="background-image:url('<?php echo base_url() ?>assets/images/<?php echo $user_info->photo; ?>');border-radius: 50%; float: left; margin-left: 80px;">
                                          <label class="uploadPhoto">
                                              Edit
                                              <input type="file" id="filefoto" name="photoprofile" class="change-avatar changephoto">
                                          </label>
                                      </div>
                                   </form>
                                   <?php }
                                   else { ?>
                                  <div>
                                      <img src="<?php echo base_url() ?>assets/images/<?php echo $user_info->photo; ?>" alt="" class="img-responsive profile-photo" style="border-radius: 50%; float: left;" height="200px" width="200px" />
                                  </div>
                                      <?php } ?>
                            </div>
                            <div class="col-lg-7" id="cluster_info">
                                <dl class="dl-horizontal" style="margin-top: 25px;">

                                    <dt>Name:</dt> <dd><?php echo $user_info->name; ?></dd>
                                    <dt>Bio:</dt> <dd><?php echo $user_info->bio; ?></dd>
                                    <dt>Location:</dt> <dd><?php echo $user_info->city; ?></dd>
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                            <div class="panel blank-panel">
                            <div class="panel-heading">
                                <div class="panel-options">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab-1" data-toggle="tab" aria-expanded="false">List Course</a></li>
                                        <?php if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>
                                        <li class=""><a href="#tab-2" data-toggle="tab" aria-expanded="false">All Notifications</a></li>
                                        <?php }  ?>
                                        <li class=""><a href="#tab-3" data-toggle="tab" aria-expanded="true">Enroll Course</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                            <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                             <table class="table table-striped">
                                    <?php if (!empty($list_courses)) { ?>
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Description</th>
                                        <th>Visitor</th>
                                        <th>Created</th>
                                        <th>Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <?php
                                        $i=1; 
                                        
                                        foreach ($list_courses as $courses) {  ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $courses->title ?></td>
                                        <td><?php echo $courses->subject ?></td>
                                        <td>
                                        <p class="small">
                                            <?php echo substr($courses->description, 0,105) ?>...
                                        </p>
                                        </td>
                                        <td><?php echo $courses->visitor ?></td>
                                        <td><?php echo $courses->created_at ?></td>
                                        <td><?php echo $courses->last_update ?></td>
                                        <td><a href="#" data-toggle="modal" data-target="#lesson" id="<?php echo $courses->random_code ?>" class="btn btn-xs btn-success lesson_view" title="enroll course"><i class="fa fa-search"></i></a><br><a href="<?php echo base_url().'discuss/'.$courses->random_code ?>" class="btn btn-xs btn-info" title="discussion course"><i class="fa fa-comment"></i></a><br>
                                          <?php 
                                  if ($this->session->userdata('logged_id') == $user_info->id_user) { ?> <a href="<?php echo base_url().'add_course/'.$courses->random_code ?>" class="btn btn-xs btn-danger"><i class="fa fa-pencil"></i></a>
                                          <?php } ?>
                                        </td>
                                        

                                    </tr>
                                    <?php } }
                                    else {
                                      echo '<img src="'.base_url().'assets/images/Asset 44.png" alt="" width="200px" style="display: block;margin: 0 auto;"/>';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>
                            <div class="tab-pane" id="tab-2">
                                <div class="feed-activity-list" id="big_notif">
                                    
                                </div>

                            </div>
                            <?php }  ?>
                            <div class="tab-pane" id="tab-3">

                                <table class="table table-striped">
                                  <?php if (!empty($enroll)) { ?>
                                    <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Course Maker</th>
                                      <th>Course</th>
                                      <th>Subject</th>
                                      <th>Date Time</th>
                                      <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $i=1; 
                                        
                                        foreach ($enroll as $courses) {  ?>
                                        <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $courses->name ?></td>
                                        <td><?php echo $courses->title ?></td>
                                        <td>
                                        <span class="label label-primary"><?php echo $courses->subject ?></span>
                                        </td>
                                        <td><?php echo $courses->created_at ?></td>
                                        <td><a href="#" data-toggle="modal" data-target="#lesson" id="<?php echo $courses->random_code ?>" class="btn btn-xs btn-success lesson_view" title="enroll course"><i class="fa fa-search"></i></a><br><a href="<?php echo base_url().'discuss/'.$courses->random_code ?>" class="btn btn-xs btn-info" title="discussion course"><i class="fa fa-comment"></i></a><br>
                                        </td>
                                        

                                    </tr>
                                    <?php } }
                                    else {
                                      echo '<img src="'.base_url().'assets/images/Asset 44.png" alt="" width="200px" style="display: block;margin: 0 auto;"/>';
                                    } ?>
                                    </tbody>
                                </table>

                            </div>
                            </div>

                            </div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="wrapper wrapper-content project-manager">
                <!-- <h4>Project description</h4> -->
                <!-- <p class="small">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                </p> -->
                <!-- <p class="small font-bold">
                    <span><i class="fa fa-circle text-warning"></i> Other Courses</span>
                </p> -->
                <h5>Other Courses</h5>
                <ul class="tag-list" style="padding: 0">
                    <?php foreach ($other_courses as $oc) { ?>
                    <li><a href="<?php echo base_url().'lesson/'.$oc->random_code; ?>"><i class="fa graduation-cap"></i> <?php echo $oc->title ?></a></li>
                 <?php } ?>
                </ul>
                <br>
                <h5>Other User</h5>
                <ul class="tag-list" style="padding: 0">
                    <?php foreach ($other_user as $ou) { ?>
                    <li><a href="<?php echo base_url().$ou->username; ?>"><i class="fa fa-user"></i> <?php echo $ou->name ?></a></li>
                 <?php } ?>
                </ul>
                <!-- <h5>Project files</h5> -->
                <!-- <ul class="list-unstyled project-files">
                    <li><a href="#"><i class="fa fa-file"></i> Project_document.docx</a></li>
                    <li><a href="#"><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                    <li><a href="#"><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                    <li><a href="#"><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                </ul> -->
                <!-- <div class="text-center m-t-md">
                    <a href="#" class="btn btn-xs btn-primary">Add files</a>
                    <a href="#" class="btn btn-xs btn-primary">Report contact</a>

                </div> -->
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>
<script type="text/javascript">
        function big_notif() {
                var big_notif = <?php echo $user_info->id_user ?>;
          
                  $.ajax({
              url:"<?php echo base_url(); ?>home/big_notif",
              method:"POST",
              data:{big_notif:big_notif},
              success:function(e){
                $('div#big_notif').html(e);
              }
            });
              }
          window.onload = big_notif;
      </script>
<?php }  ?>

<script type="text/javascript">
<?php if ($this->session->userdata('logged_id') == $user_info->id_user) { ?>
  document.getElementById("filefoto").onchange = function() {
        document.getElementById("formfoto").submit();
  }  
  <?php } ?>


  $('button.subs_in').click(function(event) {
    <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>
    var id_user = $(this).attr('id');
    // alert(id_user);
    $.ajax({
                    url: '<?php echo base_url(); ?>home/subs_up',
                    type: 'post',
                    context: this,
                    data: {id_user : id_user},
                    success: function(e){
                          if(e == "false") {alert('Maaf, subs_up anda gagal');}
                         
                         else  {
                          if($(this).hasClass('btn-default')){
                          $(this).removeClass('btn-default');
                          $(this).addClass('btn-danger');
                          
                          $(this).html('<a href="#" class="subs_false"><i class="fa fa-plus"></i> Subscribe  '+e+'</a>');
                          }
                          else{
                          $(this).removeClass('btn-danger');
                          $(this).addClass('btn-default');
                          
                          $(this).html('<a href="#" class="subs_true"><i class="fa fa-users"></i> Disubscribe  '+e+'</a>');
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
          
  });
  setInterval(function(){ big_notif() }, 5000);
</script>