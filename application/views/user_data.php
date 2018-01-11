<style type="text/css">
	.user_img{
		display: block;
		height: 200px;
		width: 200px;
		margin: auto;
	}

</style>

<div class="tab-content">
                   <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                   	<div class="panel panel-default">
                   		<div class="panel-heading">User Data</div>
                   		<div class="panel-body">
	                <div class="table-responsive tab-pane fade in active" id="usr">
	                    <table class="table table-hover">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>ID User</th>
	                                <th>Email User</th>
	                                <th>Username</th>
	                                <th>City</th>
	                                <th>Bio</th>
	                                <th colspan="2">Action</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                            	<?php
	                            	$no = 1;
	                            	foreach($user as $data){

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
	                                id="'.$data->id_user.'" data-toggle="modal" data-target="#myModalView" style="color: white"><i class="glyphicon glyphicon-eye-open"></i> Detail </a></button>
	                                <input type="hidden" name="id_user" placeholder="ID User" class="form-control" value=""> 
	                       			<button type="button" href="#" id="'.$data->id_user.'" class="btn btn-success update" data-toggle="modal" data-target="#myModalEdit" style="color: white"><i class="fa fa-edit"></i> Edit </a></button>
	                       			<a href="'.base_url().'index.php/admin/user_delete/'.$data->id_user.'" class = "btn btn-danger"><i class="fa fa-trash-o"></i> Delete </button>
	                                </td>
	                                
	                            </tr>';
	                            $no++;
	                        }
	                        ?>
	                    </tr>
	                </tbody>
	            </table>
	            <?php echo $pagination; ?>
	        </div>
	        </div>
	    </div>
	                            
	                <!-- /.table-responsive -->
	                

	                <!--Modal edit-->

						<!-- <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" >
							<div class="modal-dialog" role="document"> -->
							<!-- Modal content-->
								<!-- <div class="modal-content news-w3l">
										<div class="modal-header">
											<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
											<h4>Edit Profile</h4> -->
											<!--newsletter-->
											
											<!-- <div class="login-main wthree">
												<form action="#" method="post">
													
													<?php 
											       foreach ($detail as $data) {?>
													<h5> Email User </h5> <input type="text"  name="email" class="form-control" id="email_id" value="<?php echo $data['email']; ?>">
													<h5> Username </h5> <input type="text"  name="Username" class="form-control" id="username_id" value="<?php echo $data['username']; ?>">
													<h5> City </h5> <input type="text"  name="city" class="form-control" id="city_id" value="<?php echo $data['city']; ?>">
													<h5> Bio </h5> <input type="text" name="bio" class="form-control" id="bio_id"
													value="<?php echo $data['bio']; ?>"><br>
												</form>
												<?php } ?>
											</div>		
										</div>
								</div>
							</div>
						</div> -->

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
                        <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="user_img" id="image_id">
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
	                            <input type="text" class="form-control" id="city_id" name="pekerjaan" placeholder="" disabled>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Bio :</label>
	                        <div class="col-lg-10">
	                            <input type="text" class="form-control" id="bio_id" name="pekerjaan" placeholder="" disabled>
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


					
<!-- Modal Ubah -->
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
	                            <input type="text" class="form-control" id="city_idd" name="pekerjaan" placeholder="Tuliskan Pekerjaan">
	                        </div>
	                    </div>
	                    <br>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Bio :</label>
	                        <div class="col-lg-10">
	                            <input type="text" class="form-control" id="bio_idd" name="pekerjaan" placeholder="Tuliskan Pekerjaan">
	                        </div>
	                    </div>
	                    <br>

	                    

	                </div>
	                <div class="modal-footer">
	                    <a class="btn btn-info updateclass" href="#" id=""> Simpan&nbsp;</a>
	                    <a class="btn btn-warning" data-dismiss="modal"> Batal</a>
	                </div>
                </form?
            </div>
        </div>
    </div>
</div>
							<div class="clearfix"></div>

						
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
					                 $('img#image_id').attr('src','<?php echo base_url();?>assets/images/' +data[6]);
					            }
					        });
					    } else {
					        $('#pro_name').html();
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
					            }
					        });
					    } else {
					        $('#pro_name').html();
					    }
					});

						$("a.updateclass").click(function(event) {
					    var id_user =  $(this).attr('id');
					    var email =    $('input#email_idd').val();
					    var username = $('input#username_idd').val();
					    var city =     $('input#city_idd').val();
					    var bio =      $('input#bio_idd').val();
					    var bd =       $('button.view#'+id_user).parent();
					    // alert(id_user+email+username+city+bio);
					    // alert(product_id);
					    if (id_user != "") {
					        $.ajax({
					            url: "<?php echo base_url()?>admin/updateUser/",
					            type: 'post',
					            data: {
					                id: id_user,
					                email : email,
					                username:username,
					                city:city,
					                bio:bio,
					            },
					            success: function(e) {
					                var data = e.split("|");
					                // $('a.update_id').attr('href', '<?php echo base_url()?>admin/updateUser/'+ data[0]);
					                // alert(e)
					                $('input#email_idd').attr('value',data[1]);
					                $('input#username_idd').attr('value',data[2]);
					                $('input#city_idd').attr('value',data[3]);
					                $('input#bio_idd').attr('value',data[4]);
					                $('div#myModalEdit').modal('hide');


					                bd.prev().prev().prev().prev().html(data[1]);
					                bd.prev().prev().prev().html(data[2]);
					                bd.prev().prev().html(data[3]);
					                bd.prev().html(data[4]);

					            }
					        });
					    } else {
					        $('#pro_name').html();
					    }
					});

 
						 </script>
