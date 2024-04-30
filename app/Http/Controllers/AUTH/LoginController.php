<?php

namespace App\Http\Controllers\AUTH;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // LOGIKA LOGIN CUSTOMER
    public function do_login_customer(LoginRequest $loginRequest)
    {
        try {
            $email = $loginRequest['email'];
            $password = $loginRequest['password'];
            $user = $this->userRepository->emailUserSelect($email);

            if (!$user) {
                return response()->json(['message' => 'Akun tidak ditemukan'], 404);
            } else {
                if (!$user->is_verified === true) {
                    return response()->json(['message' => 'Email belum terverifikasi']);
                }
            }
            if (!isAdmin($user->role)) {
                if (Auth::guard('user')->attempt(['email' => $email, 'password' => $password])) {
                    $loginRequest->session()->regenerate();
                    return response()->json(['message' => 'Selamat datang, Customer!'], 200);
                } else {
                    return response()->json(['message' => 'email atau password salah'], 401);
                }
            } else {
                return back()->withErrors(['error' => 'Anda bukan customer']);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }


    // LOGIKA LOGIN ADMIN
    public function do_login_admin(LoginRequest $loginRequest)
    {
        try {
            $email = $loginRequest['email'];
            $password = $loginRequest['password'];
            $user = $this->userRepository->emailUserSelect($email);

            if (!$user) {
                return response()->json(['message' => 'Akun tidak ditemukan'], 404);
            } else {
                if (!$user->is_verified === true) {
                    return response()->json(['message' => 'Email belum terverifikasi']);
                }
            }
            if (isAdmin($user->role)) {
                if (Auth::guard('user')->attempt(['email' => $email, 'password' => $password])) {
                    $loginRequest->session()->regenerate();
                    return response()->json(['message' => 'Selamat datang, admin!'], 200);
                } else {
                    return response()->json(['message' => 'email atau password salah'], 401);
                }
            } else {
                return back()->withErrors(['error' => 'Anda bukan admin']);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    // LOGIKA LOGOUT 
    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $request->session()->flush();
            return response()->json(['berhasil logout']);
        } else {
            return response()->json(['tidak ada otentikasi user']);
        }
    }
}
