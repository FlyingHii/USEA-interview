<?php
require __DIR__ . '/../vendor/autoload.php';

use Services\ESolatApi;

$con = container();
$api = $con->make(ESolatApi::class);
$response = $api->getPrayerTime('JHR01');
$data = json_decode($response->getBody()->getContents(), true);
$em = getEntityManager();
foreach ($data['prayerTime'] as $prayerTime) {

    foreach ([
                 'imsak',
                 'fajr',
                 'syuruk',
                 'dhuhr',
                 'asr',
                 'maghrib',
                 'isha',
             ] as $prayerName) {
        $song = $con->make(\Models\Song::class, [
            "name",
            "subscriber_id",
            "box_id",
            "prayer_time_date" => $prayerTime['date'],
            "prayer_time"=>$prayerName,
        ]);
        $em->persist($song);
    }
}
$em->flush();