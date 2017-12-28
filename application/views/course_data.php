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
	                       			<a href="#" class = "btn btn-success" data-toggle="modal" data-target="#viewCourse"><i class="glyphicon glyphicon-eye-open"></i> View </a>
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

	        <div class="modal fade product_view" id="viewCourse">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">HTML5 is a markup language</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Product Id: <span>51526</span></h4>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">Color</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                    <option value="gold">Gold</option>
                                    <option value="rose gold">Rose Gold</option>
                                    </select>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Capacity</option>
                                    <option value="">16GB</option>
                                    <option value="">32GB</option>
                                    <option value="">64GB</option>
                                    <option value="">128GB</option>
                                </select>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add To Wishlist</button>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>