<div class="page-title">
  <div class="title_left">
    <h3>Slider Setting</h3>
  </div>

</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quote List</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Slider Text 1</th>
                            <th>Slider Text 2</th>
                            <th>Slider Link</th>
                            <th colspan="2">Action</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                         foreach ($list_quote as $quote) {
                          $qtes = explode('|', $quote->text);
                          ?>
                        <tr>
                          <td><?php echo $i++ ?></td>
                          <td><?php echo $qtes[0] ?></td>
                          <td><?php echo $qtes[1] ?></td>
                          <td><?php echo $qtes[2] ?></td>
                          <td><a href="#" data-toggle="modal" data-target="#quote_see" class="btn btn-xs btn-success" id="<?php echo $quote->id_config ?>"><i class="fa fa-pencil"></i></a></td>
                        
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
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
        <?php 
        if(!empty($notif)) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                '.$notif.'
            </div>';
          } ?>
        <br />
        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="updateslider_img">

          <div class="form-group">
            <img style="width: 450px;height:250px; display: block;" src="<?php echo base_url(); ?>assets/images/<?php echo $slider_image->img ?>" alt="image" />
          </div>

          <br/>

          <div class="form-group">
            <label for="picture">Picture : </label>
            <input name="slider_image" id="picture" type="file" class="form-control">
            <input type="hidden" name="id_slide" value="<?php echo $slider_image->id_config ?>">
          </div>

          
 
          <div class="form-group">
       
              <button class="btn btn-primary" type="submit">Save</button>
           
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalView" role="dialog" tabindex="-1" id="quote_see" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit Slider</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() ?>admin/updateslider" method="post" role="form" enctype="multipart/form-data">
              <div class="modal-body">
                  <br>

                  <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Text 1</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="text_1" placeholder="text 1" name="text_1">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Text 2</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="text_2" placeholder="text 2" name="text_2">
                          </div>
                          <input type="hidden" class="form-control" id="id_qts" name="id_quote">
                      </div>
                      <div class="form-group">
                 <label for="link">Link :</label>
                   <div class="input-group">
                    <span class="input-group-addon">http://</span>
                  <input id="text_link" type="text" class="form-control" name="text_link" placeholder="(Optional)">
                 </div>
                      </div>
                      <div class="form-group">
                          <div class="col-lg-12">
                              <button class="form-control btn btn-primary updatequote" type="submit">Save</button>
                          </div>
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
      $("a[data-target=#quote_see]").click(function(event) {
              var id_qt = $(this).attr('id');
              $.ajax({
                      url: "<?php echo base_url()?>admin/getslider/",
                      type: 'post',
                      context : this,
                      data: {
                          id_quote: id_qt
                      },
                      success: function(e) {
                          var data = e.split("|");
                          $('input#id_qts').val(id_qt);
                          $('input#text_1').val(data[0]);
                          $('input#text_2').val(data[1]);
                          $('input#text_link').val(data[2]);
                           
                      }
                  });
});
      
    </script>