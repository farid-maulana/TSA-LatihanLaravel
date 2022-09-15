@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Employees</li>
        </ol>
        <h2>Our Employees</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <div class="mb-3 d-flex justify-content-between">
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">
                        Add New Employee
                    </a>
                    <form action="{{ route('employees.search') }}" method="POST" class="d-flex">
                        @csrf
                        <div class="form-group mx-2">
                            <input type="text" class="form-control" name="keyword" id="keyword"
                                placeholder="Search employee...">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Division</th>
                                <th>Position</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->employee_id_number }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->division->name }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>
                                        <a href="{{ route('employees.show', $employee->id) }}"
                                            class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form
                                            action="{{ route('employees.destroy', $employee->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
@endsection
