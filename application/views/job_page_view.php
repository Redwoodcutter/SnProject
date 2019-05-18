
<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">
         <br />
         <br/>
                     
    <div class="col-lg-12">
         <div class="row"> 
                 <?php if($this->session->flashdata("mesaj")) { ?>
                     <div class="alert alert-info">
                         <a href="#" class="alert-danger">Hata</a>
                         <br>
                            <?=$this->session->flashdata("mesaj");?> 
                        </div>
                    <?php } ?>
             
         <?php foreach($veriler as $j){ ?>
              
        <div class="col-lg-8">
        <div class="card card-group border-primary">
         <div class="card" style="width: 20rem;">
            <div class="card-body">
                <img class="card-img-top" src="<?=base_url()?>upload/<?=$j->picture?>" alt="Card image cap" style="height: 10rem;">
                    <hr>
                    <a href="" data-toggle="modal" data-target="#Basvur" class="text-white btn btn-primary">Bu ilana Başvur</a>
                    
                    <hr>
             <h5 class="card-title"><?=$j->title?></h5>
             <p class="card-text"><b>Şirket:</b> <?=$j->company?></p>
             <p class="card-text"><b>Şehir:</b> <?=$j->city?> <b>Ülke:</b><?=$j->country?></p>
             <p class="card-text"><b>İş Türü:</b> <?=$j->work_time?> <b>İş Alanı:</b> <?=$j->work_status?></p>
             <p class="card-text"><?=$j->status_text?> <?=$j->time?></p>
                     
                
            </div>
            </div>   
        </div>            
        </div>
            <div class="col-lg-4">
                 
             <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Benzer ilanlar</div>
          
                <ul class="list-unstyled mb-0">
                 
                    <?php foreach($jobs as $j){ ?>
                     <li>
                        <div class="col-lg-12">
                        <div class="card card-group">
                         <div class="card" style="width: 18rem;">
                         <div class="card-body">
                              <h5 class="card-title"><?=$j->title?></h5>
                              <p class="card-text"><?=$j->company?></p>
                               <p class="card-text"><?=$j->city?> <?=$j->country?></p>
                              <a href="<?=base_url()?>Jobs/job_view/<?=$j->id?>" class="btn btn-primary">İlana Git</a>
                            </div>
                         </div>  
                        </div>
                        </div>
                           </li>
                     <?php } ?>
                </ul>
            </div>
        </div>
                 
        </div>            
        </div>
             
                
            </div>
             
         <?php } ?>
          </div>
    </div>
    </div>
    
    <form class="modal-body" method="post" action="<?=base_url()?>Jobs/Job_save" >
          <div class="modal fade" id="Basvur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Bu iş başvurusuna başvurmaktasınız</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="input-group">
                    
                    <input hidden  type="text" class="form-control" id="Like" name="JobId" value="<?=$veriler[0]->id?>" >
                    <input hidden  type="text" class="form-control" id="Like" name="JobTitle" value="<?=$veriler[0]->title?>" >
                    <input hidden  type="text" class="form-control" id="Like" name="JobCompany" value="<?=$veriler[0]->company?>" >
                    <input hidden  type="text" class="form-control" id="Like" name="JobCity" value="<?=$veriler[0]->city?>" >
                    <input hidden  type="text" class="form-control" id="Like" name="JobLocation" value="<?=$veriler[0]->country?>" >
                    <input hidden  type="text" class="form-control" id="Like" name="Picture" value="<?=$veriler[0]->picture?>" >
                        
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Hayır</button>
                  <button class="btn btn-primary" type="submit">Evet</button>
                </div>
              </div>
            </div>
          </div>
        </form>


<?php   
    $this->load->view('_footer'); 
?>