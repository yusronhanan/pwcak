
<div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-user"></i></div>
          <div class="count"><?php

                        echo $this->db->count_all_results('user');

                        ?></div>
          <h3>All Users</h3>
          <a href="<?php echo base_url(); ?>admin/get_user"><p>View Details<i class="fa fa-arrow-circle-right"></i></p></a>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-tasks"></i></div>
          <div class="count"><?php
                            echo $this->db->count_all_results('course_title');
                            ?></div>
          <h3>All Courses</h3>
          <a href="<?php echo base_url(); ?>admin/get_user"><p>View Details<i class="fa fa-arrow-circle-right"></i></p></a>
        </div>
      </div>
      
    </div>
             