<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseView extends Migration
{
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS view_posts');
        DB::statement('CREATE VIEW view_posts AS
        SELECT id, title, body, created_at, updated_at FROM tbl_posts
        ');
    }

    public function down()
    {
        //
    }
}
