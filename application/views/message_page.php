
<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            
            
        <ul class="list-group" style="height: 500px; overflow-y: scroll;">
          <?php foreach ($other_user_id as $uid){?>
            <li class="list-group-item" ><a href="<?=base_url()?>Messages/message_list/<?=$uid->user_id?>"><?=$uid->user_firstname?> <?=$uid->user_lastname?></a></li> 
          <?php } ?>
        </ul>
            
           
            
            
        
        </div>
        <div class="col-lg-9">
            
        <div class=" col-lg-9">
            <div class="jumbotron" style="height: 400px; overflow-y: scroll;">
                <?php foreach ($user_id as $ui ){?>
                <p style="background-color: white; float:left;">
                    <?=$ui->?>
                </p>
                <?php }  ?>
                <br>
                <br>
                <p style="background-color: white; float:right;">
                    gönderilen mesaj
                </p>
                
            </div>
            
            <form  class="modal-body"  method="post" action="<?=base_url()?>Messages/message_send/<?=$uid->user_id?>">
            <input type="text" class="form-control" id="Message" placeholder="Message" name="Message" >
            <input type="text" class="form-control" id="Id" placeholder="Id" name="Id" >
                <br>
            <button type="submit" class="btn btn-primary"style="float: right;">Gönder</button>
            </form>
        </div>
               
        
        </div>
    </div>
</div>



<?php
    $this->load->view('_footer');
?>