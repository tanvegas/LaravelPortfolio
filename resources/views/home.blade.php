@extends('dashboard-layouts.master')
{{-- @section('title', 'Tristan Vegas | Web Developer') --}}
@section('dashboard-home-content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
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
            </nav> --}}

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    {{-- <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div> --}}
                </div>

                {{-- @extends('dashboard.profile') --}}
                {{-- @yield('dashboard') --}}

            </main>
        </div>
    </div>
@endsection
