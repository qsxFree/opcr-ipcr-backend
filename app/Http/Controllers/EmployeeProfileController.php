<?php

namespace App\Http\Controllers;

use App\Models\EmployeeProfile;
use App\Models\EmployeeRole;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeeProfileController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $request->query('search');
        $user = User::with(['_employee_profile._role._office', '_level'])
            ->find(Auth::user()->id);

        if ($user->_level->name === 'HEAD') {
            $officeId = $user->_employee_profile->_role->_office->id;
            return DB::table('employee_profile')
                ->leftJoin('employee_role', 'employee_role.id', '=', 'employee_profile.role')
                ->leftJoin('office', 'office.id', '=', "employee_role.office")
                ->select(
                    'employee_profile.id as id',
                    'employee_profile.first_name as first_name',
                    'employee_profile.last_name as last_name',
                    'employee_profile.middle_name as middle_name',
                    'employee_profile.extension_name as extension_name'
                )
                ->where('employee_profile.first_name', 'like', "%{$search}%")
                ->orWhere('employee_profile.last_name', 'like', "%{$search}%")
                ->where('office.id', $officeId)->get();
        }

        return EmployeeProfile::with(['_role', '_user'])
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
