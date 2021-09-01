<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'birthday' => '6 octomber 1998',
            'website' => ' www.example.com',
            'phone' =>  +1234567890,
            'city' => 'Brussels',
            'age' => 22,
            'degree' =>'junior',
            'email' => 'stan@gmail.com',
            'freelance' => 'Available',
            'description' => 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.',
        ]);
    }
}
