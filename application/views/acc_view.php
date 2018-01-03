
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

                  <button class="btn <?php echo $subs; ?> subs_in pull-right" id="<?php echo $user_info->id_user; ?>"><a href="#" data-toggle="modal" data-target="" class="<?php echo $a_subs; ?>"><i class="<?php echo $i_subs; ?>"></i> <?php echo $text; ?>  <?php echo $subss_amount; ?></a></button>
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
                                   <form id="formfoto" class="" action ="<?php echo base_url();?>myaccount/editphoto" method="post" enctype="multipart/form-data">
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
                                        <li class=""><a href="#tab-2" data-toggle="tab" aria-expanded="false">All Notifications</a></li>
                                        <li class=""><a href="#tab-3" data-toggle="tab" aria-expanded="true">Last activity</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                            <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                             <table class="table table-striped">
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
                                      <!-- <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td> -->
                                        <?php
                                        $i=1; 
                                        foreach ($list_courses as $courses) {  ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $courses->title ?></td>
                                        <td><?php echo $courses->subject ?></td>
                                        <td>
                                        <p class="small">
                                            <?php echo $courses->description ?>
                                        </p>
                                        </td>
                                        <td><?php echo $courses->visitor ?></td>
                                        <td><?php echo $courses->created_at ?></td>
                                        <td><?php echo $courses->last_update ?></td>
                                        <td><a href="<?php echo base_url().'lesson/'.$courses->random_code ?>" class="btn btn-xs btn-success"><i class="fa fa-search"></i></a><br><a href="<?php echo base_url().'discuss/'.$courses->random_code ?>" class="btn btn-xs btn-info"><i class="fa fa-comment"></i></a><br>
                                          <?php 
                                  if ($this->session->userdata('logged_id') == $user_info->id_user) { ?> <a href="<?php echo base_url().'add_course/'.$courses->random_code ?>" class="btn btn-xs btn-danger"><i class="fa fa-pencil"></i></a>
                                          <?php } ?>
                                        </td>
                                        

                                    </tr>
                                    <?php } ?>
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
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Activity</th>
                                        <th>Description</th>
                                        <th>Datetime</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="big_activity">
                                      
                                        
                                   
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
                <h4>Project description</h4>
                <p class="small">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                </p>
                <p class="small font-bold">
                    <span><i class="fa fa-circle text-warning"></i> High priority</span>
                </p>
                <h5>Project tag</h5>
                <ul class="tag-list" style="padding: 0">
                    <li><a href="#"><i class="fa fa-tag"></i> biword</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i> Lorem ipsum</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i> Passages</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i> Variations</a></li>
                </ul>
                <h5>Project files</h5>
                <ul class="list-unstyled project-files">
                    <li><a href="#"><i class="fa fa-file"></i> Project_document.docx</a></li>
                    <li><a href="#"><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                    <li><a href="#"><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                    <li><a href="#"><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                </ul>
                <div class="text-center m-t-md">
                    <a href="#" class="btn btn-xs btn-primary">Add files</a>
                    <a href="#" class="btn btn-xs btn-primary">Report contact</a>

                </div>
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
              // dataType:"json",
              success:function(e){
                // var data = e.split("|");
                // alert(data);
                $('div#big_notif').html(e);
              }
            });
              }
       
          window.onload = big_notif;
          
      </script>
<?php }  ?>
<!-- <script type="text/javascript">
   function big_activity() {
                var big_activity = <?php echo $user_info->id_user ?>;
          
                  $.ajax({
              url:"<?php echo base_url(); ?>home/big_activity",
              method:"POST",
              data:{big_activity:big_activity},
              // dataType:"json",
              success:function(e){
                // var data = e.split("|");
                // alert(data);
                $('tbody#big_activity').html(e);
              }
            });
              }
              window.onload = big_activity;
</script> -->
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
                          
                          $(this).html('<a href="#" data-toggle="modal" data-target="" class="subs_false"><i class="fa fa-plus"></i> Subscribe  '+e+'</a>');
                          }
                          else{
                          $(this).removeClass('btn-danger');
                          $(this).addClass('btn-default');
                          
                          $(this).html('<a href="#" data-toggle="modal" data-target="" class="subs_true"><i class="fa fa-users"></i> Disubscribe  '+e+'</a>');
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