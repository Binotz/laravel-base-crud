<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $temp_comic = new Comic;

            $temp_comic->title = $comic['title'];
            $temp_comic->description = $comic['description'];
            $temp_comic->thumb = $comic['thumb'];
            //$ char removed because it does not match the field type
            $temp_comic->price = str_replace('$','',$comic['price']);
            $temp_comic->series = $comic['series'];
            $temp_comic->sale_date = $comic['sale_date'];
            $temp_comic->type = $comic['type'];

            $temp_comic->save();
        }
    }
}
