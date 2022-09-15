@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('employees.index') }}">Employees</a></li>
            <li>New Employee</li>
        </ol>
        <h2>New Employee</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <form action="{{ route('employees.store') }}" method="POST" role="form">
                    @csrf
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="employee_id_number">Employee ID Number</label>
                            <input type="text" class="form-control" name="employee_id_number" id="employee_id_number"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-select" name="gender" id="gender" required>
                                <option value="" selected disabled>Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group">
                            <label for="address">Addres</label>
                            <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="division">Division</label>
                            <select class="form-select" name="division_id" id="division_id" required>
                                <option value="" selected disabled>Choose Division</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" name="position" id="position" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
@endsection
