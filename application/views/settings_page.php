<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">

    <div class="row">
           <div class="col-lg-6">
            
            <form method="post" action="<?=base_url()?>Settings/picture/<?=$veri[0]->id?>">
                <img src="<?=base_url()?>upload/<?=$veri[0]->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-left: 50px; margin-top: 25px;">
              
                <button type="submit" class="btn btn-primary">Resim Ekle</button>
            </form>
               
                 <form method="post" action="<?=base_url()?>Settings/guncelle/<?=$veri[0]->id?>">           
                    <div class="form-group" >
                        <label id="metin adi">Id</label>
                        <input type="text" class="form-control" id="Id" name="Id" value="<?=$veri[0]->id?>" >
                    </div>
                    <div class="form-group">
                        <label id="kategori">userId</label>
                        <input type="text" class="form-control" id="userId" name="userId" value="<?=$veri[0]->user_id?>">
                    </div>
                      <h4>Hesap Ayarları</h4>
                    <div class="form-group">
                        <label id="konu">FirstName</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?=$veri[0]->first_name?>">
                    </div>   
                    <div class="form-group">
                        <label id="resim">LastName</label>
                        <input type="text" class="form-control" id="email" name="LastName" value="<?=$veri[0]->last_name?>">
                    </div>
                    <div class="form-group">
                        <label id="resim">E_mail</label>
                        <input type="text" class="form-control" id="E_mail" name="E_mail" value="<?=$veri[0]->e_mail?>">
                    </div> 
                    <div class="form-group">
                        <label id="galeri">Password</label>
                        <input type="text" class="form-control" id="Password" name="Password" value="<?=$veri[0]->password?>">
                    </div> 
                    <div class="form-group">
                        <label id="tarih">Job</label>
                        <input type="text" class="form-control" id="telefon" name="Job" value="<?=$veri[0]->job?>">
                    </div> 
                    <div class="form-group">
                        <label id="tarih">Location</label>
                        <input type="text" class="form-control" id="sehir" name="Location"value="<?=$veri[0]->location?>" >
                    </div>
                    <div class="form-group" >
                    <label id="metin adi">Expriance</label>
                    <input type="text" class="form-control" id="Expriance" name="Expriance" value="<?=$veri[0]->experiance?>">
                         </div>
                    <div class="form-group">
                        <label id="kategori">skill</label>
                        <input type="text" class="form-control" id="skill" name="skill" value="<?=$veri[0]->skill?>">
                    </div>
                    <div class="form-group">
                        <label id="konu">Goal</label>
                        <input type="text" class="form-control" id="Goal" name="Goal" value="<?=$veri[0]->goal?>">
                    </div>   
                      
                <h4>Sosyal Medya Hesapları</h4>
                    <div class="form-group" >
                        <label id="metin adi">facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$veri[0]->location?>">
                    </div>
                    <div class="form-group">
                        <label id="konu">twitter</label>
                        <input type="text" class="form-control" id="konu" name="twitter" value="<?=$veri[0]->skill?>">
                    </div>   
                    <div class="form-group">
                        <label id="resim">pinterest</label>
                        <input type="text" class="form-control" id="resim" name="pinterest" >
                    </div> 
                <h4>Biografi Ayarları</h4>
                   <div class="form-group " >
                        <label for="inputEmail3" class="control-label" ></label><br>
                        <textarea name="hakkimizda"><?=$veri[0]->pt_message?></textarea>
                    </div>
                <h4>İletişim Ayarları</h4>
                    <div class="form-group " >
                        <label for="inputEmail3" class="control-label"></label><br>
                        <textarea name="iletisim"><?=$veri[0]->job?> </textarea>
                    </div>
           <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
               
        </div>
        
    </div>
</div>



<?php
    $this->load->view('_footer');
?>
