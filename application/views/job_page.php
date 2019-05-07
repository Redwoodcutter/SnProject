
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
               <a href="<?=base_url()?>Jobs/Interesting" class="btn ">Kariyer ilgileri</a>
               <a href="<?=base_url()?>Jobs/Add" class="btn " style="float: right;">İş ilanı yayınla</a>
               <a href="<?=base_url()?>Jobs/Search" class="btn " style="float: right;">Yetenekli Kişiler mi ariyorsun?</a>
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
                                <input type="text" name="" id="" placeholder="İlanlarda Ara" class="form-control" />
                               <button class="btn btn-primary" type="button">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                                 <input type="text" name="" id="" placeholder="Konum ara" class="form-control" />
                               <button class="btn btn-primary" type="button">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                        </div>
                    </div>
                 
                 </div>
            </div>
    </div>
                     
         <br/>
                     
    <div class="col-lg-12">
        
    <div class="card text-center">
        <p> <h5>iş aramaları…</h5></p>
       
        <div class="card card-group">
         <?php foreach($jobs as $j){ ?>
         <div class="card" style="width: 18rem;">
         <img class="card-img-top" src="<?=base_url()?>upload/<?=$j->picture?>" alt="Card image cap" style="height: 10rem;">
            <div class="card-body">
              <h5 class="card-title"><?=$j->title?></h5>
              <p class="card-text"><?=$j->company?></p>
               <p class="card-text"><?=$j->city?> <?=$j->country?></p>
              <a href="#" class="btn btn-primary">İlana Git</a>
            </div>
         </div>
         <?php } ?>
           </div>
    </div>          
    </div>
                     
       <!-- AJAX LİVE SEARCH   -->
                     <br />
                     <br />
                     <br />

                     <div class="form-group">
                             <div class="input-group">
                                     <span class="input-group-addon">Search</span>
                                     <input type="text" name="search_text" id="search_text" placeholder="İlanlarda Ara" class="form-control" />
                                     <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                      <input type="text" name="search_text" id="search_text" placeholder="Konum ara" class="form-control" />
                                       <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                             </div>
                         <div id="result"></div>
                     </div>
                     <br />

             </div>
             <div style="clear:both"></div>
             <br />
             <br />
             <br />
             <br />
        <form class="modal-body" method="post" action="<?=base_url()?>" >
          <div class="modal fade" id="AddJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">iş ilani ekleyin</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                  
                <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text">Açıklama</span>
                    </div>
                    <textarea class="form-control" id="Message" name="Message" aria-label="With textarea"></textarea>
                    <input  hidden type="text" class="form-control" id="Like" placeholder="Like" name="Like" value="0" >   
                </div>
                <div class="input-group-group col-md-6">
                  <label for="inputAddress">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name" name="Name">
                </div>
                <div class="input-group-group col-md-6">
                  <label for="inputAddress">Location</label>
                  <input type="text" class="form-control" id="Location" placeholder="Location" name="Location">
                </div>
                <div class="input-group-group col-md-6">
                  <label for="inputAddress">City</label>
                  <input type="text" class="form-control" id="City" placeholder="City" name="City">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Add</button>
                </div>
              </div>
            </div>
          </div>
        </form >
                
        <?php     $this->load->view('_footer'); ?>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>home/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>