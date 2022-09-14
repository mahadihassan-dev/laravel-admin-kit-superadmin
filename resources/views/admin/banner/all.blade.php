@extends('layouts.admin')
@section('content')
<section class="section dashboard">
    <div class="row">
      <!-- Top Selling -->
      <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Manage</h6>
                </li>
                <li><a class="dropdown-item" href="{{ url('/dashboard/user') }}">All user</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">All User</h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="text-center">User Role</th>
                    <th scope="col" class="text-center">Avatar</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Social Media</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td class="fw-bold">1</td>
                      <td><a href="{{ url('/dashboard/user/view') }}" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                      <td class="text-center">Admin</td>
                      <td class="text-center" scope="row"><img src="{{asset('contents/admin')}}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="30px" height="30px"></td>
                      <td>Admin@email.com</td>
                      <td>+880-12345656</td>
                      <td>
                        <div class="social-links mt-2">
                          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('/dashboard/user/view') }}"><i class="bi bi-eye"></i> View</a></li>
                                <li><a class="dropdown-item" href="{{ url('/dashboard/user/edit') }}"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="fw-bold">1</td>
                      <td><a href="view-user.php" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                      <td class="text-center">Admin</td>
                      <td class="text-center" scope="row"><img src="{{asset('contents/admin')}}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="30px" height="30px"></td>
                      <td>Admin@email.com</td>
                      <td>+880-12345656</td>
                      <td>
                        <div class="social-links mt-2">
                          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('/dashboard/user/edit') }}"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="fw-bold">1</td>
                      <td><a href="view-user.php" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                      <td class="text-center">Admin</td>
                      <td class="text-center" scope="row"><img src="{{asset('contents/admin')}}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="30px" height="30px"></td>
                      <td>Admin@email.com</td>
                      <td>+880-12345656</td>
                      <td>
                        <div class="social-links mt-2">
                          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('/dashboard/user/edit') }}"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="fw-bold">1</td>
                      <td><a href="view-user.php" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                      <td class="text-center">Admin</td>
                      <td class="text-center" scope="row"><img src="{{asset('contents/admin')}}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" width="30px" height="30px"></td>
                      <td>Admin@email.com</td>
                      <td>+880-12345656</td>
                      <td>
                        <div class="social-links mt-2">
                          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('/dashboard/user/edit') }}"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- End Top Selling -->
    </div>
  </section>
@endsection
