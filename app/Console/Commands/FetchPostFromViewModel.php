<?php

namespace App\Console\Commands;

use App\ViewPost;
use Illuminate\Console\Command;

class FetchPostFromViewModel extends Command
{
    protected $signature = 'fetch-posts-from-view-model';

    protected $description = 'Fetch posts from the view model';

    public function handle()
    {
        ViewPost::all();
    }
}
