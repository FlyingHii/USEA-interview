<?php
namespace Services;

use GuzzleHttp\Client;
use Models\Box;
use Models\Song;

class VoiceOverService
{
    public function createVoiceOver($data)
    {
        $con = container();
        $em = entityManager();
        $boxes = $em->getRepository(Box::class)->findAll();
        $lastPrayerSeqNr = $em->createQueryBuilder()->select('s.prayer_time_seq')
            ->from(Song::class, 's')
            ->orderBy('s.prayer_time_seq', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult();
        $lastPrayerSeqNr = $lastPrayerSeqNr['prayer_time_seq'] ?? 0;
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
                foreach ($boxes as $box) {
                    $song = $con->make(Song::class, ['data' => [
                        "name" => $prayerName,
                        "subscriber_id" => $box->subscriber_id,
                        "box_id" => $box->id,
                        "prayer_time_seq" => ++$lastPrayerSeqNr,
                        "prayer_time_date" => date_format(date_create($prayerTime['date']), "Y-m-d"),
                        "prayer_time" => $prayerTime[$prayerName],
                    ]]);

                    $em->persist($song);
                }
            }
        }
        $em->flush();
    }
}
