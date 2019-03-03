<?php 
    $this->load->view('_header');
?>
<body class="bg-gradient-primary">
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?php base_url()?>register_add" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="FirstName" name="FirstName"placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="LastName"name="LastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="InputEmail"name="InputEmail" placeholder="Email Address">
                </div>
                <div class="form-group ">
                  <div class="">
                    <input type="password" class="form-control form-control-user" id="Password"name="Password" placeholder="Password">
                  </div>
                  
                </div>
                  <button class="btn btn-primary btn-user btn-block">  Register Account</button>
                 
                
                <hr>
              
              </form>
              <hr>
             
              <div class="text-center">
                  <a class="small" href="">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



<?php 
    $this->load->view('_footer'); 
?>
    
