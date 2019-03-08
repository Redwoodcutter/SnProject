<?php foreach($veriler as $rs) {?>
  <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Başarılar</lu>
                  <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button" data-toggle="modal" data-target="#GoalAdd">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                   <?php } ?>
                </h4>
                   <?php foreach ($gu_id as $gui){  ?>
                    <hr>
                     <h5>
                        <b><?=$gui->title?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float:right;"  type="button" data-toggle="modal" data-target="#GoalEdit">
                                <i class="fas fa-pen fa-sm"></i>
                            </button>
                        <?php } ?>
                        </h5>
                        <p><?=$gui->start_month?> <?=$gui->start_year?>, <?=$gui->finish_month;?> <?=$gui->finish_year?></p>
                        <p><?=$gui->goal_text?></p>
                    <?php } ?>
              </div>

            </div>
        </div>
<!-- MODAL BEGİN -->
        
    <!-- Goal Modal -->
          <div class="modal fade" id="GoalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">GoalAdd add</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                  ---------------GoalAdd-------------------
                  
                  
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="GoalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">GoalEdit add</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                  ---------------GoalEdit-------------------
                  
                  
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>

<?php } ?>
