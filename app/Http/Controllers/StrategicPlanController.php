<?php

namespace App\Http\Controllers;

use App\Models\StrategicPlan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StrategicPlanController extends Controller {

    public function index(Request $request) {
        return StrategicPlan::with('_mfo', '_office')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();

        $user = User::with(['_employee_profile._role._office', '_level'])->find(Auth::user()->id);

        try {
            collect($data['details'])->each(

                function ($detail) use ($data, $user) {

                    $strategicPlan = new StrategicPlan([
                        'mfo' => $data['mfo'],
                        'type' => $data['type'],
                        'success_indicator' => $detail['success_indicator'],
                        'budget' => floatval($detail['budget']),
                        'office' => $user->_employee_profile->_role->_office->id,
                    ]);

                    $strategicPlan->save();
                    $personId = array();

                    if (array_key_exists('accountable-role', $detail)) {
                        collect($detail['accountable-role'])
                            ->each(function ($roleId) use (&$personId) {
                                $persons = DB::table('employee_profile')
                                    ->select('id')
                                    ->where('role', $roleId)
                                    ->get();

                                collect($persons->toArray())
                                    ->each(function ($person) use (&$personId) {
                                        array_push($personId, $person->id);
                                    });
                            });
                    }

                    if (array_key_exists('accountable-person', $detail)) {
                        collect($detail['accountable-person'])
                            ->each(function ($id) use (&$personId) {
                                array_push($personId, $id);
                            });
                    }

                    $strategicPlan->_accountable()->attach(array_unique($personId));
                }
            );

            return response()->json("Strategic Plan created", 201);
        } catch (\Exception $e) {
            Log::info($e);
            return response()->json("Error: " . $e, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StrategicPlan  $strategicPlan
     * @return \Illuminate\Http\Response
     */
    public function show(StrategicPlan $strategicPlan) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StrategicPlan  $strategicPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrategicPlan $strategicPlan) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StrategicPlan  $strategicPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(StrategicPlan $strategicPlan) {
        //
    }
}
