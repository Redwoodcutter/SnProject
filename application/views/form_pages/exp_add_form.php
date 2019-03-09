
            <form class="modal-body" method="post" action="<?=base_url()?>Profile/experience_add">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Title</label>
                <input type="text" class="form-control" id="Title" placeholder="Title" name="Title">
              </div>
              <div class="form-group col-md-12">
                <label for="inputPassword4">Company</label>
                <input type="text" class="form-control" id="Company" placeholder="Company" name="Company">
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
            <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="inputAddress">Location</label>
                  <input type="text" class="form-control" id="Location" placeholder="Location" name="Location">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress2">City</label>
                  <input type="text" class="form-control" id="City" placeholder="City"name="City">
                </div>
                
            </div>
            <div class="form-group">
             
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            </form>

