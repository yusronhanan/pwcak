<div class="page-title">
  <div class="title_left">
    <h3>Slider Setting</h3>
  </div>

</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quote Setting</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
            <label for="">Judul :</label>
            <input type="text" id="" class="form-control" name="subject" required />
          </div>

          <br/>

          <div class="form-group">
            <label for="text">Text : </label>
            <textarea id="text" required="required" class="form-control" name="text" data-parsley-trigger="keyup" data-parsley-maxlength="200" 
            data-parsley-validation-threshold="10"></textarea>
          </div>
 
          <div class="form-group">
            <div>
              <button class="btn btn-primary" type="button">Save</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Picture Setting</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
            <img style="width: 450px;height:250px; display: block;" src="<?php echo base_url(); ?>assets/images/bg66.jpg" alt="image" />
          </div>

          <br/>

          <div class="form-group">
            <label for="picture">Picture : </label>
            <input name="picture" id="picture" type="file" class="form-control">
          </div>

          
 
          <div class="form-group">
       
              <button class="btn btn-primary" type="button">Save</button>
           
          </div>

        </form>
      </div>
    </div>
  </div>
</div>