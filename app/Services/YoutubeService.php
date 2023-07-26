<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

class YoutubeService
{
    protected Google_Service_YouTube $youtube;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setDeveloperKey('AIzaSyCDMuxUopqy-j2gjOXc_81FKdCniLtOhHg'); // Remplacez par votre clé d'API YouTube

        $this->youtube = new Google_Service_YouTube($client);
    }

    public function getLatestVideo(string $channelId)
    {
        $videos = $this->youtube->search->listSearch('snippet', [
            'channelId' => $channelId,
            'order' => 'date',
            'type' => 'video',
            'maxResults' => 1,
        ]);

        if (count($videos) > 0) {
            return $videos[0];
        }

        return null;
    }
}
