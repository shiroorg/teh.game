<?php

class EmailNotificator {
    public function sendEmail($email, $text) {
        // ...
    }
}

class SmsNotificator {
    public function sendSms($phone, $text) {
        // ...
    }
}

class NotificationService {
    public function notify(User $user, $text) {
        $emailNotificator = new EmailNotificator();
        $SmsNotificator = new SmsNotificator();
        $emailNotificator->sendEmail($user->email, $text);
        $SmsNotificator->sendSms($user->phone, $text);
    }
}

///// Клиентский код
$service = new NotificationService();
$text = 'Какой-то текст';
foreach ($users as $user)
    $service->notify($user, $text);
