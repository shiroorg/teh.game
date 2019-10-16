<?php

namespace Notification;
/***
 * Отправка уведомлений через СМС
 * Class Sms
 */
class Sms {

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