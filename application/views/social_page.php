<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

<?php foreach($veriler as $rs) {?>
<div class="container">
<div class="col-lg-9">
    
     <?php foreach ($other_user_id as $uid){?>
            <li class="list-group-item" ><a href="<?=base_url()?>Messages/message_list/<?=$uid->user_id?>"></a></li> 
         
        </ul>
 
        <div class="card" >
          <div class="container">
            <div class="row">
              <img src="<?=base_url()?>upload/<?=$rs->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-top: 25px; float:left">
              <div class="col-lg-9">
                <div class="card-body"> 
                    <h4 class="card-title"><b><?=$uid->user_firstname?><?php echo ' ';?> <?=$uid->user_lastname?></b></h4>
                    <h5><?=$rs->e_mail?></h5>
                    <p class="card-title"><?=$rs->city;echo ' '; ?><?=$rs->location?></p>

                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                    <div class="btn-group">
                        <form>
                        <button class="btn btn-primary " type="button" >
                          Mesaj Gönder
                        </button>
                        </form>
                    </div>
                  
                    <?php } ?>
                    <hr>
                    <p class="card-text"><?=$rs->pt_message?></p>
                </div>
            </div>
           </div>
        </div>
    </div>
         <?php } ?>
    </div>
    
<?php } ?>
<?php
    $this->load->view('_footer');
?>
