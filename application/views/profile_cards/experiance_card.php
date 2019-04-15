<?php foreach($veriler as $rs) {?>
        <div class="col-lg-12 col-md-12 mb-12" style="margin-top:20px;">
            <div class="card h-100">
                <div class="card-body">
                <h4 class="card-title">
                    <lu href="#">Experiance</lu>
                      <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button" data-toggle="modal" data-target="#ExprerianceAdd">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                     <?php } ?>
                </h4>
                <?php foreach ($user_id as $eui){  ?>
                    <hr>
                    <h5>
                        <b><?=$eui->title?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float:right;"  type="button"  data-toggle="modal" data-target="#ExprerianceEdit" onclick="myFunction('<?=$eui->id?>','<?=$eui->title?>','<?=$eui->company?>','<?=$eui->start_month?>','<?=$eui->start_year?>','<?=$eui->finish_month?>','<?=$eui->finish_year?>','<?=$eui->e_location?>','<?=$eui->e_city?>');">
                                <i class="fas fa-pen fa-sm"></i>
                            </button>
                        <?php } ?>
                    </h5> 
                        <h5><?=$eui->company?></h5>
                        <p><?=$eui->start_month?> <?=$eui->start_year?>, <?=$eui->finish_month;?> <?=$eui->finish_year?></p>
                        <p><?=$eui->e_city?>, <?=$eui->e_location?></p>
                        
                <?php } ?>
              </div>
            </div>
          </div>
<?php } ?>
<!-- MODAL BEGİN -->
        
    <!-- Experiance  Add Modal -->
          <div class="modal fade" id="ExprerianceAdd" tabindex="-1" role="dialog" aria-labelledby="ExprerianceAdd" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Experiance Add Page</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                    <?php $this->load->view('form_pages/exp_add_form') ?>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
       <!-- Experiance Edit Modal -->
          <div class="modal fade" id="ExprerianceEdit" tabindex="-1" role="dialog" aria-labelledby="ExprerianceEdit" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ExprerianceEdit</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                   <?php $this->load->view('form_pages/exp_edit_form') ?>
              </div>
            </div>
          </div>


<script>
function myFunction(id,Title,Company,StartMonth,StartYear,FinishMonth,FinishYear,Location,City){
  document.getElementById("myForm").elements.namedItem("id").value = id;
  document.getElementById("myForm").elements.namedItem("Title").value = Title;
  document.getElementById("myForm").elements.namedItem("Company").value = Company;
  document.getElementById("myForm").elements.namedItem("StartMonth").value = StartMonth;
  document.getElementById("myForm").elements.namedItem("StartYear").value = StartYear;
  document.getElementById("myForm").elements.namedItem("FinishMonth").value = FinishMonth;
  document.getElementById("myForm").elements.namedItem("FinishYear").value = FinishYear;
  document.getElementById("myForm").elements.namedItem("Location").value = Location;
  document.getElementById("myForm").elements.namedItem("City").value = City;
 
 }
</script>