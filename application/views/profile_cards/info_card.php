<?php foreach($veriler as $rs) {?>
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
<?php } ?>