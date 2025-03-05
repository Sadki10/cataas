<?php

namespace Database\Seeders;

use App\Models\CatImage;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CatImageSeeder extends Seeder
{
    public function run()
    {
        $client = new Client();
        $response = $client->get('https://cataas.com/api/cats?&skip=0&limit=100000');
        $data = json_decode($response->getBody()->getContents(), true);

        foreach ($data ?? [] as $catImage) {
            CatImage::create([
                '_id' => $catImage['id'],
                'tags' => $catImage['tags'],
                'mimetype' => $catImage['mimetype'],
            ]);
        }
    }
}
