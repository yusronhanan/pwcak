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
                    <form method="get" action="<?php echo base_url() ?>admin/get_user">
                      <select class="form-control" name="filter">
                            <option value="" <?php if ($filter == '') {
                              echo "selected";
                            } ?>>All</option>
                            <option value="User" <?php if ($filter == 'User') {
                              echo "selected";
                            } ?>>User</option>
                            <option value="Admin" <?php if ($filter == 'Admin') {
                              echo "selected";
                            } ?>>Admin</option>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary pull-right" value="filter">
                    </form>
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
                              id="'.$data->id_user.'" data-toggle="modal" data-target="#myModalView" style="color: white" title="Detail user"><i class="glyphicon glyphicon-eye-open"></i></a></button>
                              <input type="hidden" name="id_user" placeholder="ID User" class="form-control" value=""> 
                              <button type="button" href="#" id="'.$data->id_user.'" class="btn btn-success update" data-toggle="modal" data-target="#myModalEdit" style="color: white" title="Edit User"><i class="fa fa-edit"></i></a></button>
                          <button id="'.$data->id_user.'" class="btn btn-warning banned" style="color: white" title="Banned User">'.$status.'</a></button>
                            <button id="'.$data->id_user.'" class="btn btn-danger delete" style="color: white" title="Delete User"><i class="fa fa-trash-o"></i></a></button>
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
                              <select id="role_id" class="form-control" disabled>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                            </select>
                          </div>
                      </div>
                      
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
              <div class="clearfix"></div>
          
<div aria-hidden="true" aria-labelledby="myModalView" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Name :</label>
                          <div class="col-lg-10">
                            <input type="hidden" id="id" name="id">
                              <input type="text" class="form-control" id="name_idd" name="nama" placeholder="Tuliskan Nama">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Email :</label>
                          <div class="col-lg-10">
                            <input type="hidden" id="id" name="id">
                              <input type="text" class="form-control" id="email_idd" name="nama" placeholder="Tuliskan Nama">
                          </div>
                      </div>
                      <br>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Username:</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="username_idd" name="alamat" placeholder="Tuliskan Alamat">
                          </div>
                      </div>
                      <br>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">City :</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" id="city_idd"  >
                          </div>
                      </div>
                      <br>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Bio :</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" id="bio_idd"  >
                          </div>
                      </div>
                      <br>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Role :</label>
                          <div class="col-lg-10">
                            <select id="role_idd" class="form-control" name="role">
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                            </select>
                              <!-- <input type="number" max="1" min="0" class="form-control" id="role_idd"> -->
                          </div>
                      </div>
                      <br>
                  </div>
                  <div class="modal-footer">
                      <a class="btn btn-info updateclass" href="#" id=""> Simpan&nbsp;</a>
                      <a class="btn btn-warning" data-dismiss="modal"> Batal</a>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
                          // $('input#role_id').attr('value',data[7]);
                          $('select#role_id').val(data[7]).change();

                           $('img#image_id').attr('src','<?php echo base_url();?>assets/images/' +data[6]);
                      }
                  });
              }
          });
            $("button.update").click(function(event) {
              var id_user = $(this).attr('id');
              // alert(product_id);
              if (id_user != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/detuser",
                      type: 'post',
                      data: {
                          id: id_user
                      },
                      success: function(e) {
                          var data = e.split("|");
                          $('a.updateclass').attr('id',data[0]);
                          $('input#email_idd').attr('value',data[1]);
                          $('input#username_idd').attr('value',data[2]);
                          $('input#city_idd').attr('value',data[3]);
                          $('input#bio_idd').attr('value',data[4]);
                          $('input#name_idd').attr('value',data[5]);
                          // $('input#role_idd').attr('value',data[7]);
                          $('select#role_idd').val(""+data[7]).change();
                      }
                  });
              }
          });

            $("a.updateclass").click(function(event) {
              var id_user =  $(this).attr('id');
              var email =    $('input#email_idd').val();
              var name =    $('input#name_idd').val();
              var username = $('input#username_idd').val();
              var city =     $('input#city_idd').val();
              var bio =      $('input#bio_idd').val();
              var role =      $('select#role_idd').val();
              var bd =       $('button.view#'+id_user).parent();
              // alert(id_user+email+username+city+bio);
              // alert(product_id);
              if (id_user != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/updateUser/",
                      type: 'post',
                      data: {
                          id: id_user,
                          name: name,
                          email : email,
                          username:username,
                          city:city,
                          bio:bio,
                          role:role,
                      },
                      success: function(e) {
                          var data = e.split("|");
                          // $('a.update_id').attr('href', '<?php echo base_url()?>admin/updateUser/'+ data[0]);
                          // alert(e)
                          $('input#email_idd').attr('value',data[1]);
                          $('input#username_idd').attr('value',data[2]);
                          $('input#city_idd').attr('value',data[3]);
                          $('input#bio_idd').attr('value',data[4]);
                          $('input#name_idd').attr('value',data[5]);
                          // $('input#role_idd').attr('value',data[7]);
                          $('select#role_idd').val(data[7]).change();
                          $('div#myModalEdit').modal('hide');


                          bd.prev().prev().prev().prev().html(data[1]);
                          bd.prev().prev().prev().html(data[2]);
                          bd.prev().prev().html(data[3]);
                          bd.prev().html(data[4]);
                          
                      }
                  });
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