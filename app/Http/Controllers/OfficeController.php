<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OfficeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $request->query('search');
        return Office::with(['_head', '_parent'])
            ->where('name', 'like', "%{$search}%")
            ->orWhere('code', 'like', "%{$search}%")
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Log::info($request->all());
        $data = $request->all();
        try {
            $newOffice = new Office([
                'code' => $data['code'],
                'name' => $data['name'],
                'head' => $data['head'],
                'is_delivery_unit' => $data['is_delivery_unit'],
            ]);
            $newOffice->save();
            $newOffice->_parent()->sync($request->parent);

            return response()->json("User created", 201);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json("Error: " . $e, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $id) {
        return Office::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office) {
        //
    }
}
