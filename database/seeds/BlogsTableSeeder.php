<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(['title' => 'New Blog 1','content' => 'This is a new blog 1'
        ]);
        DB::table('blogs')->insert(['title' => 'New Blog 2','content' => 'This is a new blog 2'
        ]);
        DB::table('blogs')->insert(['title' => 'New Blog 3','content' => 'This is a new blog 3'
        ]);
    }
}
