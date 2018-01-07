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
	                                <a class = "btn btn-info" href="'.base_url().'admin/edit_pick/'.$data->id_title.'"><i class="glyphicon glyphicon-hand-up"></i> Pick </a>
	                       			<input type="hidden" id="id_course" value="" class="form-control"> 
	                       			<button type="button" href="#" id="'.$data->id_title.'" class = "btn btn-success view" data-toggle="modal" data-target="#viewCourse"><i class="glyphicon glyphicon-eye-open"></i> View </a>
	                       			<button type="button" href="'.base_url().'index.php/admin/course_delete/'.$data->id_title.'" class = "btn btn-danger" style="margin-left:5px;"><i class="fa fa-trash-o"></i> Delete </button>  
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
                        <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive" id="image_id">
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
                       <!--  <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">Color</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                    <option value="gold">Gold</option>
                                    <option value="rose gold">Rose Gold</option>
                                    </select>
                            </div> -->
                            <!-- end col -->
                            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Capacity</option>
                                    <option value="">16GB</option>
                                    <option value="">32GB</option>
                                    <option value="">64GB</option>
                                    <option value="">128GB</option>
                                </select>
                            </div> -->
                            <!-- end col -->
                            <!-- <div class="col-md-4 col-sm-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div> -->
                            <!-- end col -->
                        <!-- </div> -->
                        <br>
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