
<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            
            
        <ul class="list-group" style="height: 500px; overflow-y: scroll;">
          <?php foreach ($other_user_id as $uid){?>
            <?=$uid->user_firstname?> <?=$uid->user_lastname?>
          <?php } ?>
        </ul>
            
            
        
        </div>
        <div class="col-lg-9">
            
        <div class=" col-lg-9">
            <div class="jumbotron" style="height: 400px; overflow-y: scroll;">
                
                <p style="background-color: white; float:left;">
                    alınan mesaj
                </p>
                <br>
                <br>
                <p style="background-color: white; float:right;">
                    gönderilen mesaj
                </p>
                
            </div>
            <input type="text" class="form-control" id="Mesaj" placeholder="Mesaj" name="Mesaj" >
                <br>
            <button type="submit" class="btn btn-primary"style="float: right;">Gönder</button>
        </div>
               
        
        </div>
    </div>
</div>



<?php
    $this->load->view('_footer');
?>