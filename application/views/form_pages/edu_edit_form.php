<?php foreach($veriler as $rs) {?>
            <form class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">School</label>
                <input type="text" class="form-control" id="School" placeholder="School" name="School">
              </div>
              <div class="form-group col-md-12">
                <label for="inputPassword4">Department</label>
                <input type="text" class="form-control" id="Department" placeholder="Department" name="Department">
              </div>
            </div>
                 <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="inputAddress">Degree</label>
                  <input type="text" class="form-control" id="Degree" placeholder="Degree" name="Degree">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress2">Point</label>
                  <input type="text" class="form-control" id="Point" placeholder="Point"name="Point">
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
                  Still Student
                </label>
            </div>
           
                
            <div class="form-row">
              
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
             
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

<?php } ?>