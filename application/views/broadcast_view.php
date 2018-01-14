<div class="page-title">
  <div class="title_left">
    <h3>Make an Announcement!</h3>
  </div>

</div>
<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Broacast </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Subject</th>
                            <th>Text</th>
                            <th>Link</th>
                            <th>Thumbnail</th>
                            <th>Date Time</th>
                            <th colspan="2">Action</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                            $no = 1;
                            foreach($broadcastt as $data){
                              if ($data->link == NULL || $data->link == '') {
                                $link = '-';
                              }
                              else{
                               $link = $data->link; 
                              }
                              echo '
                              <td>'.++$mulai.'</td>
                              <td>'.$data->subject.'</td>
                              <td>'.$data->text.'</td>
                              <td>'.$link.'</td>
                              <td><img src="'.base_url().'assets/images/'.$data->thumbnail.'" width="100px"></td>
                              <td>'.$data->created_at.'</td>
                              <td colspan="2">
                          <button id="'.$data->id_broadcast.'" class="btn btn-danger delete" style="color: white"><i class="fa fa-trash-o"></i></a></button>
                          
                              </td>
                              
                          </tr>';
                          $no++;
                            }
                            ?>
                    </tbody>
                    </table>
                      <?php echo $pagination; ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-6 col-xs-12">
<div class="x_panel">
                  <div class="x_title">
                    <h2>New Broacast </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div><div class="x_content">

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
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
   $("button.delete").click(function(event) {
                if (confirm('Apa anda ingin menghapus broadcast ini?')) {
              var id_broadcast = $(this).attr('id');
              // alert(id_user);
              if (id_broadcast != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/delete_broadcast/",
                      type: 'post',
                      context: this,
                      data: {
                          id_broadcast: id_broadcast,
                      },
                      success: function(e) {
                        if (e == 'true') {
                          $(this).parent().parent().remove();
                        }
                        else{
                          alert('Maaf, coba lagi');
                        }
                    }
                  });
              }
            }
          });
</script>

<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->