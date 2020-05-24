<?php

use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


use Illuminate\Support\Facades\Storage;
use App\Service;

Artisan::command('generate:feed', function () {
    $this->info("Generating RSS Feed");
    $services = Service::all();
    $site = [
        'name' => 'Flaresy',
        'url' => 'http://flaresy.fr/rss.xml',
        'description' => 'Flaresy Agency, agence audiovisuelle créée en 2020, est une agence SAS située à Toulon. Nous couvrons tous les besoins en vidéo : réalisation, motion design, effets spéciaux.',
        'language' => 'fr', // eg. en, en-IN, jp
        'lastBuildDate' => Carbon::now()->format(DateTime::RSS),
    ];
    $rssFileContents = view('rss', compact('services', 'site'));
    Storage::disk('public')->put('rss.xml', $rssFileContents);
    $this->info("Completed");
});
