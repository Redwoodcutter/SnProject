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
                  <a href="#" class="btn btn-primary">Yazı</a>
                  <a href="#" class="btn btn-primary">Resim</a>
                  <a href="#" class="btn btn-primary">video</a>
                  <a href="#" class="btn btn-primary">dokuman</a>
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
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Time Line Gönderisi</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="assets/img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php 
    $this->load->view('_footer'); 
?>
    
