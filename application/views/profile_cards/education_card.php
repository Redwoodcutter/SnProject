<?php foreach($veriler as $rs) {?>


 <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                    <a>Education</a>
                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                    <?php } ?>
                </h4>
                <?php foreach ($eu_id as $edui){  ?>
                   <hr>
                    <h5>
                        <b><?=$edui->school?></b>
                        <?php if($this->session->Member_session['Id'] == $rs->id){?>
                            <button class="btn btn-primary" style="float:right;"  type="button">
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