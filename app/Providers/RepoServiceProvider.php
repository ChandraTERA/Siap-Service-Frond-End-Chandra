<?php

namespace App\Providers;


use App\Service\GoogleService;
use App\Repository\OtpImplement;
use App\Service\OtpVerifService;
use App\Repository\OtpRepository;
use App\Repository\UserImplement;
use App\Repository\UserRepository;
use App\Repository\GoogleImplement;
use App\Repository\GoogleRepository;
use App\Repository\CustomerImplement;
use App\Service\ResetPasswordService;
use App\Service\UserInterfaceService;
use App\Service\UserServiceImplement;
use App\Repository\CustomerRepository;
use App\Repository\DaftarKerusakanImplement;
use App\Repository\DaftarKerusakanRepository;
use App\Repository\DeviceImplement;
use App\Repository\DeviceRepository;
use App\Service\GoogleInterfaceService;
use Illuminate\Support\ServiceProvider;
use App\Service\CustomerInterfaceService;
use App\Service\CustomerServiceImplement;
use App\Service\OtpVerifInterfaceService;
use App\Repository\ResetPasswordImplement;
use App\Repository\ResetPasswordRepository;
use App\Service\DaftarKerusakanInterfaceService;
use App\Service\DaftarKerusakanService;
use App\Service\DeviceInterfaceService;
use App\Service\DeviceService;
use App\Service\RegisterInterfaceService;
use App\Service\RegisterService;
use App\Service\ResetPasswordInterfaceService;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {



        $this->app->bind(UserRepository::class, UserImplement::class);
        $this->app->bind(OtpRepository::class, OtpImplement::class);
        $this->app->bind(ResetPasswordRepository::class, ResetPasswordImplement::class);

        $this->app->bind(GoogleRepository::class, GoogleImplement::class);
        $this->app->bind(GoogleInterfaceService::class, GoogleService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
