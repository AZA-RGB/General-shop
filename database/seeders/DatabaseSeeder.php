<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Address;
use App\Models\Category;
use App\Models\product;
use App\Models\Image;
use App\Models\review;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use database\seeders\UsersSeeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Address::factory()->count(1000)->create();
        // User::factory()->count(500)->create();
        // Category::factory()->count(100)->create();
        // product::factory()->count(500)->create();
        // image::factory()->count(300)->create();
        review::factory()->count(300)->create();
        // Tag::factory()->count(150)->create();

        // $this->call(UsersSeeder::class);

    }
}
