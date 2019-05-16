<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">
      <div class="col-lg-12">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <div class="card text">
             <div class="card-body">
               <a href="<?=base_url()?>Jobs/Saved" class="btn ">İş ilanlarımı takip et</a>
               <button class="btn btn-warning" style="float: right;"><a href="<?=base_url()?>Jobs/Add" class="btn " style="float: right;">İş ilanı yayınla</a></button>
               <p href="<?=base_url()?>Jobs/Search" class="btn " style="float: right;">Yetenekli Kişiler mi ariyorsun?</p>
             </div>
            </div>
       </div>
                     <br />
     <div class="col-lg-12">
            <div class="card text-center">
                <p> <h5>Hayalinizdeki iş sadece bir arama kadar uzağınızda…</h5></p>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group">
                            <form action="<?php echo site_url('jobs/search_keyword_jobs');?>" method = "post">
                               <input type="text" name="keyword" id="" placeholder="İlanlarda Ara" class="form-control"  />
                               <button class="btn btn-primary" type="submit">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                            </form>
                            <form action="<?php echo site_url('jobs/search_keyword');?>" method = "post">
                               <input type="text" name="keyword" id="" placeholder="Konum ara" class="form-control" />
                               <button class="btn btn-primary" type="submit">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                            </form>
                        </div>
                    </div>
                 
                 </div>
            </div>
    </div>
                     
         <br/>
                     
    <div class="col-lg-12">
        
    <div class="card text-center">
        <p> <h5>iş aramaları…</h5></p>
         <div class="row"> 
         <?php foreach($results as $j){ ?>
        <div class="col-lg-3">
        <div class="card card-group">
         <div class="card" style="width: 18rem;">
         <img class="card-img-top" src="<?=base_url()?>upload/<?=$j->picture?>" alt="Card image cap" style="height: 10rem;">
            <div class="card-body">
              <h5 class="card-title"><?=$j->title?></h5>
              <p class="card-text"><?=$j->company?></p>
               <p class="card-text"><?=$j->city?> <?=$j->country?></p>
              <a href="<?=base_url()?>Jobs/job_view/<?=$j->id?>"" class="btn btn-primary">İlana Git</a>
            </div>
            </div>   
        </div>            
        </div>
             
         <?php } ?>
          </div>
    </div>
    </div>
         