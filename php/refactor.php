<?php

class NotificationEmail {
    public function sendEmail($email, $text) {
        // ...
    }
}

class NotificationSms {
    public function sendSms($phone, $text) {
        // ...
    }
}

class NotificationService {
    public function notify(User $user, $text) {
        $emailNotificator = new NotificationEmail();
        $SmsNotificator = new NotificationSms();
        $emailNotificator->sendEmail($user->email, $text);
        $SmsNotificator->sendSms($user->phone, $text);
    }
}

echo "Add Service\n";
$obj = new NotificationService();

var_dump($obj);
echo "Ini Test\n ";
$obj->test();

