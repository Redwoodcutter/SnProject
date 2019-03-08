<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">

    <div class="row">
<?php foreach ($veriler as $rs){ ?>
      <div class="col-lg-9">

         <?php $this->load->view('profile_cards\info_card') ?>
     <!-- /.col-lg-9 -->
      <div class="col-lg-9">
          
        <div class="row">

            <?php $this->load->view('profile_cards\experiance_card') ?>
            
            <?php $this->load->view('profile_cards\education_card') ?>
            
            <?php $this->load->view('profile_cards\skill_card') ?>
            
            <?php $this->load->view('profile_cards\following_card') ?>
            

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    <!-- ExprerianceAdd Modal-->
  <div class="modal fade" id="ExprerianceAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
            <!-- İf page selection -->
            <?php $this->load->view('form_pages\exp_form') ?>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
<?php  }?>
  </div>
<?php
    $this->load->view('_footer');
?>