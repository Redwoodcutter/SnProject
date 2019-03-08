<?php foreach($veriler as $rs) {?>
      <div class="col-lg-12 col-md-12 mb-12">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <lu href="#">Following </lu>
                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                     <?php } ?>
                </h4>
                <h5><?=$rs->goal?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              
            </div>
          </div>


<?php } ?>


