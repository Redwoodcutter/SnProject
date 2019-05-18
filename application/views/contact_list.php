<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

 <div class="container">
      <div class="col-lg-12">
            <h1 class="h3 mb-0 text-gray-800 "></h1>
            <div class="card text border-info">
             <div class="card-body">
               <a href="<?=base_url()?>Jobs/Job_view_mine" class="btn ">İş ilanlarımı takip et</a>
                 <a href="<?=base_url()?>Jobs/Job_publish" class="btn ">Yayınladıgım iş ilanlarına bak</a>
               <button class="btn btn-info " style="float: right;"><a href="<?=base_url()?>Jobs/Add" class="text-white" style="float: right;">İş ilanı yayınla</a></button>
               <p href="<?=base_url()?>Jobs/Search" class="btn " style="float: right;">Yetenekli Kişiler mi ariyorsun?</p>
             </div>
            </div>
       </div>
                     <br />
     <div class="col-lg-12">
            <div class="card text-center border-info">
                <p> <h5>Hayalinizdeki iş sadece bir arama kadar uzağınızda…</h5></p>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-lg-6">
                            <form action="<?php echo site_url('jobs/search_keyword_jobs');?>" method = "post">
                                <div class="input-group-append">
                                <input type="text" name="keyword" id="" placeholder="İlanlarda Ara" class="form-control"  />
                               <button class="btn btn-primary" type="submit">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                                 </div>
                            </form>
                            </div>
                                <div class="col-lg-6">
                            <form action="<?php echo site_url('jobs/search_keyword');?>" method = "post">
                                <div class="input-group-append">
                               <input type="text" name="keyword" id="" placeholder="Konum ara" class="form-control" />
                               <button class="btn btn-primary" type="submit">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                                </div>
                            </form>
                                </div>
                        </div>
                    </div>
                 
                 </div>
            </div>
    </div>
                     
         <br/>
                     
    <div class="col-lg-12">
      
    <div class="card text-center border-info">
        <p> <h5>Başvurdugunuz iş ilanları…</h5></p>
      <div class="container">
         <div class="row"> 
         <?php foreach($mine_jobs as $j){ ?>
        <div class="col-lg-3">
        <div class="card card-group border-info">
         <div class="card" style="width: 18rem;">
         <img class="card-img-top" src="<?=base_url()?>upload/<?=$j->picture?>" alt="Card image cap" style="height: 10rem;">
            <div class="card-body">
              <h5 class="card-title"><?=$j->title?></h5>
              <p class="card-text"><?=$j->company?></p>
               <p class="card-text"><?=$j->city?> <?=$j->location?></p>
              <a href="<?=base_url()?>Jobs/job_view/<?=$j->job_id?>" class="btn btn-primary">İlana Git</a>
            </div>
            </div>   
        </div>            
        </div>
            
             
         <?php } ?>
            
          </div>
        <br/>
    </div>
    </div>
    </div>
         



<?php   
    $this->load->view('_footer'); 
?>