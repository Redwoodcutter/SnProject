<?php foreach($veriler as $rs) {?>
            <form class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Title</label>
                <input type="text" class="form-control" id="Title" placeholder="Title" name="Title">
              </div>
            </div>
            <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="inputAddress">StartMonth</label>
                  <input type="text" class="form-control" id="StartMonth" placeholder="StartMonth" name="StartMonth">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress2">StartYear</label>
                  <input type="text" class="form-control" id="StartYear" placeholder="StartYear"name="StartYear">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">FinishMonth</label>
                  <input type="text" class="form-control" id="FinishYear" placeholder="FinishYear" name="FinishMonth" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">FinishYear</label>
                  <input type="text" class="form-control" id="FinishYear" placeholder="FinishYear" name="FinishYear" >
                </div>
                
            </div>
                 
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
            </div>
                
          
           
            <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

<?php } ?>