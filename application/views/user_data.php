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
	                                <td>'.$no.'</td>
	                                <td>'.$data->id_user.'</td>
	                                <td>'.$data->email.'</td>
	                                <td>'.$data->username.'</td>
	                                <td>'.$data->city.'</td>
	                                <td>'.$data->bio.'</td>
	                                <td colspan="2"> 
	                                <button class = "btn btn-primary"><a href="#" data-toggle="modal" data-target="#myModalEdit" style="color: white"><i class="fa fa-edit"></i> Edit </a></button>
	                       			
	                       			<button class = "btn btn-success"><a href="#" data-toggle="modal" data-target="#myModalView" style="color: white"><i class="glyphicon glyphicon-eye-open"></i> View </a></button>
	                       			<a href="'.base_url().'index.php/admin/user_delete/'.$data->id_user.'" class = "btn btn-danger"><i class="fa fa-trash-o"></i> Delete </button>
	                                </td>
	                                <td> </td>
	                            </tr>';
	                            $no++;
	                        }
	                        ?>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
	        </div>
	    </div>
	                            
	                <!-- /.table-responsive -->
	                

	                <!--Modal edit-->

						<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" >
							<div class="modal-dialog" role="document">
							<!-- Modal content-->
								<div class="modal-content news-w3l">
										<div class="modal-header">
											<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
											<h4>Edit Profile</h4>
											<!--newsletter-->
											<div class="login-main wthree">
												<form action="#" method="post">
													<h5> Email User </h5> <input type="text" value="emailnya" name="email">
													<h5> Username </h5> <input type="text" value="usernamenya" name="Username">
													<h5> City </h5> <input type="text" value="kotanya" name="city">
													<h5> Bio </h5> <input type="text" value="bionya" name="bio">

													<input type="submit" value="Save">
												</form>
											</div>		
										</div>
								</div>
							</div>
						</div>
							<div class="clearfix"></div>
					<!-- Modal edit -->


					<!--Modal lihat-->
						<div class="modal fade" id="myModalView" tabindex="-1" role="dialog" >
							<div class="modal-dialog" role="document">
							<!-- Modal content-->
								<div class="modal-content news-w3l">
										<div class="modal-header">
											<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
											<h4>Detail User</h4>
											<!--newsletter-->
											<div class="login-main wthree">
												<form action="#" method="post">
													<h5> Email User </h5> <input type="text" disabled value="emailnya" name="email">
													<h5> Username </h5> <input type="text" disabled value="usernamenya" name="Username">
													<h5> City </h5> <input type="text" disabled value="kotanya" name="city">
													<h5> Bio </h5> <input type="text" disabled value="bionya" name="bio">

													<!-- <input type="submit" value="Save"> -->
												</form>
											</div>		
										</div>
								</div>
							</div>
						</div>
							<div class="clearfix"></div>