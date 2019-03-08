<?php foreach($veriler as $rs) {?>
  <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                  <lu href="#">Başarılar</lu>
                  <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                   <?php } ?>
                </h4>
                   <?php foreach ($gu_id as $gui){  ?>
                    <hr>
                     <h5>
                        <b><?=$gui->title?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float:right;"  type="button">
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

<?php } ?>
