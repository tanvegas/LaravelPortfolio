@extends('dashboard-layouts.app')
{{-- @section('title', 'Tristan Vegas | Web Developer') --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        Show Experience
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Date</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Position</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Address</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Description</label>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-danger" href="/dashboard/experience" role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
