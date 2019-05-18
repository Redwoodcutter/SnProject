
<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-2">
            
            
        <ul class="list-group border-info" style="height: 500px; overflow-y: scroll;">
          <?php foreach ($other_user_id as $uid){?>
            <li class="list-group-item border-info" >
                <p><a  class="btn" href="<?=base_url()?>Messages/message_list/<?=$uid->user_id?>">
                <img class="d-flex mr-3 rounded-circle" style="max-width: 40px; margin-left: 20px;" src="<?=base_url()?>upload/<?=$uid->picture?>" alt=""><?=$uid->user_firstname?> <?=$uid->user_lastname?></a>
                </p>
            </li> 
          <?php } ?>
        </ul>
            
        </div>
        

        <div class="col-lg-10">
            
        <div class=" col-lg-12">
            <div class="jumbotron bg-info" style="height: 600px; overflow-y: scroll;">
           <!--  <?php foreach ($o_user_id as $ui ){?>
                <hr5 style="background-color: white; float:right;">
                <?=$ui->message?>
                </hr5>
                <br>      
                <?php } ?>
                <br>
                <br>
                 <?php foreach ($ouid as $ui ){?>
                <hr5 style="background-color: white; float:left; ">
                <?=$ui->message?>
                </hr5>
                <br>      
                <?php } ?> -->
                
                
                 <?php foreach ($Messages as $msg ){?>
                
                <?php if(($msg->user_id == $this->session->Member_session["Id"] && $o_user_id[0]->other_user_id ==$msg->other_user_id) || ($msg->other_user_id==$this->session->Member_session["Id"] && $o_user_id[0]->other_user_id==$msg->user_id)){
                  ?>
                <hr5>
                          <div class="card text-white  mb-12" >
                            <a href="<?=base_url()?>Home/profile/<?=$Msj_user_id['0']->user_id?>" class="card-header bg-primary text-white-50"><?=$msg->sender_name?> <?=$msg->time?></a>
                            <div class="card-body">
                              <p class="card-text text-body"><?=$msg->message?></p>
                            </div>
                          </div>
                      
                </hr5>
                <br/>
                
                <?php }  ?>
                 <?php } ?>
                
                
            </div>
            
            <form  class="modal-body"  method="post" action="<?=base_url()?>Messages/message_send/<?=$Msj_user_id['0']->user_id?>">
            <input type="text" class="form-control border-primary" id="Message" placeholder="Message" name="Message" >
            <input type="text" hidden class="form-control" id="Id" placeholder="Id" name="Id" value="<?=$Msj_user_id['0']->user_id?>" >
                <br>
            <button type="submit" class="btn btn-primary"style="float: right;">Gönder</button>
            </form>
        </div>
        </div>
            <!-- Categories Widget -->
    </div>
</div>



<?php
    $this->load->view('_footer');
?>