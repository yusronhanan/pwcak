<div class="page-title">
  <div class="title_left">
    <h3>Make an Announcement!</h3>
  </div>

</div>

<div class="x_panel">
<div class="x_content">
<form id="demo-form" data-parsley-validate>
      <label for="fullname">Subject :</label>
      <input type="text" id="subject" class="form-control" name="subject" required />

      <br/>

      <label for="message">Text comment :</label>
      <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-maxlength="200" 
        data-parsley-validation-threshold="10" rows="2"></textarea>

      <br/>
      <span class="btn btn-primary">Send</span>

</form>
</div>
</div>

<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->