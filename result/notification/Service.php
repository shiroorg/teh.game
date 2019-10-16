<?php

namespace Notification;

use Notification\Sms as NotificationSms;
use Notification\Email as NotificationEmail;
/***
 * Сервис отправка уведомлений
 * Class Service
 */
class service {

    /***
     * Гененрирует отправку уведомлений пользователю
     * @param stdClass $User
     * @param string $message
     */
    public function notify($User, $message) {

        // Отправка уведомлений на email
        $emailNotificator = new NotificationEmail();
        $emailNotificator->sendEmail($User->email, $message);

        // Отправка уведомлений на телефон
        $SmsNotificator = new NotificationSms();
        $SmsNotificator->sendSms($User->phone, $message);
    }

}