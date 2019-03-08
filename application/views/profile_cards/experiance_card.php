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
                            <button class="btn btn-primary" style="float:right;"  type="button">
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