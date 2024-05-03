<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ValidationNotification extends Notification
{
    protected $validation;

    public function __construct($validation)
    {
        $this->validation = $validation;
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Anda memiliki permintaan validasi pembayaran baru.',
            'transaction_id' => $this->validation->transaction_id,
            // Sesuaikan dengan atribut yang sesuai dalam model validasi
        ];
    }
}
