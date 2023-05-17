<div class="modal fade" id="cusLoginModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cusLoginModalCenterLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="cusLoginForm">
       <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="cusLogemail" class="p1-2 font-wight-bold">Email</label>
          <input type="text" class="form-control" placeholder="Email" name="cusLog" id="cusLogemail" aria-describedby="emailHelp">
       </div>
       <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="cusLogpass" class="p1-2 font-wight-bold">Password</label>
          <input type="password" class="form-control" placeholder="New Password" name="cusLogpass" id="cusLogpass" aria-describedby="emailHelp">
          

       </div>
    </form>
  </div>
  <div id="success" class="text-success">
</div>
  <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button"  class="btn btn-primary" onclick="checkcusLogin()" id="login">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button> 
      </div>
    </div>
  </div>
</div>


<script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>