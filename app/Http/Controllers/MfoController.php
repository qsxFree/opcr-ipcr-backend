<?php

namespace App\Http\Controllers;

use App\Models\Mfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MfoController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $request->query('search');
        return Mfo::query()
            ->where('code', 'like', "%{$search}%")
            ->orWhere('name', 'like', "%{$search}%")
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
            Mfo::create($request->all());
            return response()->json("MFO created", 201);
        } catch (Exception $e) {
            Log::error($e);
            return response()->json("Error: " . $e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mfo  $mfo
     * @return \Illuminate\Http\Response
     */
    public function show(Mfo $mfo) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mfo  $mfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mfo $mfo, $id) {
        try {
            Mfo::find($id)->update($request->all());
            return response()->json("MFO updated", 200);
        } catch (Exception $e) {
            Log::error($e);
            return response()->json("Error: " . $e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mfo  $mfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mfo $mfo) {
        //
    }
}
