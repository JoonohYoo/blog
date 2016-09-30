<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::truncate();

        $users = App\User::all();

        $users->each(function ($user) {
        	$user->posts()->save(
        		factory(App\Post::class)->make()
        	);

        	$user->posts()->save(
        		factory(App\Post::class)->make()
        	);
        });
    }
}
