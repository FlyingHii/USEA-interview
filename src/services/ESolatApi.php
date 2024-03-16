<?php

namespace Services;

use GuzzleHttp\Client;

class ESolatApi
{
    private Client $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function getPrayerTime($zone)
    {
        return $this->guzzle->get('https://www.e-solat.gov.my/index.php', [
            'query' => [
                'r' => 'esolatApi/TakwimSolat',
                'period' => 'week',
                'zone' => $zone,
                'lang' => 'en_us',
            ]
        ]);
    }
}
