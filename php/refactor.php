<?php

/***
 * Отправка уведомлений через Email
 * Class NotificationEmail
 */
class NotificationEmail {

    /***
     * Инициирование отправки сообщения на email
     * @param $email
     * @param $text
     */
    public function sendEmail($email, $text) {
        // ...
        echo "$email - $text";
    }

}

/***
 * Отправка уведомлений через СМС
 * Class NotificationSms
 */
class NotificationSms {

    /***
     * Инициирование отправка сообщения на телефон
     * @param $phone
     * @param $text
     */
    public function sendSms($phone, $text) {
        // ...
        echo "$phone - $text";

    }

}

/***
 * Сервис отправка уведомлений
 * Class NotificationService
 */
class NotificationService {

    /***
     * Гененрирует отправку уведомлений пользователю
     * @param User $User
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

$NotificationService = new NotificationService();

$message = 'Какой-то текст';

$User = new stdClass();
$User->phone = '457698464';
$User->email = 'email@mail.ru';

$NotificationService->notify($User, $message);

//foreach ($Users as $User) {
//    $service->notify($User, $message);
//}
