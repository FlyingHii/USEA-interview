<?php

namespace Services;

use GuzzleHttp\Client;

class ESolatApi
{
    private Client $guzzle;

    const IS_TESTING = true;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function getPrayerTime($zone): array
    {
        if (self::IS_TESTING) {
            $fileLoc = getcwd() . "/test/api/response.json";
            $response = fopen($fileLoc, "r") or die("Unable to open file!");
            $data = json_decode(fread($response, filesize($fileLoc)), true);
            fclose($response);
            return $data;
        }
        $response = $this->guzzle->get('https://www.e-solat.gov.my/index.php', [
            'query' => [
                'r' => 'esolatApi/TakwimSolat',
                'period' => 'week',
                'zone' => $zone,
            ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
