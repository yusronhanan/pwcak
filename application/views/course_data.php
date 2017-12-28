<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                   	<div class="panel panel-default">
                   		<div class="panel-heading">Course Data</div>
                   		<div class="panel-body">
	                <div class="table-responsive tab-pane fade in active" id="crse">
	                    <table class="table table-hover">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>ID User</th>
	                                <th>Title</th>
	                                <th>Category</th>
	                                <th>Date</th>
	                                <th colspan="2">Action</th>
	                                <th></th>
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
	                                <button class = "btn btn-info"><i class="glyphicon glyphicon-ok-sign"></i> Approve </button>
	                       			<button class = "btn btn-warning"><i class="glyphicon glyphicon-remove-sign"></i> Decline </button>
	                       			<a href="" class = "btn btn-success"><i class="glyphicon glyphicon-eye-open"></i> View </a>
	                       			<a href="'.base_url().'index.php/admin/course_delete/'.$data->id_title.'" class = "btn btn-danger"><i class="fa fa-trash-o"></i> Delete </button>  
	                                </td>
	                                <td> </td>
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
	            </div>
	        </div>