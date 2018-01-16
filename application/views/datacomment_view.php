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
                          <th>No </th>
                          <th>ID Comment</th>
                          <th>Title</th>
                          <th>Name</th>
                          <th>Subject Comment</th>
                          <th>Text Comment</th>
                          <th>Reply ID</th>
                          <th>Date</th>
                          <th colspan="2">Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                              
                                <?php 
                                $no = 1;
                                foreach($comment as $data){
                                echo '
                                  <td>'.++$start.'</td>
                                  <td>'.$data->id_comment.'</td>
                                  <td>'.$data->title.'</td>
                                  <td><a href="'.base_url().$data->username.'">'.$data->name.'</a></td>
                                  <td>'.$data->subjectcom.'</td>
                                  <td>'.$data->text_comment.'</td>
                                  <td>'.$data->reply_id.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td colspan="2"> 
                              <a class = "btn btn-success" id="'.$data->id_comment.'" href="'.base_url().'discuss/'.$data->random_code.'" title="Go to Discussion">Go to</a>
                              <button id="'.$data->id_comment.'"  class="btn btn-danger delete" title="Delete Comment" style="color: white"><i class="fa fa-trash-o"></i></a></button>
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

                <!-- <div class="modal fade product_view" id="viewCourse">
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
                    </a> -->
                        <!-- <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div> -->
                <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
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
</div> -->


              


              </div>

            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript">

              $("button.delete").click(function(event) {
                if (confirm('Apa anda ingin menghapus comment ini?')) {
              var id_comment = $(this).attr('id');
              // alert(id_user);
              if (id_comment != "") {
                  $.ajax({
                      url: "<?php echo base_url()?>admin/delete_discuss/",
                      type: 'post',
                      context: this,
                      data: {
                          id_comment: id_comment,
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

          //   $("button.view").click(function(event) {
          //     var id_title = $(this).attr('id');
          //     // alert(product_id);
          //     if (id_title != "") {
          //         $.ajax({
          //             url: "<?php echo base_url()?>admin/detcourse/"+ id_title,
          //             type: 'post',
          //             data: {
          //                 id: id_title
          //             },
          //             success: function(e) {
          //                 var data = e.split("|");
          //                 // $('#id_user').attr('href', '<?php echo base_url()?>Page/edit_product/' + data[0]);
          //                 $('span#title_id').html(data[0]);
          //                 $('h3#id_title').html(data[1]); 
          //                 $('p#description_id').html(data[5]);
          //                 $('h5#subject_id').html(data[2]);
          //                 $('img#image_id').attr('src','<?php echo base_url(); ?>assets/images/' + data[4]);
          //                 $('h5#date_id').html(data[3]);
          //                 $('h5#visitor_id').html(data[6]);
          //                 $('a#go_lesson').attr('href','<?php echo base_url(); ?>lesson/' + data[7]);
          //                 $('a#go_discuss').attr('href','<?php echo base_url(); ?>discuss/' + data[7]);
                          
          //             }
          //         });
          //     }
          // });
</script>