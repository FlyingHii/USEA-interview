<?php
require __DIR__ . '/../vendor/autoload.php';

use Services\ESolatApi;
use Services\VoiceOverService;

$con = container();
$api = $con->make(ESolatApi::class);
$data = $api->getPrayerTime('JHR01');
$con->make(VoiceOverService::class)->createVoiceOver($data);