<?php foreach($veriler as $rs) {?>


 <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
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
                            <button class="btn btn-primary" style="float:right;"  type="button"  data-toggle="modal" data-target="#EducationEdit">
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
                  ---------------EducationAdd-------------------
                  
                  
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
                  ---------------EducationEdit-------------------
                  
                  
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
 <?php } ?>