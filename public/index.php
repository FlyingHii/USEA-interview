<?php
require __DIR__ . '/../vendor/autoload.php';

use Models\Box;
use Services\ESolatApi;
use Services\VoiceOverService;

$con = container();
$api = $con->make(ESolatApi::class);
$em = entityManager();
$boxes = $em->getRepository(Box::class)->findAll();
foreach ($boxes as $box) {
    $data = $api->getPrayerTime($box->prayer_zone);
    if(!empty($data)) {
        $con->make(VoiceOverService::class)->createVoiceOver($box, $data);
    };
}