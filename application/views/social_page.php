<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

<?php foreach($veriler as $rs) {?>
<div class="container">
<div class="col-lg-9">
    <div class="row">
     <?php foreach ($other_user_id as $uid){?>

            
       <div class="col-lg-3">
             
        <div class="card card-group ">
         <div class="card border-info" style="width: 18rem; height: 300px;">
         <img class="card-img-top" src="<?=base_url()?>upload/<?=$uid->picture?>" alt="Card image cap" style="height: 10rem;">
            <div class="card-body">
              <h5 class="card-title"><?=$uid->user_firstname?> <?=$uid->user_lastname?></h5>
              <a href="<?=base_url()?>Messages/message_list/<?=$uid->other_user_id?>" class="btn btn-primary">Mesaj Gönder</a>
            </div>
            </div>   
        </div>            
        
       </div>
          
       
   
         <?php } ?>
         </div>
     </div>
    </div>
    
<?php } ?>
<?php
    $this->load->view('_footer');
?>
