<?php foreach($veriler as $rs) {?>
            <form class="modal-body" id="myForm1" method="post" action="<?=base_url()?>Profile/education_edit">
            <div class="form-row">
                 <div class="form-group col-md-12" >
                <input hidden class="form-control" id="id"  name="id" value="" >
              </div>
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
                  <input type="text" class="form-control" id="FinishMonth" placeholder="FinishMonth" name="FinishMonth" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">FinishYear</label>
                  <input type="text" class="form-control" id="FinishYear" placeholder="FinishYear" name="FinishYear" >
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

<?php } ?>