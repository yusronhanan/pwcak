<!--
  Author: W3layouts
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
<!-- //online-fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">

<style type="text/css">
  .custom-input-file {
    overflow: hidden;
    position: relative;
    width: 200px;
    height: 200px;
    background-repeat: no-repeat;
    /*background-attachment: fixed;*/
    background-position: center; 
    background-size: 200px;
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

h6.thumb_true {
  background: #d95459;
  color:#fff;
}
a.subs_false{
  color:#fff;
}
a.subs_true{
  color:#d9534f;
}

body{margin-top:20px;
background:#eee;
}
/* PROJECTS */
.project-people,
.project-actions {
  text-align: right;
  vertical-align: middle;
}
dd.project-people {
  text-align: left;
  margin-top: 5px;
}
.project-people img {
  width: 32px;
  height: 32px;
}
.project-title a {
  font-size: 14px;
  color: #676a6c;
  font-weight: 600;
}
.project-list table tr td {
  border-top: none;
  border-bottom: 1px solid #e7eaec;
  padding: 15px 10px;
  vertical-align: middle;
}
.project-manager .tag-list li a {
  font-size: 10px;
  background-color: white;
  padding: 5px 12px;
  color: inherit;
  border-radius: 2px;
  border: 1px solid #e7eaec;
  margin-right: 5px;
  margin-top: 5px;
  display: block;
}
.project-files li a {
  font-size: 11px;
  color: #676a6c;
  margin-left: 10px;
  line-height: 22px;
}

/* PROFILE */
.profile-content {
  border-top: none !important;
}
.profile-stats {
  margin-right: 10px;
}
.profile-image {
  width: 120px;
  float: left;
}
.profile-image img {
  width: 96px;
  height: 96px;
}
.profile-info {
  margin-left: 120px;
}
.feed-activity-list .feed-element {
  border-bottom: 1px solid #e7eaec;
}
.feed-element:first-child {
  margin-top: 0;
}
.feed-element {
  padding-bottom: 15px;
}
.feed-element,
.feed-element .media {
  margin-top: 15px;
}
.feed-element,
.media-body {
  overflow: hidden;
}
.feed-element > .pull-left {
  margin-right: 10px;
}
.feed-element img.img-circle,
.dropdown-messages-box img.img-circle {
  width: 38px;
  height: 38px;
}
.feed-element .well {
  border: 1px solid #e7eaec;
  box-shadow: none;
  margin-top: 10px;
  margin-bottom: 5px;
  padding: 10px 20px;
  font-size: 11px;
  line-height: 16px;
}
.feed-element .actions {
  margin-top: 10px;
}
.feed-element .photos {
  margin: 10px 0;
}
.feed-photo {
  max-height: 180px;
  border-radius: 4px;
  overflow: hidden;
  margin-right: 10px;
  margin-bottom: 10px;
}
.file-list li {
  padding: 5px 10px;
  font-size: 11px;
  border-radius: 2px;
  border: 1px solid #e7eaec;
  margin-bottom: 5px;
}
.file-list li a {
  color: inherit;
}
.file-list li a:hover {
  color: #1ab394;
}
.user-friends img {
  width: 42px;
  height: 42px;
  margin-bottom: 5px;
  margin-right: 5px;
}

.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}
ul.notes li,
ul.tag-list li {
  list-style: none;
}
</style>
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
  font-size: 1.5rem;
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
  $avame = base_url().'assets/images/'.$maker_info->photo;
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
  /*font-size: 1.5rem;*/
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
a.subs_false{
  color:#fff;
}
a.subs_true{
  color:#d9534f;
}
</style>
<!-- <script type="text/javascript">
  function mini_notif() {
          var mini_notif = 'mini_notif';
    
            $.ajax({
        url:"<?php echo base_url(); ?>home/mini_notif",
        method:"POST",
        data:{mini_notif:mini_notif},
        // dataType:"json",
        success:function(e){
          var data = e.split("|");
          // alert(data);
          $('ul#mininotif').html(data[0]);
          if (data[1] == '0') {
                        $('span#amountnotif').addClass('hidden');
                       }
                  else{
                          $('span#amountnotif').removeClass('hidden');  
                       }
          $('span#amountnotif').html(data[1]);
        }
      });
        }
    window.onload = mini_notif;
</script> -->
</head>
<body>
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

  <!-- //navigation -->
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() ?>">Home</a></li>
      <li><a href="<?php echo base_url() ?>course">Course</a></li>
      <li  class="active"><a href="<?php echo base_url() ?>discussion">Discussion</a></li>
      <li><a href="<?php echo base_url().$username_id; ?>">My Account</a></li>
    </ul>
    <button class="btn btn-danger navbar-btn">Button</button>
  </div>
</nav>
  <!-- sini -->

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
                if(array_key_exists($maker_info->id_user, $subs_amount)) {
                $subss_amount =  $subs_amount[$maker_info->id_user];
                } 
              } 
                  if ($this->session->userdata('logged_id') == $maker_info->id_user) {

                 ?>
                 <button class="btn btn-danger pull-right"><a href="#" data-toggle="modal" data-target="" class="subs_false"><i class="fa fa-users"></i> Subscriber  <?php echo $subss_amount; ?></a></button>
                 <?php }
                 else { 
              
            
                    $text = 'Subscribe';
                    $subs = 'btn-danger'; #button class
                    $a_subs ='subs_false' ; #a class
                    $i_subs ='fa fa-plus'; #i class
                  if (!empty($subscribed)) {
                    if(in_array($maker_info->id_user, $subscribed)) {
                    $text = 'Disubscribe';
                    $subs = 'btn-default'; #button class
                    $a_subs ='subs_true' ; #a class
                    $i_subs ='fa fa-users'; #i class
                  }
                }
              
                  ?>

                  <button class="btn <?php echo $subs; ?> subs_in pull-right" id="<?php echo $maker_info->id_user; ?>"><a href="#" data-toggle="modal" data-target="" class="<?php echo $a_subs; ?>"><i class="<?php echo $i_subs; ?>"></i> <?php echo $text; ?>  <?php echo $subss_amount; ?></a></button>
                  <!-- <button class="btn btn-default"><a href="#" data-toggle="modal" data-target=""><i class="fa fa-users"></i> Disubscribe  1000</a></button> -->
                <?php } ?>
                                    <!-- <a href="#" class="btn btn-white btn-xs pull-right">Edit project</a> -->
                                    <h2><?php  echo $title_info->title ?></h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>Subject:</dt> <dd><span class="label label-primary"><?php  echo $title_info->subject ?></span></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <dl class="dl-horizontal">

                                    <dt>Created by:</dt> <dd><?php echo $maker_info->name ?></dd>
                                    <dt>Username:</dt> <dd>  <a href="<?php echo base_url().$maker_info->username; ?>" target="_blank" class="text-navy">@<?php echo $maker_info->username ?></a></dd>
                                    <dt>Description:</dt> <dd> <?php  echo $title_info->description ?></dd>
                                    <dt>Visitor:</dt> <dd>     <?php  echo $title_info->visitor ?> </dd>
                                </dl>
                            </div>
                            <div class="col-lg-7" id="cluster_info">
                                <dl class="dl-horizontal">

                                    <dt>Last Updated:</dt> <dd><?php  echo $title_info->last_update ?></dd>
                                    <dt>Created:</dt> <dd>  <?php  echo $title_info->created_at ?> </dd>
                                    <dt>Participants:</dt>
                                    <dd class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                    <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png"></a>
                                    <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png"></a>
                                    <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png"></a>
                                    <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png"></a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <dl class="dl-horizontal">
                                    <dt>Completed:</dt>
                                    <dd>
                                        <div class="progress progress-striped active m-b-sm">
                                            <div style="width: 60%;" class="progress-bar"></div>
                                        </div>
                                        <small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                    </dd>
                                </dl>
                            </div>
                        </div> -->
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                            <div class="panel blank-panel">
                            <div class="panel-heading">
                                <div class="panel-options">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab-1" data-toggle="tab" aria-expanded="true">Comment Discussion</a></li>
                                        <li class=""><a href="#tab-2" data-toggle="tab" aria-expanded="false">List Discussion</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                            <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                               <!--  <div class="feed-activity-list">
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
                                </div> -->
    <div class='comment-wrap'>
        <div class='photo'>
        <div class='ava-me'>
      </div>
      </div>
      <div class='comment-block'>
        <!-- <ul class='comment-actions'>
        <li class='reply' id='dell_reply' title='Delete'><i class='fa fa-trash' aria-hidden='true'>
      </i>
      </li>
      </ul> -->
      <form action=''>
        <textarea name='subject' id='subject' cols='30' rows='1' placeholder='Subject'></textarea>
        <hr>
      <textarea name='text_comment' id='text_comment' cols='30' rows='3' placeholder='Comment Text'></textarea>
      </form>
      <ul class='comment-actions'>
        <li class='reply' title='New'>
        <i class='fa fa-paper-plane' aria-hidden='true'>
      </i></li>
      </ul>
      </div>
    </div>                            
                         <?php if (!empty($list_comment)) { ?>

        
    
    
    <?php foreach ($list_comment as $comment) {
      ?>
      <div class="comment-wrap">
        <div class="photo">
            <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>

        </div>
        <div class="comment-block">
          <?php 
          if(array_key_exists($comment->from_id, $username)) {
          $usrnm =  $username[$comment->from_id];
          }?>
          <h5 style="color: #d9534f;"><?php  echo $comment->subject ?> <a href="<?php echo base_url().$usrnm; ?>"><span style="font-size: 1.5rem;" class="userspan">@<?php echo $usrnm; ?></span></a>
            <?php  
              if ($this->session->userdata('logged_id') == $comment->from_id) {
                 ?>
                <span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">you</span>
              <?php
              }
              else if($comment->from_id == $maker_info->id_user){
                ?>
                <span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">creator</span>
              <?php
              }
             ?>
            </h5>
          <!-- <div class="bottom-comment"> -->
            <ul class="comment-actions">
                    <li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li>
                </ul>
          <!-- </div> -->
            <p class="comment-text" style="color:black;"><?php echo $comment->text_comment ?></p>
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
                    if(array_key_exists($comment->id_action, $like_amount)) {
                    $likes =  $like_amount[$comment->id_action];
                    }
                    $thumb = '';
                    if (!empty($liked)) {
                        if(in_array($comment->id_action, $liked)) {
                        $thumb = 'thumb_true';
                    }
                    }
                    if(array_key_exists($comment->id_action, $dislike_amount)) {
                      $dislikes =  $dislike_amount[$comment->id_action];
                    }
                    $thumbb = '';
                    if (!empty($disliked)) {
                        if(in_array($comment->id_action, $disliked)) {
                        $thumbb = 'thumb_true';
                    }
                    }
                     if(array_key_exists($comment->id_action, $reply_amount)) {
                      $replies =  $reply_amount[$comment->id_action];
                    }
                    ?>
                    <li class="reply likes_comment <?php echo $thumb; ?>" id="<?php echo $comment->id_action ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $likes; ?></li>
                    <li class="reply dislikes_comment <?php echo $thumbb; ?>" id="<?php echo $comment->id_action ?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <?php echo $dislikes; ?></li>
                    <li class="reply" id="reply-c"><i class="fa fa-reply" aria-hidden="true"></i> <?php echo $replies; ?></li>
                    <?php if($this->session->userdata('logged_id') == $comment->from_id) { ?>
                    <li class="reply delete" id="<?php echo $comment->id_action ?>"><i class="fa fa-trash" aria-hidden="true"></i></li>
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
        <li class='reply' title='Send' id="<?php echo $comment->id_action ?>">
        <i class='fa fa-paper-plane' aria-hidden='true'>
      </i></li>
      </ul>
      </div>
    </div>
    <?php
          // 0 subject,1 username, 2 text_comment, 3 created at, 4 total reply comment, 5 id action

    foreach ($list_reply_comment as $reply_comment) {
       if ($comment->id_action == $reply_comment->reply_id) { 
       ?>
<div class="comment-reply">
  <div class="photo">
  <div class="ava-me"></div></div>
<div class="comment-block">
  <?php 
          if(array_key_exists($reply_comment->from_id, $username)) {
          $usrnm =  $username[$reply_comment->from_id];
          }?>
          <h5 style="color: #d9534f;"><?php  echo $reply_comment->subject ?> <a href="<?php echo base_url().$usrnm; ?>"><span style="font-size: 1.5rem;" class="userspan">@<?php echo $usrnm; ?></span></a>
            <?php  
              if ($this->session->userdata('logged_id') == $reply_comment->from_id) {
                 ?>
                <span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">you</span>
              <?php
              }
              else if($reply_comment->from_id == $maker_info->id_user){
                ?>
                <span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">creator</span>
              <?php
              }
             ?>
            </h5>
<ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;"><?php  echo $reply_comment->text_comment ?></p>
  <div class="bottom-comment">
                <div class="comment-date"><?php
                $this->load->helper('date');
                $timestamp = strtotime($reply_comment->created_at);
                // $nowstr = strtotime(time());
              
                $time = timespan($timestamp, time()) . ' ago';
                echo $time;
                   ?></div>
                <ul class="comment-actions">
          <?php 
                    if(array_key_exists($reply_comment->id_action, $like_amount)) {
                    $likes =  $like_amount[$reply_comment->id_action];
                    }
                    $thumb = '';
                    if (!empty($liked)) {
                        if(in_array($reply_comment->id_action, $liked)) {
                        $thumb = 'thumb_true';
                    }
                    }
                    if(array_key_exists($reply_comment->id_action, $dislike_amount)) {
                      $dislikes =  $dislike_amount[$reply_comment->id_action];
                    }
                    $thumbb = '';
                    if (!empty($disliked)) {
                        if(in_array($reply_comment->id_action, $disliked)) {
                        $thumbb = 'thumb_true';
                    }
                    }
                     
                    ?>
                    <li class="reply likes_comment <?php echo $thumb; ?>" id="<?php echo $reply_comment->id_action ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $likes; ?></li>
                    <li class="reply dislikes_comment <?php echo $thumbb; ?>" id="<?php echo $reply_comment->id_action ?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <?php echo $dislikes; ?></li>
                    <?php if($this->session->userdata('logged_id') == $reply_comment->from_id) { ?>
                    <li class="reply delete" id="<?php echo $reply_comment->id_action ?>"><i class="fa fa-trash" aria-hidden="true"></i></li>
                    <?php } ?>
                </ul>
                  </div>
  </div></div>
    <?php }
}
    }
    } 
    else{
    ?><div class="container">
              <div class="row">
       <div id="about" class="about">
          <div class="container">
                  <h1> <span>Waw!</span></h1>
                  <h2>There is no discussion, let's make!</h2>
          </div>
      </div>

    </div>
  </div>
    <?php } ?>

                            </div>
                            <div class="tab-pane" id="tab-2">
                                 <?php if (!empty($list_comment)) { ?>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <!-- <th>Status</th> -->
                                        <th>Subject</th>
                                        <th>Time Created</th>
                                        <th>Reply Amount</th>
                                        <th>Text Comment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                <?php foreach ($list_comment as $comment) { ?>
                                    <tr>
                                        <!-- <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td> -->
                                        <td>
                                           <?php echo $comment->subject ?>
                                        </td>
                                        <td>
                                             <?php
                                          $this->load->helper('date');
                                          $timestamp = strtotime($comment->created_at);
                                          // $nowstr = strtotime(time());
                
                                          $time = timespan($timestamp, time()) . ' ago';
                                          echo $time;?>
                                        </td>
                                        <td>
                                           <?php  
                                           if(array_key_exists($comment->id_action, $reply_amount)) {
                                             $repliess =  $reply_amount[$comment->id_action];
                                            echo $repliess;
                                            } ?>
                                        </td>
                                        <td>
                                        <p class="small">
                                            <?php echo $comment->text_comment ?>
                                        </p>
                                        </td>

                                    </tr>
                                <?php  } ?>
                                    </tbody>
                                </table>
                                <?php  } ?>

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
<!-- sini -->

              <!-- <div class="timeline-nav-bar hidden-sm hidden-xs">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="profile-info">
                            <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
                            <h3><?php echo $user_data->name ?></h3>
                            <p class="text-muted"><?php echo $user_data->interest ?></p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <ul class="list-inline profile-menu"> -->

                            <!-- <li><a href="<?php echo base_url() ?>MyAccount" <?php if($active == 'timeline'){echo 'class="active"';} ?> >Timeline</a></li>
                            <li><a href="<?php echo base_url() ?>MyAccount/About" <?php if($active == 'about'){echo 'class="active"';} ?>>About</a></li> -->
                            <!-- <li><a href="<?php echo base_url() ?>MyAccount/#">Album</a></li> -->

                            <!-- <li><a href="<?php echo base_url() ?>MyAccount/Following" <?php if($active == 'following'){echo 'class="active"';} ?>>Following</a></li>
                            <li><a href="<?php echo base_url() ?>MyAccount/Follower" <?php if($active == 'follower'){echo 'class="active"';} ?>>Follower</a></li>
                          </ul>
                          <ul class="follow-me list-inline">
                            <li>1,299 people following you</li>
                            <li><a href="<?php echo base_url() ?>MyAccount/#"><button class="btn-primary">Edit Account</button></a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->


  

            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
              <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4>Educational</h4>
                      <img src="<?php echo base_url() ?>assets/images/e2.jpg" alt="blog-image" />
                      <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
                  </div>
                </div>
            
              </div>
               </div>
             <!-- //Modal1 -->
            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >
              <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4>Educational</h4>
                      <img src="<?php echo base_url() ?>assets/images/e1.jpg" alt="blog-image" />
                      <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
                  </div>
                </div>
            
              </div>
               </div>

             <!-- //Modal1 -->
            <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" >
              <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4>Educational</h4>
                      <img src="<?php echo base_url() ?>assets/images/e3.jpg" alt="blog-image" />
                      <span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium.</span>
                  </div>
                </div>
            
              </div>
               </div>
             <!-- //Modal1 -->

<!-- //post courses -->


<!--tidak ada course-->
<!-- <div id="about" class="about">
  <div class="container">
      <h1> <span>Wohoo!</span></h1>
      <h2>No course to preview.</h2>
  </div>
</div> -->
  
  <div class="clearfix"></div>
<!--//tidak ada course-->


<!-- footer -->
  <!-- <div class="footer" id="footer">
    <div class="container">
      <div class="col-md-4 agileinfo_footer_grid">
        <h4>About Us</h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
          fugiat nulla pariatur. <span>Excepteur sint occaecat cupidatat non proident 
          sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
      </div>
      <div class="col-md-4 agileinfo_footer_grid mid-w3l nav2">
        <h4>Options</h4>
        <ul>
          <li><a href="<?php echo base_url(); ?>home" class="active">Home</a></li>
          <li><a href="<?php echo base_url(); ?>course" class="active">Course</a></li>
          <li><a href="#services" class="scroll">QnA</a></li>
          <li><a href="#gallery" class="scroll">My Account</a></li>
        </ul>
      </div>
      <div class="col-md-4 agileinfo_footer_grid">
        <h4>Address</h4>
        <ul>
          <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City</li>
          <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
          <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
        </ul>
      </div> -->
      
      <!-- <div class="clearfix"> </div>
      <div class="w3agile_footer_copy">
        <p>© 2017 Educational. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts.</a></p>
      </div> -->
    <!-- </div>
  </div> -->

<!-- //footer -->



<!--disini-->

<!-- js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>


<script src="<?php echo base_url(); ?>assets/js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chocolat.css" type="text/css" media="screen">
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
      

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->

  <!-- bottom-top -->
  <!-- smooth scrolling -->
    <script type="text/javascript">
      $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */                
      $().UItoTop({ easingType: 'easeOutQuart' });
      });

      
    </script>

    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //smooth scrolling -->
  <!--// bottom-top -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-3.1.1.min.js"></script>

<script type="text/javascript">
 

  
  $('h6.thumb_in').click(function(event) {
    <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>
    var random_code = $(this).attr('id');
    // alert(random_code);
    $.ajax({
                    url: '<?php echo base_url(); ?>home/thumb_up',
                    type: 'post',
                    context: this,
                    data: {random_code : random_code},
                    success: function(e){
                          if(e == "false") {alert('Maaf, thumb_up anda gagal');}
                         
                         else  {
                          if($(this).hasClass('thumb_true')){
                          $(this).removeClass('thumb_true');
                          $(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+e);
                          }
                          else{
                          $(this).addClass('thumb_true');
                          $(this).html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+e);
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

</script>
  <!-- <script type="text/javascript">
    $(document).ready(function(){

    $('a#notifc').click(function(event) {
        var mini_notif = 'notification_null';
                       // $('#amountNotifikasi').html('');

            
            $.ajax({
                    url: '<?php echo base_url(); ?>home/mini_notif',
                    type: 'post',
                    data: {mini_notif : mini_notif},
                    success: function(e){
                       if (e == '0') {
                        $('span#amountnotif').addClass('hidden');
                       }
                      else{
                          $('span#amountnotif').removeClass('hidden');  
                       }
                       $('span#amountnotif').html(e);

                       // mini_notif();
                    }
                });
                  
          });
    });
    setInterval(function(){ mini_notif() }, 3000);
  </script> -->
  <script type="text/javascript">
    $(document).ready(function(){
      $("li#reply-c").on('click', reply_c);
       $("li[title=Send]").on('click', send);
   $("li.likes_comment").on('click', likes_comment);
  $("li.dislikes_comment").on('click', dislikes_comment);
    $("li.delete").on('click', delete_comment);

          });

    function reply_c(){
        var here = $(this).parent().parent().parent().parent();
            // $(this).parent().parent().parent().parent()
            if (here.next().hasClass('hidden')) {
            here.next().removeClass('hidden');
          }
          }       
    
    
  </script>
  <script type="text/javascript">
    $("li#dell_reply").click(function(event) {
        var here = $(this).parent().parent().parent();
        if (!here.hasClass('hidden')) {
            here.addClass('hidden');
          }
    });
   
    function send(){
    
      var subject = $(this).parent().prev().find('textarea#subject').val();
        var text_comment = $(this).parent().prev().find('textarea#text_comment').val();
        var reply_id = $(this).attr('id');
        var id_title = <?php echo $title_info->id_title; ?>
        // alert(subject+' '+text_comment+' '+reply_id);
          $.ajax({
                    url: '<?php echo base_url(); ?>course/comment_up',
                    type: 'post',
                    context: this,
                    data: {subject : subject, text_comment :text_comment  , reply_comment:reply_id, type_comment:'3',id_title:id_title},
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
                            divcomment_re.after('<div class="comment-reply"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 1.5rem;" class="userspan">@'+data[1]+'</span></a><span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">you</span></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[5]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div>');
                          }
                          else if(id_in == maker_info_id) {
                            divcomment_re.after('<div class="comment-reply"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 1.5rem;" class="userspan">@'+data[1]+'</span></a><span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">creator</span></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[5]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div>');
                          }
                           else { 
                          divcomment_re.after('<div class="comment-reply"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 1.5rem;" class="userspan">@'+data[1]+'</span></a></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[5]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[5]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div>');
                           } 
             }
                      divcomment_re.prev().children().children().children().children('li#reply-c').html('<i class="fa fa-reply" aria-hidden="true"></i> '+data[4]+'');
                      
                       divcomment_re.next().children().children().children().children('li.delete').on('click', delete_comment);
                       divcomment_re.next().children().children().children().children('li.likes_comment').on('click', likes_comment);
                       divcomment_re.next().children().children().children().children('li.dislikes_comment').on('click', dislikes_comment);

                    }
                });
    }
    
    $("li[title=New]").click(function(event) {
    
        var subject = $(this).parent().prev().find('textarea#subject').val();
        var text_comment = $(this).parent().prev().find('textarea#text_comment').val();
        var id_title = <?php echo $title_info->id_title; ?>
        // alert(subject+' '+text_comment+' '+reply_id);
          $.ajax({
                    url: '<?php echo base_url(); ?>course/comment_up',
                    type: 'post',
                    context: this,
                    data: {subject : subject, text_comment :text_comment, type_comment:'1',id_title:id_title},
                    success: function(e){
                       if (e == "false") {

                       }
                      else{
                        var data = e.split("|");
                          var divcomment_re = $(this).parent().parent().parent();
                          // divcomment_re.addClass('hidden');
                          $(this).parent().prev().children("textarea#subject, textarea#text_comment").val("");

                          // 0 subject,1 username, 2 text_comment, 3 created at, 4 id action, 5 id_user
                            var id_in = <?php echo $this->session->userdata('logged_id')?>;
                          var maker_info_id = <?php echo $maker_info->id_user?>;
                          if(id_in == data[5]){ 
                            divcomment_re.after('<div class="comment-wrap"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 1.5rem;" class="userspan">@'+data[1]+'</span></a><span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">you</span></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[4]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[4]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply" id="reply-c"><i class="fa fa-reply" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[4]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div><div class="comment-reply hidden"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><ul class="comment-actions"><li class="reply" id="dell_reply" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></li></ul><form action=""> <textarea name="subject" id="subject" cols="30" rows="1" placeholder="Subject"></textarea><hr><textarea name="text_comment" id="text_comment" cols="30" rows="3" placeholder="Comment Text"></textarea></form><ul class="comment-actions"><li class="reply" title="Send" id="'+data[5]+'"><i class="fa fa-paper-plane" aria-hidden="true"></i></li></ul></div></div>');
                          }
                          else if(id_in == maker_info_id) {
                            divcomment_re.after('<div class="comment-wrap"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 1.5rem;" class="userspan">@'+data[1]+'</span></a><span class="badge" style="font-size: 1.5rem;background-color:#d9534f;">creator</span></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[4]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[4]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply" id="reply-c"><i class="fa fa-reply" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[4]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div><div class="comment-reply hidden"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><ul class="comment-actions"><li class="reply" id="dell_reply" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></li></ul><form action=""> <textarea name="subject" id="subject" cols="30" rows="1" placeholder="Subject"></textarea><hr><textarea name="text_comment" id="text_comment" cols="30" rows="3" placeholder="Comment Text"></textarea></form><ul class="comment-actions"><li class="reply" title="Send" id="'+data[5]+'"><i class="fa fa-paper-plane" aria-hidden="true"></i></li></ul></div></div>');
                          }
                           else { 
                          divcomment_re.after('<div class="comment-wrap"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><h5 style="color: #d9534f;">'+data[0]+'<a href=""><span style="font-size: 1.5rem;" class="userspan">@'+data[1]+'</span></a></h5><ul class="comment-actions"><li class="reply" title="Go to this discussion"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></li></ul><p class="comment-text" style="color:black;">'+data[2]+'</p><div class="bottom-comment"><div class="comment-date">'+data[3]+'</div><ul class="comment-actions"><li class="reply likes_comment" id="'+data[4]+'"><i class="fa fa-thumbs-up" aria-hidden="true"></i> </li><li class="reply dislikes_comment" id="'+data[4]+'"><i class="fa fa-thumbs-down" aria-hidden="true"></i> </li><li class="reply" id="reply-c"><i class="fa fa-reply" aria-hidden="true"></i> </li><li class="reply delete" id="'+data[4]+'"><i class="fa fa-trash"  aria-hidden="true"></i></li></ul></div></div></div><div class="comment-reply hidden"><div class="photo"><div class="ava-me"></div></div><div class="comment-block"><ul class="comment-actions"><li class="reply" id="dell_reply" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></li></ul><form action=""> <textarea name="subject" id="subject" cols="30" rows="1" placeholder="Subject"></textarea><hr><textarea name="text_comment" id="text_comment" cols="30" rows="3" placeholder="Comment Text"></textarea></form><ul class="comment-actions"><li class="reply" title="Send" id="'+data[5]+'"><i class="fa fa-paper-plane" aria-hidden="true"></i></li></ul></div></div>');
                           } 
             }
                      
                       divcomment_re.next().children().children().children().children('li.delete').on('click', delete_comment);
                       divcomment_re.next().children().children().children().children('li.likes_comment').on('click', likes_comment);
                       divcomment_re.next().children().children().children().children('li.dislikes_comment').on('click', dislikes_comment);
                       divcomment_re.next().children().children().children().children('li#reply-c').on('click', reply_c);
                       divcomment_re.next().next().children().children().children('li[title=Send]').on('click', send);

                    }
                });
    });

      
      function delete_comment(){
        if (confirm('Are you sure you want to delete this?')) {
        var id_action = $(this).attr('id');
        var here = $(this).parent().parent().parent().parent();
        // alert(id_action);
          $.ajax({
                    url: '<?php echo base_url(); ?>course/action_delete',
                    type: 'post',
                    context: this,
                    data: {id_action : id_action,type:'delete_comment'},
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
 
     
  function likes_comment(){
      <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>

    var id_action = $(this).attr('id');
    var id_title = <?php echo $title_info->id_title; ?>;
    // alert(id_action + id_title);
    $.ajax({
                    url: '<?php echo base_url(); ?>home/thumb_comment',
                    type: 'post',
                    context: this,
                    data: {id_action : id_action, id_title : id_title, type_action : '2',type_delete :'4'},
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
        <?php if ($this->session->userdata('logged_in') == TRUE) {  ?>

    var id_action = $(this).attr('id');
    var id_title = <?php echo $title_info->id_title; ?>;
    // alert(id_action + id_title);
    $.ajax({
                    url: '<?php echo base_url(); ?>home/thumb_comment',
                    type: 'post',
                    context: this,
                    data: {id_action : id_action, id_title : id_title, type_action : '4',type_delete :'2'},
                    success: function(e){
                         if(e == "false") {alert('Maaf, thumb_up anda gagal');}
                         
                         else  {
                          var data = e.split("|");
                          
                        if($(this).hasClass('thumb_true')){
                          $(this).removeClass('thumb_true');

                          $(this).html('<i class="fa fa-thumbs-down" aria-hidden="true"></i>'+data[1]);
                          }
                          else{
                          $(this).addClass('thumb_true');
                          $(this).prev().removeClass('thumb_true');
                          $(this).prev().html('<i class="fa fa-thumbs-up" aria-hidden="true"></i>'+data[0]);
                          $(this).html('<i class="fa fa-thumbs-down" aria-hidden="true"></i>'+data[1]);
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