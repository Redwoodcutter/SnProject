<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">

    <div class="row">
<?php foreach ($veriler as $rs){ ?>
      <div class="col-lg-9">

        <div class="card" >
           <img src="<?=base_url()?>upload/<?=$rs->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-left: 50px; margin-top: 25px;">
              
            <div class="card-body"> 
                 
               <h1 class="card-title"><?=$rs->first_name?><?php echo ' ';?><?=$rs->last_name?></h1>
                <h3 class="card-title"><?=$rs->city;echo ' '; ?><?=$rs->location?></h3>
                <h5><?=$rs->e_mail?></h5>
                <p class="card-text"><?=$rs->pt_message?></p>
            </div>
        </div>

      </div>
      <!-- /.col-lg-3 -->
      
      
      <div class="col-lg-9">
          
        <div class="row">

          <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Experiance </lu>
                </h4>
                    <?php foreach ($user_id as $eui){  ?>
                    <h5><b><?=$eui->title?></b></h5>
                    <h5><?=$eui->company?></h5>
                    <p><?=$eui->start_month?> <?=$eui->start_year?>, <?=$eui->finish_month;?> <?=$eui->finish_year?></p>
                    <p><?=$eui->e_city?>, <?=$eui->e_location?></p>
                    <?php } ?>
              </div>
            <?php if($this->session->Member_session['Id'] == $rs->id){?>
              <div class="card-footer">
                <small class="text-muted"> <a href="#" class="btn btn-primary">Ekle</a></small>
              </div>
            <?php } ?>
            </div>
          </div>
            
        <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                    <a>Education </a>
                </h4>
                <h5><?=$rs->collage?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            <?php if($this->session->Member_session['Id'] == $rs->id){?>
              <div class="card-footer">
                <small class="text-muted"> <a href="#" class="btn btn-primary">Ekle</a></small>
              </div>
            <?php } ?>
            </div>
        </div>
            
        <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">     
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Skills </lu>
                </h4>
                   <?php foreach ($su_id as $sui){  ?>
                    <h5><b><?=$sui->skill?></b></h5>
                    <h5><?=$sui->rating?></h5>
                    <?php } ?>
                <h5><?=$rs->skill?></h5>
                
              </div>
            <?php if($this->session->Member_session['Id'] == $rs->id){?>
              <div class="card-footer">
                <small class="text-muted"> <a href="#" class="btn btn-primary">Ekle</a></small>
              </div>
            <?php } ?>
            </div>
        </div>
            
        <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Başarılar </lu>
                </h4>
                   <?php foreach ($gu_id as $gui){  ?>
                    <h5><b><?=$gui->title?></b></h5>
                    <p><?=$gui->start_month?> <?=$gui->start_year?>, <?=$gui->finish_month;?> <?=$gui->finish_year?></p>
                    <p><?=$gui->goal_text?></p>
                    <?php } ?>
              </div>
               <?php if($this->session->Member_session['Id'] == $rs->id){?>
              <div class="card-footer">
                <small class="text-muted"> <a href="#" class="btn btn-primary">Ekle</a></small>
              </div>
                <?php } ?>
            </div>
        </div>
             <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <lu href="#">Following </lu>
                </h4>
                <h5><?=$rs->goal?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
               <?php if($this->session->Member_session['Id'] == $rs->id){?>
              <div class="card-footer">
                <small class="text-muted"> <a href="#" class="btn btn-primary">Ekle</a></small>
              </div>
                <?php } ?>
            </div>
          </div>
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