<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap as xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (Storage::disk('public')->exists('sitemap.xml')) {
            $this->error("File Already exists!");
        }
        else {
            SitemapGenerator::create(env('APP_URL'))->getSitemap()->writeToDisk('public', 'sitemap.xml');
            $this->info('Success, file was created!');
        }
    }
}
