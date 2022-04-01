<?php

namespace App\Http\Controllers;

use App\Models\EmployeeProfile;
use Illuminate\Http\Request;

class EmployeeProfileController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $request->query('search');
        return EmployeeProfile::with(['_role', '_office'])
            ->where('first_name', 'like', "%{$search}%")
            ->orWhere('last_name', 'like', "%{$search}%")
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $newEmployee = new EmployeeProfile($request->all());
            $newEmployee->save();
            return response()->json("Employee created", 201);
        } catch (\Exception $e) {
            return response()->json("Error: " . $e, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeProfile  $employeeProfile
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeProfile $id) {
        return EmployeeProfile::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeProfile  $employeeProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeProfile $employeeProfile, $id) {
        try {
            EmployeeProfile::find($id)->update($request->all());
            return response()->json("Employee updated", 200);
        } catch (\Exception $e) {
            return response()->json("Error: " . $e, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeProfile  $employeeProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeProfile $employeeProfile) {
        //
    }
}
