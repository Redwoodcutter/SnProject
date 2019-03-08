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

            <?php $this->load->view('profile_cards/experiance_card') ?>
            
            <?php $this->load->view('profile_cards/education_card') ?>
            
            <?php $this->load->view('profile_cards/skill_card') ?>
            
            <?php $this->load->view('profile_cards/goal_card') ?>
            
            <?php $this->load->view('profile_cards/following_card') ?>
            

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
<?php  }?>
  </div>
<?php
    $this->load->view('_footer');
?>