<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DispatchSendEmailVerif implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $data = $this->data;
            Mail::send('MailView.MailVerifOtp', [
                'email' => $data['email'],
                'otp_verify' => $data['otp_verify']
            ], function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Email Verifikasi');
            });
        } catch (\Exception $e) {
            Log::error('There is an issue ' . $e->getMessage());
        }
    }
}
