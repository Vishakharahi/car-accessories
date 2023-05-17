<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Customer Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id=adminLoginForm>
       <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="adminLogemail" class="p1-2 font-wight-bold">Email</label>
          <input type="text" class="form-control" placeholder="Email" name="adminLogname" id="adminLogemail" aria-describedby="emailHelp">
       </div>
       <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="adminLogpass" class="p1-2 font-wight-bold">Password</label>
          <input type="text" class="form-control" placeholder="New Password" name="adminLogpass" id="adminLogpass" aria-describedby="emailHelp">
       </div>
    </form>
  </div>
  <div class="modal-footer">
        <button type="button" id="adminLoginbtn" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button> 
      </div>
    </div>
  </div>
</div>