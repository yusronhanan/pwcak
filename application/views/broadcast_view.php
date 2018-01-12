<div class="page-title">
  <div class="title_left">
    <h3>Make an Announcement!</h3>
  </div>

</div>

<div class="x_panel">
<div class="x_content">
<form id="demo-form" data-parsley-validate method="post" action="<?php echo base_url();?>admin/submit_B" enctype="multipart/form-data">

      <label for="subject">Subject :</label>
      <input type="text" id="subject" class="form-control" name="subject" required />

      <br/>

      <label for="message">Text : </label>
      <textarea id="message" required="required" class="form-control" name="text" data-parsley-trigger="keyup" data-parsley-maxlength="200" 
        data-parsley-validation-threshold="10"></textarea>

      <br/>


      <label for="link">Link :</label>
      <span class="form-control-feedback left">
          <input type="text" disabled value="http://"/>
      </span>
      <input type="text" id="link" class="form-control" name="link" placeholder="(Optional)" />

      <br/>

      <label for="thubmnail">Thumbnail : </label>
      <input name="thumbnail" type="file" class="form-control">

      <br/>

      <input type="submit" name="submit" class="btn btn-primary" value="Send"> 

</form>
</div>
</div>

<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->