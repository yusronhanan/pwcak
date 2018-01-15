<style type="text/css">

.images_c{
  display: block;
  max-width: 100%;
  height:auto;
  margin: auto;
  width:200px;
}

</style>
<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Users </h2>
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
                            <th>ID User</th>
                            <th>Email User</th>
                            <th>Username</th>
                            <th>City</th>
                            <th>Bio</th>
                            <th colspan="2">Action</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                            $no = 1;
                            foreach($user as $data){
                              if ($data->status == 0) {
                                  $status = '<i class="fa fa-times"></i> ';
                                }
                                else{
                                  $status = '<i class="fa fa-check"></i> ';
                                }
                              
                              echo '
                              <td>'.++$mulai.'</td>
                              <td>'.$data->id_user.'</td>
                              <td>'.$data->email.'</td>
                              <td>'.$data->username.'</td>
                              <td>'.$data->city.'</td>
                              <td>'.$data->bio.'</td>
                              <td colspan="2">
                              <input type="hidden" name="id_user" placeholder="ID User" class="form-control" value="">
                              <button type="button
                              " href="#" class="btn btn-info view"
                              id="'.$data->id_user.'" data-toggle="modal" data-target="#myModalView" style="color: white"><i class="glyphicon glyphicon-eye-open"></i></a></button>
                              <input type="hidden" name="id_user" placeholder="ID User" class="form-control" value=""> 
                          <button id="'.$data->id_user.'" class="btn btn-warning banned" style="color: white">'.$status.'</a></button>
                            <button id="'.$data->id_user.'" class="btn btn-danger delete" style="color: white"><i class="fa fa-trash-o"></i></a></button>
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

                <div aria-hidden="true" aria-labelledby="myModalView" role="dialog" tabindex="-1" id="myModalView" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Detail Data</h4>
            </div>
            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 product_img">
                        <img src="" class="images_c" id="image_id">
                  </div>
                  </div>
                  <br>
                  <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Name :</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="name_id" name="alamat" placeholder="" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Email :</label>
                          <div class="col-lg-10">
                            <input type="hidden" id="id" name="id">
                              <input type="text" class="form-control" id="email_id" name="nama" placeholder="" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Username:</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="username_id" name="alamat" placeholder="" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">City :</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" id="city_id"  placeholder="" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Bio :</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" id="bio_id"  placeholder="" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Role :</label>
                          <div class="col-lg-10">
                              <input type="number" class="form-control" id="role_id"  placeholder="" disabled>
                          </div>
                      </div>
                      
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
              <div class="clearfix"></div>
          <!-- Modal edit -->


          <!--Modal lihat-->
            <!-- <div class="modal fade" id="myModalView" tabindex="-1" role="dialog" >
              <div class="modal-dialog" role="document"> -->
              <!-- Modal content-->
                <!-- <div class="modal-content news-w3l">
                    <div class="modal-header">
                      <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
                      <h4>Detail User</h4> -->
                      <!--newsletter-->
                      <!-- <div class="login-main wthree">
                        <form action="#" method="post">
                          <h5> Email User </h5> <input type="text" disabled value="" name="email" id="email_id" class="form-control">
                          <h5> Username </h5> <input type="text" disabled value="" name="Username" id="username_id" class="form-control">
                          <h5> City </h5> <input type="text" disabled value="" name="city" id="city_id" class="form-control">
                          <h5> Bio </h5> <input type="text" disabled value="" name="bio" id="bio_id" class="form-control"> -->

                          <!-- <input type="submit" value="Save"> -->
                        <!-- </form>
                      </div>    
                    </div>
                </div>
              </div>
            </div> -->
<!-- Modal Ubah -->
              <div class="clearfix"></div>

            <!-- <script type="text/javascript">
                $(document).ready(function() {
                    $('#myModalView').on('show.bs.modal', function (event) {
                        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                        var modal          = $(this)
           
                        // Isi nilai pada field
                        modal.find('#email_id').attr("value",div.data('email'));
                        modal.find('#username_id').attr("value",div.data('username'));
                        modal.find('#city_id').attr("value",div.data('city'));
                        modal.find('#bio_id').attr("value",div.data('bio'));
                    });
                });
              
              </script> -->
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript">
            $("button.view").click(function(event) {
              var id_user = $(this).attr('id');
              // alert(product_id);
              if (id_user != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/detuser/"+ id_user,
                      type: 'post',
                      data: {
                          id: id_user
                      },
                      success: function(e) {
                          var data = e.split("|");
                          // $('#id_user').attr('href', '<?php echo base_url()?>Page/edit_product/' + data[0]);
                          $('input#email_id').attr('value',data[1]);
                          $('input#username_id').attr('value',data[2]);
                          $('input#city_id').attr('value',data[3]);
                          $('input#bio_id').attr('value',data[4]);
                          $('input#name_id').attr('value',data[5]);
                          $('input#role_id').attr('value',data[7]);
                           $('img#image_id').attr('src','<?php echo base_url();?>assets/images/' +data[6]);
                      }
                  });
              } else {
                  $('#pro_name').html();
              }
          });

          
             $("button.delete").click(function(event) {
                if (confirm('Apa anda ingin menghapus user ini?')) {
              var id_user = $(this).attr('id');
              // alert(id_user);
              if (id_user != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/delete_user/",
                      type: 'post',
                      context: this,
                      data: {
                          id_user: id_user,
                      },
                      success: function(e) {
                        if (e == 'true') {
                          $(this).parent().parent().remove();
                          // alert('aa');
                        }
                        else{
                          alert('Maaf, coba lagi');
                        }
                    }
                  });
              }
            }
          });
               $("button.banned").click(function(event) {
                if (confirm('Apa anda ingin banned user ini?')) {
              var id_user = $(this).attr('id');
              var status = $(this).children().attr('class');
                              
              if (id_user != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/banned_user/",
                      type: 'post',
                      context: this,
                      data: {
                          id_user: id_user,
                          status : status
                      },
                      success: function(e) {
                        if (e == 'true') {
                          if ($(this).children().hasClass('fa fa-times')) {
                                 $(this).html('<i class="fa fa-check"></i> ');
                                }
                                else{
                                  $(this).html('<i class="fa fa-times"></i> ');
                                }
                      }
                      else{
                        alert('Maaf, anda gagal. Coba lagi');
                      }
                    }
                  });
              }
            }
          });

  
             </script>