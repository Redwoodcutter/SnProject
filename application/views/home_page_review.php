<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>


   <!-- Page Content -->
  <div class="container">

    <div class="row">
        <div class="col-md-3">
             <?php if($this->session->flashdata("mesaj")) { ?>
                     <div class="alert alert-info">
                         <a href="#" class="alert-danger"></a>
                         <br>
                            <?=$this->session->flashdata("mesaj");?> 
                        </div>
                    <?php } ?>

        <!-- Search Widget -->
        <div class="card my-4">
             <div class="card text-white bg-info mb-3">
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
                
                <a href="#" class="text-white">İletişim Ağınızı büyütün</a>
                <hr>
                <a href="#" class="text-white">Kaç kişi profilinizi görüntüledi</a>
                
           </div>
           </div>
          </div>
         </div>
        </div>
        <?php } ?>
        </div>

        <!-- Categories Widget -->
        <div class="card border-info mb-3">
            <div class="card-header">Akışınıza Ekleyin</div>
            <div class="card-body text-info">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php foreach ($timeline_post as $tp){ ?>
                  <li>
                    <a href="#">#<?=$tp->etiket?></a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Gruplar</div>
            <div class="card-body text-info">
              <h5 class="card-title">Üye olunan gruplar gelicek</h5>
              <p class="card-text">Üye olunan gruplar gelicek</p>
            </div>
      </div>
        </div>

      <!-- Post Content Column -->
      <div class="col-lg-6">
          
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <div class="card text-center border-info">
                <div class="card-body">
                  <a href="#" data-toggle="modal" data-target="#PostAdd" class=" btn"> Bir Gönderi başlat</a>
                  <a href="#" data-toggle="modal" data-target="#PostAdd" class="btn btn-info"><i class="fas fa-pen fa-sm"></i> Yazı</a>
                  <a href="#" data-toggle="modal" data-target="#PictureAddTimeline" class="btn btn-info"><i class="fas fa-image fa-sm"></i> Resim</a>
                  <a href="#" data-toggle="modal" data-target="#VideoAdd" class="btn btn-info"><i class="fas fa-video fa-sm"></i> Video</a>
                </div>
            </div>
        <!-- Date/Time -->
        <hr>
          <?php foreach($timeline_relations as $tr){ if($tr->status=='1')?>
            <?php foreach ($timeline_post as $tp){ ?>
            <?php if($tp->picture =='0' && $tp->video=='0'){ ?>
        <div class="card border-info ">
          <div class="card-header py-3">
              <a href="<?=base_url()?>Home/profile/<?=$this->session->Member_session["Id"]?>"><h6 class="m-0 font-weight-bold text-info"><?=$tp->username?></h6></a>
          </div>
          <div class="card-body">
            <div class="text-center">
            </div>
            <p><?=$tp->mesaj?> 
          </div>
          <footer>
                <a href="<?=base_url()?>Home/comments/<?=$tp->id?>"><p  class="text-center">Daha fazlasını görmek için tıklayın</p></a>
          </footer>
         </div>
        <hr>
         <?php }else if ($tp->video=='0' && $tp->mesaj==''){ ?>
           <div class="card border-info">
         <div class="card-header py-3">
             <a href="<?=base_url()?>Home/profile/<?=$this->session->Member_session["Id"]?>"><h6 class="m-0 font-weight-bold text-info"><?=$tp->username?></h6></a>
          </div>
          <div class="card-body">
            <div class="text-center">
                <img class="card-img-top" src="<?=base_url()?>upload/<?=$tp->picture?>" alt="Card image cap" style="height: 10rem;">
          </div>
          </div>
            <footer>
                <a href="<?=base_url()?>Home/comments/<?=$tp->id?>"><p  class="text-center">Daha fazlasını görmek için tıklayın</p></a>
            </footer>
           </div>
              <hr>
        <?php }if ($tp->video !='0' && $tp->picture=='0' && $tp->mesaj==''){ ?>
               <div class="card border-info">
         <div class="card-header py-3">
             <a href="<?=base_url()?>Home/profile/<?=$this->session->Member_session["Id"]?>"><h6 class="m-0 font-weight-bold text-info"><?=$tp->username?></h6></a>
          </div>
          <div class="card-body">
            <div class="text-center">
             <iframe width="500" height="450" src="https://www.youtube.com/embed/<?=$tp->video?>"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   </div>
          </div>
            <footer>
                <a href="<?=base_url()?>Home/comments/<?=$tp->id?>"><p  class="text-center">Daha fazlasını görmek için tıklayın</p></a>
            </footer>
           </div>
              <hr>
                 <?php } ?>
             <?php } ?>
             <?php } ?>
      
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-3">
        <!-- Categories Widget -->
        <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">İş ilanlarınızı yönetin</div>
            <div class="card-body text-info">
             <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="<?=base_url()?>Jobs/Job_view_mine">İş başvurusu yaptıklarınız</a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>Jobs/Job_publish">Size Ait olan iş ilanları</a>
                  </li>
                </ul>
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
                                        <button  href="#" class="btn btn-info " type="button">
                                            Profili Gör
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
<!-- Text Post Modal Begin  -->
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
                    <input  hidden type="text" class="form-control" id="picture" placeholder="Like" name="picture" value="0" >
                    <input  hidden type="text" class="form-control" id="Username" placeholder="Username" name="Username" value="<?=$this->session->Member_session["username"];echo ' ';?><?=$this->session->Member_session["lastname"]?>" >    
                    <select name="tag">
                            <option value="Web">Web</option>
                            <option value="Css">Css</option>
                            <option value="HTML">HTML</option>
                            <option value="JavaScript">JavaScript</option>
                   </select>
                        
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-info" type="submit">Share</button>
                </div>
              </div>
            </div>
          </div>
        </form>
<!-- Text Post Modal End  -->
  <!-- Picture Modal Begin  -->
     
        <div class="modal fade" id="PictureAddTimeline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <h1 class="page-header">Bir Resim Seçin</h1>
              <form action="<?=base_url()?>Timeline/do_upload" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Resim Ekle</label>
                            <input type="file" class="form-control" id="picture" required name="Picture"  >
                            <input  hidden type="text" class="form-control" id="Like" placeholder="Like" name="Like" value="0" >
                            <input  hidden type="text" class="form-control" id="Username" placeholder="Username" name="Username" value="<?=$this->session->Member_session["username"];echo ' ';?><?=$this->session->Member_session["lastname"]?>" > 
                          <br/>
                               Tag Secin <select class="card-header" name="tag">
                            <option value="Web">Web</option>
                            <option value="Css">Css</option>
                            <option value="HTML">HTML</option>
                            <option value="JavaScript">JavaScript</option>
                          </select>
                        
                
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Resimi Kaydet</button>
                                </div>
                        </form>
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
                  <div class="container">
                 <div class="input-group mb-5">
                     <form action="<?php echo site_url('Timeline/video_send');?>" method="post" enctype="multipart/form-data">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Link Ekle</span>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="keyword">
                    </div>
                    
                    <input  hidden type="text" class="form-control" id="Like" placeholder="Like" name="Like" value="0" >
                    <input  hidden type="text" class="form-control" id="Username" placeholder="Username" name="Username" value="<?=$this->session->Member_session["username"];echo ' ';?><?=$this->session->Member_session["lastname"]?>" >    
                      
                        
                        Tag Secin<select class="card-header" name="tag">
                            <option value="Web">Web</option>
                            <option value="Css">Css</option>
                            <option value="HTML">HTML</option>
                            <option value="JavaScript">JavaScript</option>
                      </select>
                     <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-info" type="submit">Yükle</button>
                </div>
                     </form>
                     
                 </div>
                  </div>
              </div>
            </div>
          </div>
  
  <!-- Video Modal End  -->
  
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
                  <a class="btn btn-info" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div> 

<?php   
    $this->load->view('_footer'); 
?>