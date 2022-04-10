<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller {
    public function authenticate(Request $request) {
        Log::info($request->all());
        $credential = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $user = User::with(['_level', '_employee_profile._role._office._head'])->find(Auth::user()->id);
            return response($user, 200);
        }

        return response("Login failed", 401);
    }

    public function clearToken(Request $request) {
        try { //TODO: fix the logout
            $request->user()->currentAccessToken()->delete();
            return response("Token cleared", 200);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response("Error on clearing token", 500);
        }
    }
}
