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
                          <button id="'.$data->id_broadcast.'" class="btn btn-success editview" style="color: white" data-toggle="modal" data-target="#broadcast_see"><i class="fa fa-pencil"></i></a></button>
                          
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
<div aria-hidden="true" aria-labelledby="myModalView" role="dialog" tabindex="-1" id="broadcast_see" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit Broadcast</h4>
            </div>
                  <br>
            <form method="post" action="<?php echo base_url();?>admin/editbroadcast" enctype="multipart/form-data" class="form-horizontal" role="form">
              <div class="modal-body">
                  <br>
                  <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Subject</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="subjectt" placeholder="subject" name="subject">
                            <input type="hidden" id="id_bdd" name="id_broadcast">
                          </div>
                      </div>
                      <br>
                    <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Text</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="textt" placeholder="Text" name="text">
                          </div>
                      </div>
                      <br>
                              <div class="form-group">
                    <label for="link">Link :</label>
                    <div class="input-group">
                      <span class="input-group-addon">http://</span>
                      <input id="linkk" type="text" class="form-control" name="link" placeholder="(Optional)">
                    </div>
                  </div>
                      <br>
                      <div class="form-group">
                          <div class="col-lg-12">
                              <button class="form-control btn btn-primary updatetesti" type="submit">Save</button>
                          </div>
                      </div>
                  </div>
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
    $("button.editview").click(function(event) {
              var id_bd = $(this).attr('id');
              // alert(product_id);
              if (id_bd != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/getbroadcast",
                      type: 'post',
                      data: {
                          id_broadcast: id_bd
                      },
                      success: function(e) {
                          var data = e.split("|");
                          $('input#subjectt').attr('value',data[0]);
                          $('input#textt').attr('value',data[1]);
                          $('input#linkk').attr('value',data[2]);
                          $('input#id_bdd').attr('value',id_bd);
                          
                      }
                  });
              }
          });
</script>

<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->