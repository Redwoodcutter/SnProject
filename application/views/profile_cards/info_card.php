<?php foreach($veriler as $rs) {?>
  
<div class="col-lg-9">
 
        <div class="card" >
          <div class="container">
            <div class="row">
              <img src="<?=base_url()?>upload/<?=$rs->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-top: 25px; float:left">
              <div class="col-lg-9">
                <div class="card-body"> 
                    <h4 class="card-title"><b><?=$rs->first_name?><?php echo ' ';?><?=$rs->last_name?></b></h4>
                    <h5><?=$rs->e_mail?></h5>
                    <p class="card-title"><?=$rs->city;echo ' '; ?><?=$rs->location?></p>

                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Profil Bölümü Ekle
                        </button>
                      
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EducationAdd">Tanıtım Mesajı Ekle</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ExprerianceAdd">Deneyim Bilgisi Ekle</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EducationAdd">Eğitim Bilgisi Ekle</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#SkillAdd">Yetenek Bilgisi Ekle</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#GoalAdd">Başarım Bilgisi Ekle</a>
                        </div>
                    </div>
                  
                    <?php }else {?>
                    <button type="button" href="#" data-toggle="modal" data-target="#Relation" class="btn btn-primary">Bağlantılara Ekle</button>
                    <button type="button"  class="btn btn-primary">Mesaj Gönder</button>
                    <?php } ?>
                    <hr>
                    <p class="card-text"><?=$rs->pt_message?></p>
                </div>
            </div>
           </div>
        </div>
    </div>
     <!-- Logout Modal-->
        <div class="modal fade" id="Relation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Arkadaşlık istegi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">... kişisini bağlantılara eklemek istiyor musunuz</div>
              <form class="modal-body"  method="post" action="<?= base_url()?>Profile/relation/<?=$rs->id?>">
                           <input hidden class="form-control" id="Id"  name="Id" value="<?=$rs->id?>" >  
                             <input hidden class="form-control" id="Firstname"  name="Firstname" value="<?=$rs->first_name?>" >  
                                  <input hidden class="form-control" id="Lastname"  name="Lastname" value=" <?=$rs->last_name?>" >
                                       <input hidden class="form-control" id="Status"  name="Status" value="0" >  
                       
                                         
             
              
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hayır</button>
                <button class="btn btn-primary" type="submit" >Evet</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        
    
</div>

<?php } ?>