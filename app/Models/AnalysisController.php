<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AnalysisController extends Model
{
    use HasFactory;

    public function statistic()
    {
        try {
            $empCount = DB::table('employee_profile')->selectRaw('count(*) as employee_count')->get();
            $userCount = DB::table('user')->selectRaw('count(*) as user_count')->get();
            $ostratCount = DB::table('strategic_plan')
                ->selectRaw('count(*) AS ostrat_count')
                ->where('status', 2)
                //->where('period', 1)
                ->get();

            $istratCount = DB::table('strategic_employee AS se')
                ->join('strategic_plan AS sp', 'sp.id', '=', 'se.strategic_plan')
                ->selectRaw('count(*) AS istrat_count')
                ->where('se.status', 2)
                //->where('sp.period', 1)
                ->get();
            return response([
                'employee_count' => $empCount[0]->employee_count,
                'user_count' => $userCount[0]->user_count,
                'ostrat_count' => $ostratCount[0]->ostrat_count,
                'istrat_count' => $istratCount[0]->istrat_count
            ], 200);
        } catch (\Exception $e) {
            Log::error($e);
            return response("Someting went wrong", 500);
        }
    }

    public function userType()
    {
        try {

            $userTypes = DB::table('user')
                ->join('level', 'level.id', '=', 'user.level')
                ->select(['level.name as type', DB::raw('count(user.level) as count')])
                ->groupBy('level.name')
                ->get();

            return response($userTypes, 200);
        } catch (\Exception $e) {
            Log::error($e);
            return response("Someting went wrong", 500);
        }
    }

    public function budgetByPeriod()
    {
        try {
            $data = DB::table('period AS p')
                ->select(['p.name', DB::raw('(SELECT SUM(sp.budget)  from strategic_plan as sp where sp.id = p.id)  as budget')])
                ->get();
            return response($data, 200);
        } catch (\Exception $e) {
            Log::error($e);
            return response("Someting went wrong", 500);
        }
    }
}
