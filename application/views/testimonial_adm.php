<div class="page-title">
  <div class="title_left">
    <h3>Testimonial Setting</h3>
  </div>

</div>


  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
         <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Profesi</th>
                            <th>Testimoni</th>
                            <th colspan="2">Action</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                         foreach ($list_testi as $testi) {
                          $tes = explode('|', $testi->text);
                          ?>
                        <tr id="<?php echo $testi->id_config ?>">
                          <td><?php echo $i++ ?></td>
                          <td><?php echo $tes[1] ?></td>
                          <td><?php echo $tes[2] ?></td>
                          <td><?php echo $tes[0] ?></td>
                          <td><a href="#" data-toggle="modal" data-target="#testi_see" class="btn btn-xs btn-success" id="<?php echo $testi->id_config ?>"><i class="fa fa-pencil"></i></a></td>
                        
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
        <br />
        <form method="post" action="<?php echo base_url();?>admin/newtesti" enctype="multipart/form-data" class="form-horizontal" role="form">

          <div class="form-group">
            <label for="">Nama :</label>
            <input type="text" id="" class="form-control" name="nama" required />
          </div>
          <div class="form-group">
            <label for="">Profesi :</label>
            <input type="text" id="" class="form-control" name="profesi" required />
          </div>

          <br/>

          <div class="form-group">
            <label for="text">Text : </label>
            <textarea id="text" required="required" class="form-control" name="testimoni" data-parsley-trigger="keyup" data-parsley-maxlength="200" 
            data-parsley-validation-threshold="10"></textarea>
          </div>
 
          <div class="form-group">
            <div>
              <button class="btn btn-primary" type="submit">Save</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

<div aria-hidden="true" aria-labelledby="myModalView" role="dialog" tabindex="-1" id="testi_see" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit Testimoni</h4>
            </div>
             <button class="close deletetesti"><i class="fa fa-trash"></i></button>
                  <br>
            <form method="post" action="<?php echo base_url();?>admin/edittesti" enctype="multipart/form-data" class="form-horizontal" role="form">
              <div class="modal-body">
                  <br>
                  <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="namee" placeholder="Nama" name="name">
                          </div>
                      </div>
                      <br>
                    <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Profesi</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="profesii" placeholder="Profesi" name="profesi">
                          </div>
                      </div>
                      <br>
                  <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Testimoni</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" id="testii" placeholder="Testimoni" name="testimoni"></textarea>
                            <input type="hidden" id="id_tests" name="id_testi">
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
  $("a[data-target=#testi_see]").click(function(event) {
              var id_testi = $(this).attr('id');
              $.ajax({
                      url: "<?php echo base_url()?>admin/gettesti/",
                      type: 'post',
                      context : this,
                      data: {
                          id_testi: id_testi
                      },
                      success: function(e) {
                          var data = e.split("|");
                          $('button.updatetesti').attr('id',data[0]);
                          $('button.deletetesti').attr('id',data[0]);
                          $('input#id_tests').val(data[0]);
                          $('input#namee').val(data[1]);
                          $('input#profesii').val(data[2]);
                          $('textarea#testii').html(data[3]);
                           
                      }
                  });
});
    $("button.deletetesti").click(function(event) {
      if (confirm('Apa anda yakin ingin menghapus testimoni ini?')) {
              var id_testi = $(this).attr('id');
              $.ajax({
                      url: "<?php echo base_url()?>admin/deletetesti/",
                      type: 'post',
                      context : this,
                      data: {
                          id_testi: id_testi
                      },
                      success: function(e) {
                          if (e == 'false') {
                            alert('Maaf gagal, coba lagi');
                          }
                          else{
                          $('tr#'+id_testi).remove(); 
                          $('#testi_see').modal('hide'); 
                          }
                          
                           
                      }
                  });
            }
});
</script>