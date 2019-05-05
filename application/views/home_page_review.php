<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>


   <!-- Page Content -->
  <div class="container">

    <div class="row">
        <div class="col-md-3">

        <!-- Search Widget -->
        <div class="card my-4">
             <div class="card">
        <?php foreach($veriler as $rs) {?>
        <div class="container">
         <div class="row">
                <img src="<?=base_url()?>upload/<?=$rs->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-top: 25px; margin-left: 30px;">
          <div class="col-lg-12">
           <div class="card-body"> 
                <h4 class="card-title"><b><?=$rs->first_name?><?php echo ' ';?><?=$rs->last_name?></b></h4>
                <!--<h5><?=$rs->e_mail?></h5> -->
                <p class="card-title"><?=$rs->city;echo ' '; ?><?=$rs->location?></p>
                <hr>
                
                <a href="#">İletişim Ağınızı büyütün</a>
                <hr>
                <a href="#">Kaç kişi profilinizi görüntüledi</a>
                
           </div>
           </div>
          </div>
         </div>
        </div>
        <?php } ?>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">En Yeni</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">#WebDesign</a>
                  </li>
                  <li>
                    <a href="#">#HTML</a>
                  </li>
                  <li>
                    <a href="#">#Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">#JavaScript</a>
                  </li>
                  <li>
                    <a href="#">#CSS</a>
                  </li>
                  <li>
                    <a href="#">#Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Gruplar</h5>
          <div class="card-body">
            Üye olunan gruplar gelicek
          </div>
        </div>

      </div>

      <!-- Post Content Column -->
      <div class="col-lg-6">
          
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <div class="card text-center">
                <div class="card-body">
                  <a href="#" data-toggle="modal" data-target="#PostAdd" class=" btn">Bir Gönderi başlat</a>
                  <a href="#" data-toggle="modal" data-target="#PostAdd" class="btn btn-primary">Yazı</a>
                  <a href="#" data-toggle="modal" data-target="#PictureAdd" class="btn btn-primary">Resim</a>
                  <a href="#" data-toggle="modal" data-target="#VideoAdd" class="btn btn-primary">video</a>
                  <a href="#" data-toggle="modal" data-target="#Documents" class="btn btn-primary">dokuman</a>
                </div>
            </div>
        <!-- Date/Time -->
       
        <hr>

          <?php foreach($timeline_relations as $tr){ if($tr->status=='1')?>
            <?php foreach ($timeline_post as $tp){ ?>
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?=$tp->username?> <p><?=$tp->time?></h6>
          </div>
          <div class="card-body">
            <div class="text-center">
            </div>
            <p><?=$tp->mesaj?> 
          </div>
             <?php } ?>
             <?php } ?>
        <hr>



      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-3">
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Akışınıza Ekleyin</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                  
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
                  
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          
           <?php foreach ($guess as $uid){?>
                            <div class="row">
                             <div class="col-lg-9">
                                <div class="card-body"> 
                                    <p class="card-title"><b><?=$uid->user_firstname?><?php echo ' ';?> <?=$uid->user_lastname?></b></p>
                                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                                    <div class="btn-group">
                                        <form>
                                        <button class="btn btn-primary " type="button">
                                         Arkadaşlık istegi gönder
                                        </button>
                                        </form>
                                    </div>
                                    <hr>
                                    <?php } ?>
                                </div>
                            </div>
                           </div>
                         <?php } ?>
         
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

    <form class="modal-body" method="post" action="<?=base_url()?>Timeline/text_send" >
          <div class="modal fade" id="PostAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ne hakkında Konuşmak istiyorsun?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">With textarea</span>
                    </div>
                    <textarea class="form-control" id="Message" name="Message" aria-label="With textarea"></textarea>
                    <input  hidden type="text" class="form-control" id="Like" placeholder="Like" name="Like" value="0" >
                    <input  hidden type="text" class="form-control" id="Username" placeholder="Username" name="Username" value="<?=$this->session->Member_session["username"];echo ' ';?><?=$this->session->Member_session["lastname"]?>" >    
                    <section  hidden type="text" class="form-control" id="Tag" placeholder="Tag" name="Tag">   
                        deneme
                    </section>
                        
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Share</button>
                </div>
              </div>
            </div>
          </div>
        </form>
   <form method="post" action="<?=base_url()?>Settings/picture/<?=$veriler[0]->id?>">
        <div class="modal fade" id="PictureAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <img src="<?=base_url()?>upload/<?=$veriler[0]->picture?>" class="rounded-circle" alt="Cinque Terre" style="height: 150px; width: 150px; margin-left: 50px; margin-top: 25px;">
                <button type="submit" class="btn btn-primary">Resim Ekle</button>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Resim Ekle</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                 </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
         <div class="modal fade" id="VideoAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Video Ekle</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Link Ekle</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                 </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
         <div class="modal fade" id="Documents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Dokuman Ekle</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                   <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Link Ekle</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div> 

<?php   
    $this->load->view('_footer'); 
?>