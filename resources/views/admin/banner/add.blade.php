@extends('layouts.admin')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Manage</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Add User Information </h5>

              <!-- General Form Elements -->
              <form>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Confrim Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="user_photo" id="formFile" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" name="facebookLink" placeholder="Enter Facebook Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" name="twitterLink" placeholder="Enter Twitter Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" name="instagramLink" placeholder="Enter Instagram Link" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">LinkedIn</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" name="linkedinLink" placeholder="Enter LinkedIn Link" required>
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
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-secondary w-100">Reset</button>
                    </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
    </div>
</section>
@endsection
