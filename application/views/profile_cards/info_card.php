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
                <?php } ?>
                
                <hr>
                <p class="card-text"><?=$rs->pt_message?></p>
            </div>
            </div>
           </div>
        </div>
    </div>
    
</div>

<?php } ?>