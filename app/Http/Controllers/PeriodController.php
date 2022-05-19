<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        return Period::query()
            ->where('name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%")
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $period = Period::create($request->all());
            return response()->json($period, 201);
        } catch (\Exception $e) {
            Log::info($e);
            return response()->json($e->getMessage(), 500);
        }
    }

    public function activate(Request $request, $id)
    {
        Log::info($id);
        try {
            DB::table('active_period')->update(['value' => $id]);
            //$activePeriod = DB::table('active_period')->select('value')->first();
            //TODO: Add query here that updates the period of strategic_plan with 0  value in status.
            $currentPeriod = Period::query()->where('id', $id)->first();
            return response($currentPeriod, 200);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json($e->getMessage(), 500);
        }
    }

    public function getActivePeriod($id)
    {
        try {
            $activePeriod = DB::table('active_period')->select('value')->first();
            return response(Period::query()->where('id', $activePeriod->value)->first(), 200);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        //
    }
}
