<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Division;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all();
        return view('employees.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $validated = $request->validated();
        
        $path = $request->file('photo')->store('public/employees');
        $validated['photo'] = basename($path);

        Employee::create($validated);

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.detail', compact('employee'));
    }

    /**
     * Display the specified resource by keyword.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if ($request->keyword != '')
        {
            $employees = Employee::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
            return view('employees.index', compact('employees'));
        }
        else
        {
            return redirect()->route('employees.index');
        }
    }

    public function salary_report(Employee $employee)
    {
        $pdf = PDF::loadview('employees.salary', compact('employee'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $divisions = Division::all();
        return view('employees.edit', compact('employee', 'divisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $validated = $request->validated();

        if ($employee->photo && file_exists(storage_path('app/public/' . $employee->photo)))
        {
            Storage::delete('public/' . $employee->photo);
        }

        $path = $request->file('photo')->store('public/employees');
        $validated['photo'] = basename($path);

        $employee->update($validated);

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}
