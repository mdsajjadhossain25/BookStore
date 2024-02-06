<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i <10; $i++) { 
            $book = new Book();
            $book->title = $faker->sentence(3);
            $book->author = $faker->name();
            $book->isbn = $faker->isbn13();
            $book->price = $faker->randomFloat(2, 10, 100);
            $book->details = $faker->paragraph(4);
            $book->quantity = $faker->numberBetween(1, 100);
            $book->save();
        }
    }
}
