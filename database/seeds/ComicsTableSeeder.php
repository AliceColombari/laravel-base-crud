<?php

use Illuminate\Database\Seeder;
use App\comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics = config('comic');

        foreach ($comics as $comic) {
            $new_comic = new comic();
            $new_comic->title = $comic['title'];
            $new_comic->series = $comic['series'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->type = $comic['type'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->price = $comic['price'];
            $new_comic->description = $comic['description'];
            $new_comic->save();
        }
    }
}
