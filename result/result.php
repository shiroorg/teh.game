<?php
require_once 'notification/Service.php';
require_once 'notification/Sms.php';
require_once 'notification/Email.php';

use Notification\Service;

$NotificationService = new Service();

$message = 'Какой-то текст';

$NotificationService->notify($User, $message);

foreach ($Users as $User) {
    $service->notify($User, $message);
}
