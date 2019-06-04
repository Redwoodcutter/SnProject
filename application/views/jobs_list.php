<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>


<div class="container">
<div class="col-lg-9">
    <div class="row">
     <?php foreach ($job_people as $uid){?>

            
       <div class="col-lg-3">
             
        <div class="card card-group ">
         <div class="card border-info" style="width: 18rem; height: 300px;" >
         <img class="card-img-top" src="<?=base_url()?>upload/<?=$uid->picture_user?>" alt="Card image cap" style="height: 10rem;">
            <div class="card-body">
              <h5 class="card-title"><?=$uid->user_name_f?> <?=$uid->user_name_l?></h5>
              <a href="<?=base_url()?>Home/profile/<?=$uid->user_id?>" class="btn btn-primary">Profili Gör</a>
            </div>
            </div>   
        </div>            
        
       </div>
          
       
   
         <?php } ?>
         </div>
     </div>
    </div>
    

<?php
    $this->load->view('_footer');
?>
