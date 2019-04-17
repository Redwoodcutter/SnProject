<?php 
    $this->load->view('_header');
?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php 
        $this->load->view('_navbar');
    ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <div class="card text-center">
                <div class="card-body">
                  <p class="card-text">Bir Gönderi başlat</p>
                  <a href="#" data-toggle="modal" data-target="#PostAdd" class="btn btn-primary">Yazı</a>
                  <a href="#" data-toggle="modal" data-target="#PictureAdd" class="btn btn-primary">Resim</a>
                  <a href="#" data-toggle="modal" data-target="#VideoAdd" class="btn btn-primary">video</a>
                  <a href="#" data-toggle="modal" data-target="#Documents" class="btn btn-primary">dokuman</a>
                </div>
                
              </div>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <?php foreach($veriler as $rs) {?>
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
                        <form>
                          <button type="button" href="<?= base_url()?>Home/profile/<?=$this->session->Member_session["Id"] ?>" data-toggle="modal"  class="btn btn-primary">profili görüntüle</button>
                        
                        </button>
                        </form>
                    </div>
                  
                    <?php }else {?>
                  
                    <button type="button"  class="btn btn-primary">Mesaj Gönder</button>
                    <?php } ?>
                    <hr>
                    <p class="card-text"><?=$rs->pt_message?></p>
                </div>
            </div>
           </div>
        </div>
                   <?php } ?>
            </div>
   <!-- Illustrations -->
              <div class="card shadow col-xl-6 col-md-6 mb-4">
                  <?php foreach($timeline_relations as $tr){ if($tr->status=='1')?>
                  <?php foreach ($timeline_post as $tp){ ?>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Time Line Gönderisi</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                      
                    
                  </div>
                  <p><?=$tp->mesaj?> 
                </div>
                   <?php } ?>
                   <?php } ?>
              </div>
   
   
              
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Akışa Ekle</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300">Takip edilecek öneriler</i>
                    </div>
                       <?php foreach ($guess as $uid){?>
            
         
        </ul>
 
        <div class="card" >
          <div class="container">
            <div class="row">
             <div class="col-lg-9">
                <div class="card-body"> 
                    <h4 class="card-title"><b><?=$uid->user_firstname?><?php echo ' ';?> <?=$uid->user_lastname?></b></h4>
                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                    <div class="btn-group">
                        <form>
                        <button class="btn btn-primary " type="button" >
                         Arkadaşlık istegi gönder
                        </button>
                        </form>
                    </div>
                  
                    <?php } ?>
                    <hr>
                   
                </div>
            </div>
           </div>
        </div>
    </div>
         <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            

        
          </div>

 

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
      
        <!-- Education Modal -->
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
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Share</button>
                </div>
              </div>
            </div>
          </div>
        </form >
        
        <div class="modal fade" id="PictureAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Resim ekle</h5>
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
    
