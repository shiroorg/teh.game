<?php

namespace Notification;
/***
 * Отправка уведомлений через СМС
 * Class Email
 */
class Email {

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