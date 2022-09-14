@extends('layouts.admin')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit User Information</h5>

              <!-- General Form Elements -->
              <form>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Full Name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Enter Email Address" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" placeholder="Enter Facebook Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" placeholder="Enter Twitter Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" placeholder="Enter Instagram Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">LinkedIn</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" placeholder="Enter LinkedIn Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">User Role</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option class="disable" selected disabled>Select a role</option>
                      <option value="1">Super Admin</option>
                      <option value="2">Admin</option>
                      <option value="3">Member</option>
                      <option value="4">Subscriber</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
    </div>
</section>
@endsection
