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
                    <h2>Top Users </h2>
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
                            <th>Subscriber</th>
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
                              <td>'.$no.'</td>
                              <td>'.$data->id_user.'</td>
                              <td>'.$data->email.'</td>
                              <td>'.$data->username.'</td>
                              <td>'.$data->city.'</td>
                              <td>'.$data->bio.'</td>
                              <td>'.$data->tot_subs.'</td>
                              <td colspan="2">
                              <button type="button
                              " href="#" class="btn btn-info view_user"
                              id="'.$data->id_user.'" data-toggle="modal" data-target="#myModalView" style="color: white" title="Detail user"><i class="glyphicon glyphicon-eye-open"></i></a></button>
                              </td>
                              
                          </tr>';
                          $no++;
                            }
                            ?>
                    </tbody>
                    </table>
                  </div>
                </div>

               
</div>
              <div class="clearfix"></div>
          <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Top Courses by Visitor </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No </th>
                          <th>User</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Visitor</th>
                          <th colspan="2">Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                              
                                <?php 
                                $no = 1;
                                foreach($course as $data){
                                if ($data->pick == 0) {
                                  $picks = '<i class="glyphicon glyphicon-pushpin"></i> ';
                                }
                                else{
                                  $picks = '<i class="glyphicon glyphicon-check"></i> ';
                                }
                                if ($data->status_course == 1) {
                                  $status = '<i class="fa fa-times"></i> ';
                                  $publish = 'published';
                                }
                                else if($data->status_course == 2){
                                  $status = '<i class="fa fa-check"></i> ';
                                  $publish = 'published';
                                }
                                else{
                                  $status = '<i class="fa fa-times"></i> ';
                                  $publish = '';
                                }
                                
                                echo '
                                  <td>'.$no.'</td>
                                  <td><a href="'.base_url().$data->username.'">'.$data->name.'</a></td>
                                  <td>'.$data->title.'</td>
                                  <td>'.$data->subject.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td>'.$data->tot_likecourse.'</td>
                                  <td colspan="2">
                              <button type="button" href="#" id="'.$data->id_title.'" class = "btn btn-info view_course"  data-toggle="modal" data-target="#viewCourse" title="Detail Course"><i class="glyphicon glyphicon-eye-open"></i></a>

                                  </td>
                                  
                              </tr> '
                             ;
                             $no++;
                             }
                             ?>
                    </tbody>
                    </table>
                  </div>
                </div>
</div>
   <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Top Courses by Like Course </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No </th>
                          <th>User</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Visitor</th>
                          <th colspan="2">Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                              
                                <?php 
                                $no = 1;
                                foreach($course_visitor as $data){
                                if ($data->pick == 0) {
                                  $picks = '<i class="glyphicon glyphicon-pushpin"></i> ';
                                }
                                else{
                                  $picks = '<i class="glyphicon glyphicon-check"></i> ';
                                }
                                if ($data->status_course == 1) {
                                  $status = '<i class="fa fa-times"></i> ';
                                  $publish = 'published';
                                }
                                else if($data->status_course == 2){
                                  $status = '<i class="fa fa-check"></i> ';
                                  $publish = 'published';
                                }
                                else{
                                  $status = '<i class="fa fa-times"></i> ';
                                  $publish = '';
                                }
                                
                                echo '
                                  <td>'.$no.'</td>
                                  <td><a href="'.base_url().$data->username.'">'.$data->name.'</a></td>
                                  <td>'.$data->title.'</td>
                                  <td>'.$data->subject.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td>'.$data->visitor.'</td>
                                  <td colspan="2">
                              <button type="button" href="#" id="'.$data->id_title.'" class = "btn btn-info view_course"  data-toggle="modal" data-target="#viewCourse" title="Detail Course"><i class="glyphicon glyphicon-eye-open"></i></a>

                                  </td>
                                  
                              </tr> '
                             ;
                             $no++;
                             }
                             ?>
                    </tbody>
                    </table>
                  </div>
                </div>
</div>
<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Top Discussion </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No </th>
                          <th>ID Comment</th>
                          <th>Title</th>
                          <th>Name</th>
                          <th>Subject Comment</th>
                          <th>Text Comment</th>
                          <th>Date</th>
                          <th>Reply Amount</th>
                          <th colspan="2">Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                              
                                <?php 
                                $no = 1;
                                foreach($discuss as $data){
                               echo '
                                  <td>'.$no.'</td>
                                  <td>'.$data->id_comment.'</td>
                                  <td>'.$data->title.'</td>
                                  <td><a href="'.base_url().$data->username.'">'.$data->name.'</a></td>
                                  <td>'.$data->subjectcom.'</td>
                                  <td>'.$data->text_comment.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td>'.$data->tot_comment.'</td>
                                  <td colspan="2"> 
                              <a class = "btn btn-success" id="'.$data->id_comment.'" href="'.base_url().'discuss/'.$data->random_code.'" title="Go to Discussion">Go to</a>
                                  </td>
                              </tr> '
                             ;
                             $no++;
                             }
                             ?>
                    </tbody>
                    </table>
                  </div>
                </div>

     


              


              </div>
          <!-- Modal edit -->

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
                              <!-- <input type="text" class="form-control" id="role_id"  placeholder="" disabled> -->
                          </div>
                      </div>
                      
                  </div>
                </form>
            </div>
        </div>
    </div>
              <div class="modal fade product_view" id="viewCourse">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title" id="id_title"></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 product_img">
                        <img src="" class="images_c" id="image_id">
                    </div>
                    <div class="col-md-12 product_content">
                    <br>
                    
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h4>Title ID : <span id="title_id"></span></h4>
                    </div>
                    </a>
                        <!-- <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div> -->
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Description :</h4> 
                        <p id="description_id" class="breaks"></p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Catergory   :</h4> <span><h5 id="subject_id"></h5></span>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Created at  :</h4> 
                        <span><h5 id="date_id"></h5></span>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Visitor     :</h4> 
                        <span><h5 id="visitor_id"></h5></span>
                    </div>
                </a>
                        <br>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <a href="" id="go_discuss" target="_blank"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-comment"></span></button></a>
                            <a href="" id="go_lesson" target="_blank"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-education"></span></button></a>
                        </div>
                    </div>
                   </div>
                </div>
             </div>
        </div>
    </div>
</div>
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
            $("button.view_user").click(function(event) {
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
             $("button.view_course").click(function(event) {
              var id_title = $(this).attr('id');
              // alert(product_id);
              if (id_title != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/detcourse/"+ id_title,
                      type: 'post',
                      data: {
                          id: id_title
                      },
                      success: function(e) {
                          var data = e.split("|");
                          // $('#id_user').attr('href', '<?php echo base_url()?>Page/edit_product/' + data[0]);
                          $('span#title_id').html(data[0]);
                          $('h3#id_title').html(data[1]); 
                          $('p#description_id').html(data[5]);
                          $('h5#subject_id').html(data[2]);
                          $('img#image_id').attr('src','<?php echo base_url(); ?>assets/images/' + data[4]);
                          $('h5#date_id').html(data[3]);
                          $('h5#visitor_id').html(data[6]);
                          $('a#go_lesson').attr('href','<?php echo base_url(); ?>lesson/' + data[7]);
                          $('a#go_discuss').attr('href','<?php echo base_url(); ?>discuss/' + data[7]);
                          
                      }
                  });
              }
          });

  
             </script>