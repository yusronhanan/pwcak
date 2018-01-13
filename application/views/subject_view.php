<div class="page-title">
  <div class="title_left">
    <h3>List Subject</h3>
  </div>

</div>

<div class="x_panel">
<div class="x_content">
 
 
 <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12">
          <?php foreach ($list_subject as $l_sbj) {  ?>
           <a href="#" data-toggle="modal" data-target="#subject_see" id="<?php echo $l_sbj->id_config ?>"><span class="tag"><span><?php echo $l_sbj->text ?></span></span></a>
           <?php } ?>
        </div>
      </div>
      <!-- </div> -->
      <!-- <div class="form-group"> -->
        <!-- <label class="control-label">Subject</label> -->
        <!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
          <!-- <input id="tags_1" type="text" class="tags form-control" value="mathematics, sejarah, pemrograman" /> -->
          <!-- <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div> -->
        <!-- </div> -->
      <!-- </div> -->


      <br/>
 <div class="form-group">
<form id="demo-form" data-parsley-validate method="post" action="<?php echo base_url();?>admin/submit_sbj" enctype="multipart/form-data">
</div>
      <div class="form-group col-md-12" style="margin-left: 0px;">

        <div class="form-group">
          <label class="control-label">New Subject</label> <br/>
          <!-- <input type="text" id="" class="form-control" name="" required /> -->
          <input id="tags_1" type="text" name="subject" class="tags form-control" />
          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
        </div>
      </div>

      <br/>

      <div class="form-group">
       
          <button class="btn btn-primary" type="submit">Add New</button>
       
      </div>
    </form>


<div>
  <div aria-hidden="true" aria-labelledby="myModalView" role="dialog" tabindex="-1" id="subject_see" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit Subject</h4>
            </div>
             <button class="close deletesbj"><i class="fa fa-trash"></i></button>
                  <br>
            <form class="form-horizontal" action="#" role="form">
              <div class="modal-body">
                  <br>

                  <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Subject Text</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="subject_update" placeholder="subject">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-lg-12">
                              <button class="form-control btn btn-primary updatesbj" id="">Save</button>
                          </div>
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."  -->
<script type="text/javascript">
  $("a[data-target=#subject_see]").click(function(event) {
              var id_sbj = $(this).attr('id');
              // alert(id_sbj);
              $.ajax({
                      url: "<?php echo base_url()?>admin/getsubject/",
                      type: 'post',
                      context : this,
                      data: {
                          id_sbj: id_sbj
                      },
                      success: function(e) {
                          var data = e.split("|");
                          $('button.updatesbj').attr('id',data[0]);
                          $('button.deletesbj').attr('id',data[0]);
                          $('input#subject_update').val(data[1]);
                           
                      }
                  });
});
  $("button.updatesbj").click(function(event) {
              var id_sbj = $(this).attr('id');
              var text_sbj = $('input#subject_update').val();
              // alert(id_sbj);
              $.ajax({
                      url: "<?php echo base_url()?>admin/updatesubject/",
                      type: 'post',
                      context : this,
                      data: {
                          id_sbj: id_sbj,text_sbj:text_sbj
                      },
                      success: function(e) {
                          if (e == 'false') {
                            alert('Maaf, coba lagi');
                          }
                          else{
                          $('a#'+id_sbj).children().children().html(e); 
                          $('#subject_see').modal('hide'); 
                          }
                          
                           
                      }
                  });
});
  $("button.deletesbj").click(function(event) {
      if (confirm('Apa anda yakin ingin menghapus course ini?')) {
              var id_sbj = $(this).attr('id');
              $.ajax({
                      url: "<?php echo base_url()?>admin/deletesubject/",
                      type: 'post',
                      context : this,
                      data: {
                          id_sbj: id_sbj
                      },
                      success: function(e) {
                          if (e == 'false') {
                            alert('Maaf, anda tidak bisa menghapus subject yang telah digunakan di course');
                          }
                          else{
                          $('a#'+id_sbj).remove(); 
                          $('#subject_see').modal('hide'); 
                          }
                          
                           
                      }
                  });
            }
});

</script>