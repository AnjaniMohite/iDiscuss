<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Login to iDiscuss</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/partial/_handlelogin.php" method="post">
      <div class="modal-body">
  <div class="mb-3">
    <label for="loginEmail" class="form-label">Username</label>
    <input type="text" class="form-control" id="loginEmail"  name="loginEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="loginPass" class="form-label">Password</label>
    <input type="password" class="form-control" id="loginPass" name="loginPass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
</form>

    </div>
  </div>
</div>