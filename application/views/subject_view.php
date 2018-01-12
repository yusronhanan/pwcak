<div class="page-title">
  <div class="title_left">
    <h3>Make an Announcement!</h3>
  </div>

</div>

<div class="x_panel">
<div class="x_content">
<form id="demo-form" data-parsley-validate method="post" action="<?php echo base_url();?>admin/submit_B" enctype="multipart/form-data">

      <div class="form-group">
        <label class="control-label">Subject</label>
        <!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
          <input id="tags_1" type="text" class="tags form-control" value="mathematics, sejarah, pemrograman" />
          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
        <!-- </div> -->
      </div>


      <br/>

      <!-- <div class="form-group col-md-12" style="margin-left: 0px;"> -->
        <div class="form-group" >
          <label for="code">Code</label> <br/>
          <input type="text" id="code" class="form-control" name="" required />
        </div>

        <div class="form-group">
          <label for="">Text</label> <br/>
          <input type="text" id="" class="form-control" name="" required />
        </div>
      <!-- </div> -->

      <br/>

      <div class="form-group">
       
          <button class="btn btn-primary" type="button">Save</button>
       
      </div>


</form>
</div>
</div>

<!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->