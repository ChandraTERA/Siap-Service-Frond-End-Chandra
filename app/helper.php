<?php

use App\Models\UserM;

if (!function_exists('generateIDCustomer')) {
    function generateIDCustomer()
    {
        global $usedNumbers;


        if (!isset($usedNumbers)) {
            $usedNumbers = [];
        }

        do {

            if (count($usedNumbers) >= 10000) {
                return null;
            }

            $uniqueNumber = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $idCustomer = 'ZSIAPS' . $uniqueNumber;
        } while (in_array($idCustomer, $usedNumbers));

        $usedNumbers[] = $idCustomer;

        return $idCustomer;
    }
}
if (!function_exists('generateIDTransaksi')) {
    function generateIDTransaksi()
    {
        global $usedNumbers;


        if (!isset($usedNumbers)) {
            $usedNumbers = [];
        }

        do {

            if (count($usedNumbers) >= 10000) {
                return null;
            }

            $uniqueNumber = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $idTransaksi = 'ZSIAPS' . $uniqueNumber;
        } while (in_array($idTransaksi, $usedNumbers));

        $usedNumbers[] = $idTransaksi;

        return $idTransaksi;
    }
}



if (!function_exists('generateOTP')) {
    function generateOTP()
    {
        $otp = '';
        for ($i = 0; $i < 4; $i++) {
            $otp .= rand(0, 9); // Menghasilkan angka bulat acak antara 0 dan 9
        }

        return $otp;
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin($role)
    {
        return $role === 1;
    }
}

if (!function_exists('maskEmail')) {
    function maskEmail($email)
    {
        $atPos = strpos($email, '@');

        if ($atPos !== false) {
            // Memisahkan nama pengguna dan domain
            $username = substr($email, 0, $atPos);
            $domain = substr($email, $atPos);

            // Mengganti sebagian karakter nama pengguna dengan "*"
            $maskedUsername = substr_replace($username, '***', 3, -3);

            // Menggabungkan nama pengguna yang disensor dengan domain
            $maskedEmail = $maskedUsername . $domain;

            return $maskedEmail;
        }

        // Jika "@" tidak ditemukan, mengembalikan alamat email tanpa perubahan
        return $email;
    }
}
