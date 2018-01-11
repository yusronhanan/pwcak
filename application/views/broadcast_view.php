<div class="page-title">
  <div class="title_left">
    <h3>Make an Announcement!</h3>
  </div>

</div>

<div class="x_panel">
<div class="x_content">
<form id="demo-form" data-parsley-validate method="post" action="<?php echo base_url();?>admin/submit_B">
      <label for="fullname">Subject :</label>
      <input type="text" id="subject" class="form-control" name="subject" required />

      <br/>

      <label for="message">Text : </label>
      <textarea id="message" required="required" class="form-control" name="text" data-parsley-trigger="keyup" data-parsley-maxlength="200" 
        data-parsley-validation-threshold="10"></textarea>

      <br/>
      <label for="thubmnail">Thumbnail : </label>
      <input type="file" name="foto" class="form-control">
      <br/>
      <input type="submit" name="submit" class="btn btn-primary" value="Send"> 

</form>
</div>
</div>

<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->