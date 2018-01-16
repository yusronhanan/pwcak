<style type="text/css">
.images_c{
  display: block;
  max-width: 100%;
  height:auto;
  margin: auto;
  width:100%;
}
</style>
<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Courses </h2>
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
                                  <td>'.++$start.'</td>
                                  <td><a href="'.base_url().$data->username.'">'.$data->name.'</a></td>
                                  <td>'.$data->title.'</td>
                                  <td>'.$data->subject.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td colspan="2"> 
                                 <a class = "btn btn-success pickss" id="'.$data->id_title.'" title="Change Pick Status">'.$picks.'</a>
                              <input type="hidden" id="id_course" value="" class="form-control"> 
                              <button type="button" href="#" id="'.$data->id_title.'" class = "btn btn-info view"  data-toggle="modal" data-target="#viewCourse" title="Detail Course"><i class="glyphicon glyphicon-eye-open"></i></a>
                              <button id="'.$data->id_title.'"  class="btn btn-warning banned '.$publish.'" style="color: white" title="Banned Course">'.$status.'</a></button>
                              <button id="'.$data->id_title.'"  class="btn btn-danger delete" style="color: white"><i class="fa fa-trash-o" title="Delete Course"></i></a></button>
                                  </td>
                                  
                              </tr> '
                             ;
                             $no++;
                             }
                             ?>
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
                        <p id="description_id"></p>
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


              


              </div>

              <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript">
            $("button.view").click(function(event) {
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
          
      $("a.pickss").click(function(event) {
        if (confirm('Anda akan mengubah status pick pada course ini, anda yakin?')) {
              var id_title = $(this).attr('id');
              if (id_title != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/edit_pick",
                      type: 'post',
                      context: this,
                      data: {
                          id_title: id_title
                      },
                      success: function(e) {
                        if (e == 'true') {
                          if ($(this).children().hasClass('glyphicon-pushpin')) {
                                 $(this).html('<i class="glyphicon glyphicon-check"></i> ');
                                }
                                else{
                                  $(this).html('<i class="glyphicon glyphicon-pushpin"></i> ');
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
      $("button.delete").click(function(event) {
                if (confirm('Apa anda ingin menghapus course ini?')) {
              var id_title = $(this).attr('id');
              // alert(id_user);
              if (id_title != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/delete_course/",
                      type: 'post',
                      context: this,
                      data: {
                          id_title: id_title,
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
        if ($(this).hasClass('published')) {
                if (confirm('Apa anda ingin banned course ini?')) {
              var id_title = $(this).attr('id');
              var status = $(this).children().attr('class');
                              
              if (id_title != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/banned_course/",
                      type: 'post',
                      context: this,
                      data: {
                          id_title: id_title,
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
          }else{
            alert('Maaf, course ini dalam status pengembangan');
          }
          });
</script>