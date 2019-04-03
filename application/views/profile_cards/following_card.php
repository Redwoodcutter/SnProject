<?php foreach($veriler as $rs) {?>
      <div class="col-lg-12 col-md-12 mb-12" style="margin-top:20px;">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <lu href="#">Following </lu>
                    <?php if($this->session->Member_session['Id'] == $rs->id){?>
                        <button class="btn btn-primary" style="float: right;" type="button">
                            <i class="fas fa-plus fa-sm"></i>
                        </button>
                     <?php } ?>
               <div class="col-lg-5">
                <?php if($this->session->Member_session['Id'] == $rs->id){?>
                <?php foreach($relations as $ab){ ?>
                <?php 
                if($ab->status=='0' && $ab->other_user_id==$this->session->Member_session["Id"])  { //rs other user relations user_id?>
               <form class="modal-body"  method="post" action="<?=base_url()?>Profile/relation_edit/<?=$ab->id?>">
                <h1>
                    <?=$ab->id?><?=$ab->user_firstname?>
                </h1>
                  
                <input hidden class="form-control" id="Status1"  name="Status1" value="1" >  
                                  
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Yoksay</button>
                <button class="btn btn-primary" type="submit" >Kabul Et</button>
              </div>
                <?php } ?>
                <?php } ?>
              </form>
                     <?php } ?>
               </div>
                </h4>
                <h5><?=$rs->goal?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              
            </div>
          </div>


<?php } ?>


