<?php

namespace App\Http\Controllers;

use App\Models\StrategicPlan;
use Illuminate\Http\Request;
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
        try {
            collect($data['details'])->each(

                function ($detail) use ($data) {
                    Log::info([
                        'mfo' => $data['mfo'],
                        'type' => $data['type'],
                        'success_indicator' => $detail['success_indicator'],
                        'budget' => floatval($detail['budget']),
                        'office' => $detail['office'],
                    ]);
                    $strategicPlan = new StrategicPlan([
                        'mfo' => $data['mfo'],
                        'type' => $data['type'],
                        'success_indicator' => $detail['success_indicator'],
                        'budget' => floatval($detail['budget']),
                        'office' => $detail['office'],
                    ]);
                    $strategicPlan->save();
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
