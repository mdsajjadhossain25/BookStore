<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $book = new Book();
            $book->title = $faker->sentence(3);
            $book->author = $faker->name();
            $book->isbn = $faker->numberBetween(100, 10000);
            $book->price = $faker->numberBetween(10, 100);
            $book->details = $faker->paragraph(4);
            $book->quantity = $faker->numberBetween(1, 100);
            $book->save();
        }
    }
}
