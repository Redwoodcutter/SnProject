<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
<div class="container">

    <div class="row">
 <div class="col-lg-4">
                       
                        <h1 class="page-header">Resim Ekle</h1>
                        <?php if($this->session->flashdata("mesaj")) { ?>
                         <div class="alert alert-info">
                             <a href="#" class="alert-danger">Hata</a>
                             <br>
                                <?=$this->session->flashdata("mesaj");?> 
                            </div>
                        <?php } ?>
                        <form action="<?=base_url()?>Jobs/job_picture_save/<?=$veriler[0]->id?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Resim Ekle</label>
                            <input type="file" class="form-control" id="Resim" required name="picture"  >
                          </div>
                          <button type="submit" class="btn btn-primary">Resimi Kaydet</button>
                        </form>
                    <!--/.col-lg-12 -->
                </div>
    </div>
</div>
<?php
    $this->load->view('_footer');
?>
