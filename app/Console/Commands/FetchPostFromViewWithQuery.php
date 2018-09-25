<?php

namespace App\Console\Commands;

use App\TablePost;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FetchPostFromViewWithQuery extends Command
{
    protected $signature = 'fetch-posts-from-view-query';

    protected $description = 'Fetch posts from the view with a query';

    public function handle()
    {
        DB::table('view_posts')->get();
    }
}
