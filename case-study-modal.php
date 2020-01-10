
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width:800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Case Study</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method ="post">
            <!-- <div class="contactBox"> -->
              <!-- <div class="text-contact">
                Contact Us
              </div> -->
              <div class="row col-md-12 formBox" style="width:100%">
                  <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Name *">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" class="form-control" name="phone" id="phone"   placeholder="Phone *">
                    </div>
                  </div>
                <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email"    placeholder="Email *">
                </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="company" id="com"  placeholder="Company">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="country" id="coun"  placeholder="Country">
                    </div>
                  </div>
                  <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" rows="2" name="msg" id="msg"   placeholder="Additional Message"></textarea>
                </div>
                </div>
                <br>
                <div class="form-group">
                <!-- <input   type="button" value="Submit" id="btn"   class="btn btn-round btn-red-grd"> -->

                  <!-- <button type="button"   name="submit" class="btn btn-round btn-red-grd">send </button> -->
                  </div>
                  <div id="snackbar">We Will  Contact You Shortly</div>
                  
                    <div class="validationDemoIfEmpty" id="validation">Fill all the mandatory fields</div>
                    <div class="validationDemoIfEmpty" id="validationDemoIfEmpty">Please enter your email id</div> 
                    <div class="validationDemoIfEmpty" id="validationDemoInvalidEmail">Please enter a valid email id</div>


              </div>
              
            <!-- </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-round btn-red-grd" data-dismiss="modal">Close</button>
        <input   type="button" value="Submit" id="btn"   class="btn btn-round btn-red-grd">
      </div>
    </div>
  </div>
</div>
<!-- Modal -->