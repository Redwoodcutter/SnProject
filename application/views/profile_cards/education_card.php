<?php foreach($veriler as $rs) {?>


        <div class="col-lg-12 col-md-12 mb-12" style="margin-top:20px;">
            <div class="card h-100 border-info">
              <div class="card-body">
                <h4 class="card-title">
                    <a>Education</a>
                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button" data-toggle="modal" data-target="#EducationAdd">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                    <?php } ?>
                </h4>
                <?php foreach ($eu_id as $edui){  ?>
                   <hr>
                    <h5>
                        <b><?=$edui->school?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float:right;"  type="button"  data-toggle="modal" data-target="#EducationEdit" onclick="myFunction1('<?=$edui->id?>','<?=$edui->school?>','<?=$edui->department?>','<?=$edui->degree?>','<?=$edui->point?>','<?=$edui->start_month?>','<?=$edui->start_year?>','<?=$edui->finish_month?>','<?=$edui->finish_year?>');">
                                <i class="fas fa-pen fa-sm"></i>
                            </button>
                        <?php } ?>
                    </h5>
                    <h5><?=$edui->department?></h5>
                    <p><?=$edui->degree?></p>
                    <p><?=$edui->start_month?> <?=$edui->start_year?>, <?=$edui->finish_month;?> <?=$edui->finish_year?></p>
                    <p><?=$edui->e_text?></p>
                <?php } ?>
               </div>
            </div>
        </div>
 <?php } ?>
<!-- MODAL BEGİN -->
        
    <!-- Education Modal -->
          <div class="modal fade" id="EducationAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EducationAdd add</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                  <?php $this->load->view('form_pages/edu_add_form') ?> 
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
         <div class="modal fade" id="EducationEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EducationEdit </h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                  <?php $this->load->view('form_pages/edu_edit_form') ?>
              </div>
            </div>
          </div>

    <script>
function myFunction1(id,School,Department,Degree,Point,StartMonth,StartYear,FinishMonth,FinishYear){
  document.getElementById("myForm1").elements.namedItem("id").value = id;
  document.getElementById("myForm1").elements.namedItem("School").value = School;
  document.getElementById("myForm1").elements.namedItem("Department").value = Department;
  document.getElementById("myForm1").elements.namedItem("Degree").value = Degree;
  document.getElementById("myForm1").elements.namedItem("Point").value = Point;
  document.getElementById("myForm1").elements.namedItem("StartMonth").value = StartMonth;
  document.getElementById("myForm1").elements.namedItem("StartYear").value = StartYear;
  document.getElementById("myForm1").elements.namedItem("FinishMonth").value = FinishMonth;
  document.getElementById("myForm1").elements.namedItem("FinishYear").value = FinishYear;
 
 }
</script>