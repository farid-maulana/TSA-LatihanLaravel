@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('employees.index') }}">Employees</a></li>
            <li>Edit Employee</li>
        </ol>
        <h2>Edit Employee</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST"
                    role="form">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="employee_id_number">Employee ID Number</label>
                            <input type="text" class="form-control" name="employee_id_number" id="employee_id_number"
                                value="{{ $employee->employee_id_number }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $employee->name }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-select" name="gender" id="gender" required>
                                <option value="Male"
                                    {{ $employee->gender == 'Male' ? 'selected' : '' }}>
                                    Male</option>
                                <option value="Female"
                                    {{ $employee->gender == 'Female' ? 'selected' : '' }}>
                                    Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                value="{{ $employee->date_of_birth }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ $employee->email }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number"
                                value="{{ $employee->phone_number }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group">
                            <label for="address">Addres</label>
                            <textarea class="form-control" name="address" id="address" rows="3"
                                required>{{ $employee->address }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="division">Division</label>
                            <input type="text" class="form-control" name="division" id="division"
                                value="{{ $employee->division }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" name="position" id="position"
                                value="{{ $employee->position }}" required>
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
