
<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">
         <br />
         <br/>
                     
    <div class="col-lg-12">
        

         <div class="row"> 
             
         <?php foreach($veriler as $j){ ?>
              
        <div class="col-lg-8">
        <div class="card card-group">
         <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img class="card-img-top" src="<?=base_url()?>upload/<?=$j->picture?>" alt="Card image cap" style="height: 10rem;">
              <h5 class="card-title"><?=$j->title?></h5>
              <p class="card-text"><?=$j->company?></p>
               <p class="card-text"><?=$j->city?> <?=$j->country?></p>
                <p class="card-text"><?=$j->work_time?></p>
                 <p class="card-text"><?=$j->work_status?></p>
                     <p class="card-text"><?=$j->status_text?> <?=$j->time?></p>
            </div>
            </div>   
        </div>            
        </div>
             
         <?php } ?>
          </div>
    </div>
    </div>