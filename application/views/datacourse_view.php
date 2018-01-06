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
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th colspan="2">Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                              <tr>
                                <?php 
                                $no = 1;
                                foreach($course as $data){

                                echo '
                                  <td>'.++$start.'</td>
                                  <td>'.$data->id_user.'</td>
                                  <td>'.$data->title.'</td>
                                  <td>'.$data->subject.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td colspan="2"> 
                                  <button class = "btn btn-info"><i class="glyphicon glyphicon-ok-sign"></i> Pick </button>
                              <input type="hidden" id="id_course" value="" class="form-control"> 
                              <button type="button" href="#" id="'.$data->id_title.'" class = "btn btn-success view" data-toggle="modal" data-target="#viewCourse"><i class="glyphicon glyphicon-eye-open"></i> View </a>
                              <button type="button" href="'.base_url().'index.php/admin/course_delete/'.$data->id_title.'" class = "btn btn-danger" style="margin-left:5px;"><i class="fa fa-trash-o"></i> Delete </button>  
                                  </td>
                                  
                              </tr> '
                             ;
                             $no++;
                             }
                             ?>
                        </tr>
                    </tbody>
                    </table>
                      <?php echo $pagination; ?>
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
                                      <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive" id="image_id"
                                  </div>
                                  <div class="col-md-12 product_content">
                                      <h4>Title ID : <span id="title_id"></span></h4>
                                      
                                      <h4>Description :</h4> <p id="description_id"></p>
                                      <h4>Category   :</h4> <span><h5 id="subject_id"></h5></span>
                                      <h4>Created at  :</h4> <span><h5 id="date_id"></h5></span>
                                      <h4>Visitor     :</h4> <span><h5 id="visitor_id"></h5></span>
                                     
                                      <div class="space-ten"></div>
                                      <div class="btn-ground">
                                          <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span></button>
                                          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-link"></span></button>
                                      </div>
                                  </div>
                              </div>
                           </div>
                      </div>
                  </div>
              </div>
          </div>

              


              </div>

              <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript">
            $("button.view").click(function(event) {
              var id_user = $(this).attr('id');
              // alert(product_id);
              if (id_user != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/detcourse/"+ id_user,
                      type: 'post',
                      data: {
                          id: id_user
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
                      }
                  });
              } else {
                  $('#pro_name').html();
              }
          });
          </script>