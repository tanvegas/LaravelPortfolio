@extends('dashboard-layouts.app')
{{-- @section('title', 'Tristan Vegas | Web Developer') --}}
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Experience</h1>
        <button type="button" class="btn btn-primary" href="/dashboard/experience/create">Add Work Experience</button>
    </div>

    {{-- @extends('dashboard.profile') --}}
    {{-- @yield('dashboard') --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Position</th>
                <th scope="col">Address</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>APRIL 2021 - PRESENT</td>
                <td>PartTime - Mobile Developer</td>
                <td>Freelance - HOME</td>
                <td>Developing a mobile game application content for educational purpose.</td>
                <td><i class="fa-solid fa-pen-to-square fa-xl" style="color:green"></i></td>
                <td><i class="fa-solid fa-trash fa-xl" style="color:red"></i></td>
            </tr>
            <tr>
                <td>APRIL 2021 - JUNE 2021</td>
                <td>Mobile Developer / Web Developer</td>
                <td>Freelance - HOME</td>
                <td>Developing a web and mobile application for laundry shop.</td>
                <td><i class="fa-solid fa-pen-to-square fa-xl" style="color:green"></i></td>
                <td><i class="fa-solid fa-trash fa-xl" style="color:red"></i></td>
            </tr>
            <tr>
                <td>APRIL 2018 - JULY 2018</td>
                <td>On the Job Training / Tokyo System Solutions</td>
                <td>Unit 205, Citrine Building, Magsaysay Ave, Naga City</td>
                <td>Create a Human Resource Web Application that can be used that can be apply to other companies.</td>
                <td><i class="fa-solid fa-pen-to-square fa-xl" style="color:green"></i></td>
                <td><i class="fa-solid fa-trash fa-xl" style="color:red"></i></td>
            </tr>
        </tbody>
    </table>
@endsection
