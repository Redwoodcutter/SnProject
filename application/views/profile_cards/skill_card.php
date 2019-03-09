<?php foreach($veriler as $rs) {?>

   <div class="col-lg-12 col-md-12 mb-12" style="margin-top:20px;">
            <div class="card h-100">     
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Skills
                       <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float: right;" type="button" data-toggle="modal" data-target="#SkillAdd">
                                <i class="fas fa-plus fa-sm"></i>
                            </button>
                       <?php } ?>
                  </lu>
                </h4>
                <?php foreach ($su_id as $sui){  ?>
                   <hr>
                    <h5>
                        <b><?=$sui->skill?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float:right;"  type="button" data-toggle="modal" data-target="#SkillEdit">
                                <i class="fas fa-pen fa-sm"></i>
                            </button>
                        <?php } ?>
                    </h5>
                    <h5><?=$sui->rating?></h5>
                <?php } ?>
              </div>
            </div>
        </div>

<!-- MODAL BEGİN -->
        
    <!-- Skill Modal -->
          <div class="modal fade" id="SkillAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">skill add</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                    <?php $this->load->view('form_pages/skill_add_form') ?>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="SkillEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">SkillEdit</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                 <?php $this->load->view('form_pages/skill_edit_form') ?>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>



<?php } ?>