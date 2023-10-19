<?php

namespace GlassCode\PersianFaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class DownloadCommand extends Command
{
    protected $signature = 'lively:download {path}';

    protected $description  = 'Download file exists in path to /data directory';

    public function handle(): void
    {
        $path = $this->argument('path');

        $fullPath = config('persian_faker.repository_url') . $path;

        $response = Http::get($fullPath);

        $jsonValue = json_decode($response->body());

        File::ensureDirectoryExists('data');

        // split path and get make collection name from it
        // /test/inspiration.json ==> inspiration

        $split = explode('/', $path);
        $collectionName = $split[count($split) - 1];

        File::put("data/$collectionName", $jsonValue);
    }
}
