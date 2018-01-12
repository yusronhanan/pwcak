<div class="page-title">
  <div class="title_left">
    <h3>Make an Announcement!</h3>
  </div>

</div>

<div class="x_panel">
<div class="x_content">
<form id="demo-form" data-parsley-validate method="post" action="<?php echo base_url();?>admin/submit_B" enctype="multipart/form-data">

      <div class="form-group">
        <label for="subject">Subject :</label>
        <input type="text" id="subject" class="form-control" name="subject" required />
      </div>

      <br/>

      <div class="form-group">
        <label for="message">Text : </label>
        <textarea id="message" required="required" class="form-control" name="text" data-parsley-trigger="keyup" data-parsley-maxlength="200" 
          data-parsley-validation-threshold="10"></textarea>
      </div>

      <br/>

      <div class="form-group">
        <label for="link">Link :</label>
        <div class="input-group">
          <span class="input-group-addon">http://</span>
          <input id="link" type="text" class="form-control" name="link" placeholder="(Optional)">
        </div>
      </div>

      <br/>

      <label for="thubmnail">Thumbnail : </label>
      <input name="thumbnail" type="file" class="form-control">

      <br/>

      <input type="submit" name="submit" class="btn btn-primary" value="Send"> 

</form>
</div>
</div>

<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->