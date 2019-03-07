<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">

    <div class="row">
<?php foreach ($veriler as $rs){ ?>
      <div class="col-lg-9">

        <div class="card" >
           <img src="<?=base_url()?>upload/<?=$rs->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-left: 50px; margin-top: 25px; float:right">
              
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
                    <lu href="#">Experiance</lu>
                      <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                     <?php } ?>
                </h4>
                <?php foreach ($user_id as $eui){  ?>
                <h5>
                    <b><?=$eui->title?></b>
                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                    <button class="btn btn-primary" style="float:right;"  type="button">
                        <i class="fas fa-pen fa-sm"></i>
                    </button>
                    <?php } ?>
                </h5> 
                    <h5><?=$eui->company?></h5>
                    <p><?=$eui->start_month?> <?=$eui->start_year?>, <?=$eui->finish_month;?> <?=$eui->finish_year?></p>
                    <p><?=$eui->e_city?>, <?=$eui->e_location?></p>
                <?php } ?>
              </div>
            </div>
          </div>
            
        <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                    <a>Education</a>
                     <?php if($this->session->Member_session['Id'] == $rs->id){?>
                    <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                    </button>
                     <?php } ?>
                </h4>
                <?php foreach ($eu_id as $edui){  ?>
                    <h5>
                        <b><?=$edui->school?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float:right;"  type="button">
                            <i class="fas fa-pen fa-sm"></i>
                        </button>
                        <?php } ?>
                    </h5>
                    <h5><?=$edui->department?></h5>
                    <p><?=$edui->degree?></p>
                    <p><?=$edui->start_month?> <?=$edui->start_year?>, <?=$edui->finish_month;?> <?=$edui->finish_year?></p>
                    <p><?=$edui->e_text?></p>
                <?php } ?>
               </div>
            </div>
        </div>
            
        <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">     
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Skills
                       <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button">
                        <i class="fas fa-plus fa-sm"></i>
                        </button>
                       <?php } ?>
                  </lu>
                </h4>
                <?php foreach ($su_id as $sui){  ?>
                    <h5>
                        <b><?=$sui->skill?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float:right;"  type="button">
                        <i class="fas fa-pen fa-sm"></i>
                        </button>
                        <?php } ?>
                    </h5>
                    <h5><?=$sui->rating?></h5>
                <?php } ?>
                <h5><?=$rs->skill?></h5>
              </div>
            </div>
        </div>
            
        <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Başarılar</lu>
                   <?php if($this->session->Member_session['Id'] == $rs->id){?>
                  <button class="btn btn-primary" style="float: right;" type="button">
                        <i class="fas fa-plus fa-sm"></i>
                  </button>
                   <?php } ?>
                </h4>
                   <?php foreach ($gu_id as $gui){  ?>
                    <h5>
                        <b><?=$gui->title?></b>
                         <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float:right;"  type="button">
                            <i class="fas fa-pen fa-sm"></i>
                        </button>
                         <?php } ?>
                    </h5>
                    <p><?=$gui->start_month?> <?=$gui->start_year?>, <?=$gui->finish_month;?> <?=$gui->finish_year?></p>
                    <p><?=$gui->goal_text?></p>
                    <?php } ?>
              </div>

            </div>
        </div>
             <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <lu href="#">Following </lu>
                 <?php if($this->session->Member_session['Id'] == $rs->id){?>
                <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                </button>
                 <?php } ?>
                </h4>
                <h5><?=$rs->goal?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              
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