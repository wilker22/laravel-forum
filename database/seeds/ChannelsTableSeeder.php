<?php

use Illuminate\Database\Seeder;
use LaravelForum\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 5.8',
            'slug' => str_slug('Laravel 5.8')
        ]);

        Channel::create([
            'name' => 'VueJS 3',
            'slug' => str_slug('VueJS 3')
        ]);

        Channel::create([
            'name' => 'Angular 7',
            'slug' => str_slug('Angular 7')
        ]);

        Channel::create([
            'name' => 'NodeJS',
            'slug' => str_slug('NodeJS')
        ]);
    }
}
