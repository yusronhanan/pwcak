<div class="main-w3layouts" id="home">
  <!--top-bar-->
  <div class="top-search-bar">
    <div class="header-top-nav">
      <ul>
        <?php 
        if ($this->session->userdata('logged_in') == TRUE) {
          
         ?>
         <li class="dropdown at-drop ">
                  <a href="#" id="notifc" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i>NOTIF<span class="badge" id="amountnotif"></span></a>
                  <ul class="dropdown-menu menu1" id="mininotif" role="menu" style="min-width: 330px;max-height: 300px;overflow-y: scroll;">
                    
                    <li><a href="<?php echo base_url(); ?>notif" class="view" style="margin-left: 40px">View all messages</a></li>
                  </ul>
                </li>
        <li><a href="<?php echo base_url() ?>auth/logout" ><i class="fa fa-close" aria-hidden="true"></i>LOGOUT</a></li>
        <?php 
        }
        else { ?>
        
        <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>LOGIN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>REGISTER</a></li>
        
        <?php } ?>
      </ul>
    </div>
  </div>
  <!-- Modal1 -->
    

  <!-- //Modal1 -->

  <?php 
        if ($this->session->userdata('logged_in') != TRUE) { ?>
  <!-- Modal3 -->
    
        
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
      <!-- Modal content-->
        <div class="modal-content news-w3l">
            <div class="modal-header">
              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
              <h4>Login Your Account</h4>
              <!--newsletter-->
              <div class="login-main wthree">
                <form action="<?php echo base_url(); ?>auth/login" method="post" enctype="multipart/form-data">
                <input type="email" placeholder="Email" required="" name="email" class="form-control">
                <input type="password" placeholder="Password" name="password" class="form-control">
                <input type="submit" name="submit" value="Login">
              </form>
              </div>
            <!--//newsletter-->     
            </div>
          </div>
        </div>
       </div>
        

      <div class="clearfix"></div>
  <!-- //Modal3 -->

  <!-- Modal4 -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
      <!-- Modal content-->
        <div class="modal-content news-w3l">
            <div class="modal-header">
              <button type="button" class="close w3l" data-dismiss="modal">&times;</button>
              <h4>Register Now</h4>
              <!--newsletter-->
              <div class="login-main wthree">
              <form action="<?php echo base_url(); ?>auth/submit_user" method="post">
                <input type="text" placeholder="Name" name="name" class="form-control">
                <input type="email" placeholder="Email" required="" name="email" class="form-control">
                <input type="text" name="username" placeholder="Username" class="form-control">
                <input type="password" placeholder="Password" name="password" class="form-control">
                <input type="text" placeholder="City" name="city" class="form-control">
                <input type="text" name="bio" placeholder="Bio" class="form-control">
                <input type="submit" value="Register Now" name="submit">
              </form>
              </div>
            <!--//newsletter-->     
            </div>
          </div>
        </div>
       </div>
       <?php } ?>
      <div class="clearfix"></div>
  <!-- //Modal4-->
        <!-- <div class="search">
            <form action="#" method="post">
              <input type="search" placeholder="Search Here..." required="" />
              <input type="submit" value=" ">
            </form>
        </div>
          <div class="clearfix"></div> -->
  <!--//top-bar-->
  <!-- navigation -->
      <div class ="top-nav">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>


            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>" class="hvr-underline-from-center active">Home</a></li>
                <li><a href="<?php echo base_url(); ?>course" class="hvr-underline-from-center active">Courses</a></li>
                <li><a href="<?php echo base_url(); ?>discussion" class="hvr-underline-from-center active">Discussion</a></li>
                <!-- <li><a href="#gallery" class="hvr-underline-from-center scroll">Gdjvb</a></li>
                <li><a href="#team" class="hvr-underline-from-center scroll">Our Team</a></li>
                <li><a href="#events" class="hvr-underline-from-center scroll">Events</a></li> -->
                <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
                <li><a href="<?php echo base_url().$username_id; ?>" class="hvr-underline-from-center active">MyAccount</a>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="clearfix"> </div> 
        </nav>
      </div>