@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('employees.index') }}">Employees</a></li>
        </ol>
        <h2>Employee Detail</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-4">
                <img src="{{ asset('storage/employees/' . $employee->photo) }}" width="400px">
            </div>
            <div class="col-8">
                <dl class="row">
                    <dt class="col-sm-3">Employee ID Number</dt>
                    <dd class="col-sm-9">{{ $employee->employee_id_number }}</dd>

                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9">{{ $employee->name }}</dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">{{ $employee->email }}</dd>

                    <dt class="col-sm-3">Gender</dt>
                    <dd class="col-sm-9">{{ $employee->gender }}</dd>

                    <dt class="col-sm-3">Phone Number</dt>
                    <dd class="col-sm-9">{{ $employee->phone_number }}</dd>

                    <dt class="col-sm-3">Date of Birth</dt>
                    <dd class="col-sm-9">
                        {{ date('d M Y', strtotime($employee->date_of_birth)) }}</dd>

                    <dt class="col-sm-3">Address</dt>
                    <dd class="col-sm-9">{{ $employee->address }}</dd>

                    <dt class="col-sm-3">Division</dt>
                    <dd class="col-sm-9">{{ $employee->division->name }}</dd>

                    <dt class="col-sm-3">Position</dt>
                    <dd class="col-sm-9">{{ $employee->position }}</dd>
                </dl>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
@endsection
