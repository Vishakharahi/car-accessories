<div class="modal fade" id="cusRegModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cusRegModalCenterLabel">Customer Ragistartion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="cusRegForm">
        <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="cusname" class="p1-2 font-wight-bold">Name</label>
          <small id="statusMsg1"></small>
          <input type="text" class="form-control" placeholder="Name" name="cusname" id="cusname" aria-describedby="emailHelp">
       </div>
       <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="cusemail" class="p1-2 font-wight-bold">Email</label>
          <small id="statusMsg2" class="text-danger"></small>
          <input type="text" class="form-control" placeholder="Email" name="cusname" id="cusemail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="cuspass" class="p1-2 font-wight-bold">New Password</label>
          <small id="statusMsg3"></small>
          <input type="text" class="form-control" placeholder="New Password" name="cuspass" id="cuspass" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
    </form>
  </div>
  <div class="modal-footer">
        <span id="successMsg"></span>
        <div id = "errorMsg"></div>
        <button type="button" class="btn btn-primary" onclick="addcus()" id="sign up">Sign up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>
