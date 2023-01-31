<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Update Information
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('profile.update') }}">
        <div class="modal-body">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Your Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                  <label for="confirm_password" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
      </div>
    </div>
  </div>
