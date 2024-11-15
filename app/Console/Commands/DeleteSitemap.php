<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete public/sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (!Storage::disk('public')->exists('sitemap.xml')) {
            $this->error('File didn\'t exists, there\'s nothing to delete!');
        }
        else {
            Storage::disk('public')->delete('sitemap.xml');
            $this->info("Success, file was deleted!");
        }
    }
}
