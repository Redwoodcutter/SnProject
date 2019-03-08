<?php foreach($veriler as $rs) {?>

   <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">     
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Skills
                       <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float: right;" type="button">
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
                            <button class="btn btn-primary" style="float:right;"  type="button">
                                <i class="fas fa-pen fa-sm"></i>
                            </button>
                        <?php } ?>
                    </h5>
                    <h5><?=$sui->rating?></h5>
                <?php } ?>
              </div>
            </div>
        </div>


<?php } ?>