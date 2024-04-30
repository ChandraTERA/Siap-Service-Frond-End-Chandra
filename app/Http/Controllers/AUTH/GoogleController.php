<?php

namespace App\Http\Controllers\AUTH;

use App\Models\UserM;
use Illuminate\Http\Request;
use App\Repository\GoogleService;
use App\Http\Controllers\Controller;
use App\Service\GoogleInterfaceService;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleLog()
    {
        $user = Socialite::driver('google')->user();

        $user = UserM::where('email', $user->getEmail())->first();

        if ($user && $user['email_verified'] === true) {
            # code...
        }
        return response()->json(['data' => $user]);
    }
}
