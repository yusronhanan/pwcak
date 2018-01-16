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
                    <h2>All Discussion </h2>
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
                          <th colspan="2">Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                              
                                <?php 
                                $no = 1;
                                foreach($discuss as $data){
                               echo '
                                  <td>'.++$start.'</td>
                                  <td>'.$data->id_comment.'</td>
                                  <td>'.$data->title.'</td>
                                  <td><a href="'.base_url().$data->username.'">'.$data->name.'</a></td>
                                  <td>'.$data->subjectcom.'</td>
                                  <td>'.$data->text_comment.'</td>
                                  <td>'.$data->created_at.'</td>
                                  <td colspan="2"> 
                              <a class = "btn btn-success" id="'.$data->id_comment.'" href="'.base_url().'discuss/'.$data->random_code.'" title="Go to Discussion">Go to</a>
                              <button id="'.$data->id_comment.'"  class="btn btn-danger delete" title="Delete Discussion" style="color: white"><i class="fa fa-trash-o"></i></a></button>
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