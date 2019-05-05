
<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>

<div class="container">
        <div class="card text-center">
        <div class="col-lg-12">
            <br/>
            <form method="post" action="<?=base_url()?>Jobs/add_save">
            <div class="row">
           
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="Unvan">Unvan/Başlık</span>
                </div>
                <input type="text" class="form-control" placeholder="Unvan" aria-label="Unvan" aria-describedby="Unvan"  name="Unvan" >
            </div>
            
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="Company">Şirket</span>
                </div>
                <input type="text" class="form-control" placeholder="Company" aria-label="Company" aria-describedby="Company" name="Company">
            </div>
            
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="City">Şehir</span>
                </div>
                <input type="text" class="form-control" placeholder="City" aria-label="City" aria-describedby="City" name="City" >
            </div>
            
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="Country">Ülke</span>
                </div>
                <input type="text" class="form-control" placeholder="Country" aria-label="Country" aria-describedby="Country" name="Country">
            </div>
            
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="Status"> Kıdem Düzeyi </span>
                </div>
                <input type="text" class="form-control" placeholder="Status" aria-label="Status" aria-describedby="Status" name="Status">
            </div>
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="WorkStatus">Sektör</span>
                </div>
                <input type="text" class="form-control" placeholder="WorkStatus" aria-label="WorkStatus" aria-describedby="WorkStatus" name="WorkStatus">
            </div>
            
             <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="WorkPlace">İstihdam Türü</span>
                </div>
                <input type="text" class="form-control" placeholder="WorkPlace" aria-label="WorkPlace" aria-describedby="WorkPlace" name="WorkPlace">
            </div>
            
            <div class="input-group mb-3 col-lg-6 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" >İş Alanları</span>
                </div>
                <input type="text" class="form-control" placeholder="WorkInteresting" aria-label="WorkInteresting" aria-describedby="WorkInteresting-addon1" name="WorkInteresting">
             </div>
            </div>
            <h5>İstenilen Yeterlilikler</h5>
            <br/>   
            <div class="col-lg-12 form-group">
                <textarea name="editor1" id="editor1">
                </textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Resim Eklemek için Devam Et</button>
            </form>
        </div>
       <br/>
    </div>
</div>

<?php   
    $this->load->view('_footer'); 
?>
 <script>
                CKEDITOR.replace( 'editor1' );
 </script>