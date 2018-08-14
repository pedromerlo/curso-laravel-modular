<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Post;


class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $post = new Post();
        $post->title='Home';
        $post->body='home page';
        $post->save();
        $post = new Post();
        $post->title='About';
        $post->body='About page';
        $post->save();





        // $this->call("OthersTableSeeder");
    }
}
