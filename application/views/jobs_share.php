<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">

    <div class="row">
           <div class="col-lg-6">
            
            <form method="post" action="<?=base_url()?>Jobs/job_picture_status_save/<?=$veriler[0]->id?>">
               <input type="text" hidden class="form-control" placeholder="Country" aria-label="Country" aria-describedby="Country" name="Status" value="1">
                <button type="submit" class="btn btn-primary">İlani Yayınla</button>
            </form>
        </div>
        
    </div>
</div>

<?php
    $this->load->view('_footer');
?>
