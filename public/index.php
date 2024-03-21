<?php
require __DIR__ . '/../vendor/autoload.php';

use Services\ESolatApi;
use Services\VoiceOverService;

const PRAYER_ZONE = [
    'JHR01',
    'JHR02',
    'JHR03',
    'JHR04',
    'KDH01',
    'KDH02',
    'KDH03',
    'KDH04',
    'KDH05',
    'KDH06',
    'KDH07',
    'KTN01',
    'KTN02',
    'MLK01',
    'NGS01',
    'NGS02',
    'NGS03',
    'PHG01',
    'PHG02',
    'PHG03',
    'PHG04',
    'PHG05',
    'PHG06',
    'PLS01',
    'PNG01',
    'PRK01',
    'PRK02',
    'PRK03',
    'PRK04',
    'PRK05',
    'PRK06',
    'PRK07',
    'SBH01',
    'SBH02',
    'SBH03',
    'SBH04',
    'SBH05',
    'SBH06',
    'SBH07',
    'SBH08',
    'SBH09',
    'SGR01',
    'SGR02',
    'SGR03',
    'SWK01',
    'SWK02',
    'SWK03',
    'SWK04',
    'SWK05',
    'SWK06',
    'SWK07',
    'SWK08',
    'SWK09',
    'TRG01',
    'TRG02',
    'TRG03',
    'TRG04',
    'WLY01',
    'WLY02',
];
$con = container();
$api = $con->make(ESolatApi::class);
foreach (PRAYER_ZONE as $zone) {
    $data = $api->getPrayerTime($zone);
    $con->make(VoiceOverService::class)->createVoiceOver($data);
}