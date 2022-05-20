@extends('dashboard-layouts.master')
{{-- @section('title', 'Tristan Vegas | Web Developer') --}}
@section('dashboard-home-content')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/profile">
                            <span data-feather="file"></span>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/experience">
                            <span data-feather="shopping-cart"></span>
                            Experience
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/skills-tools">
                            <span data-feather="users"></span>
                            Skills & Tools
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/contact">
                            <span data-feather="bar-chart-2"></span>
                            Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Resume
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Skills and Tools</h1>
            </div>
            
            {{-- @extends('dashboard.profile') --}}
            {{-- @yield('dashboard') --}}

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
      
      
      
      
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
        </main>
    </div>
</div>
@endsection