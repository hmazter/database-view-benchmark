<?php

namespace App\Console\Commands;

use App\TablePost;
use Illuminate\Console\Command;

class FetchPostFromTableModel extends Command
{
    protected $signature = 'fetch-posts-from-table-model';

    protected $description = 'Fetch posts from the table model';

    public function handle()
    {
        TablePost::all();
    }
}
