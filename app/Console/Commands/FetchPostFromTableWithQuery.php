<?php

namespace App\Console\Commands;

use App\TablePost;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FetchPostFromTableWithQuery extends Command
{
    protected $signature = 'fetch-posts-from-table-query';

    protected $description = 'Fetch posts from the table with a query';

    public function handle()
    {
        DB::table('tbl_posts')->get();
    }
}
