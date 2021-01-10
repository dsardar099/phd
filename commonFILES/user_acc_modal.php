
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Account Setting</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            
          
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" > <i class="fa fa-user"></i> </span>
                </div>
                <input name="u_name" class="form-control" placeholder="Full name" type="text" required>
            </div> 
            <br>
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="u_email" class="form-control" placeholder="Email address" type="email" required>
            </div> 
            <br>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>		
                <input name="u_phone" class="form-control" placeholder="Phone number" type="text" required>
            </div> 
            <br>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="u_gender" id="inlineRadio_male" value="m" required>
              <label class="form-check-label" for="inlineRadio_male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="u_gender" id="inlineRadio_female" value="f" required>
              <label class="form-check-label" for="inlineRadio_female">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="u_gender" id="inlineRadio_other" value="o" required>
              <label class="form-check-label" for="inlineRadio_other">Other</label>
            </div>
            <br><br>
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="u_dob" class="form-control" placeholder="DOB" type="date" required>
            </div> 
            <br>          

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="u_adhaar" class="form-control" placeholder="Adhaar number" type="number">
            </div>
            <br>
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="u_pan" class="form-control" placeholder="pan number" type="number">
            </div> 
            <br>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="u_pass" class="form-control" placeholder="Create password" type="password" required>
            </div> 
            <br>
                                                                                                             
        </form>
          
          
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>