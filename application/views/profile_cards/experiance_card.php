<?php foreach($veriler as $rs) {?>
                <div class="col-lg-12 col-md-12 mb-12">
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
                            <button class="btn btn-primary" style="float:right;"  type="button"  data-toggle="modal" data-target="#ExprerianceEdit">
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
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
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
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
<?php } ?>