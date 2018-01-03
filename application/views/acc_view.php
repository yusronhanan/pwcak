
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">T-Learning</a>


    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="<?php echo base_url() ?>course">Course</a></li>
      <li><a href="<?php echo base_url() ?>discussion">Discussion</a></li>
      <li class="active"><a href="<?php echo base_url().$username_id; ?>">My Account</a></li>
    </ul>
 <!--    <button class="btn btn-danger navbar-btn">Button</button> -->
  <!-- </div>
</nav> -->


<div class="container">
<div class="row">
        <div class="col-md-9">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">

                                    <!-- <?php
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

                                    <button class="btn <?php echo $subs; ?> subs_in" id="<?php echo $user_info->id_user; ?>"><a href="#" data-toggle="modal" data-target="" class="<?php echo $a_subs; ?>"><i class="<?php echo $i_subs; ?>"></i> <?php echo $text; ?>  <?php echo $subss_amount; ?></a></button>
                                    <!-- <button class="btn btn-default"><a href="#" data-toggle="modal" data-target=""><i class="fa fa-users"></i> Disubscribe  1000</a></button> -->
                                  <?php } ?>

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
                                        <li class=""><a href="#tab-1" data-toggle="tab" aria-expanded="false">My Course</a></li>
                                        <li class=""><a href="#tab-2" data-toggle="tab" aria-expanded="false">All Notifications</a></li>
                                        <li class="active"><a href="#tab-3" data-toggle="tab" aria-expanded="true">Last activity</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                            <div class="tab-content">
                            <div class="tab-pane" id="tab-1">
                              -coursenya-
                            </div>
                            <div class="tab-pane active" id="tab-2">
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-3">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Title</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                           Create project in webapp
                                        </td>
                                        <td>
                                           12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                        <p class="small">
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                        </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            Various versions
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            There are many variations
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            Latin words
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Latin words, combined with a handful of model sentence structures
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            The generated Lorem
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            The first line
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            The standard chunk
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                            Lorem Ipsum is that
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            Contrary to popular
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            </p>
                                        </td>

                                    </tr>

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

          <!--  -->