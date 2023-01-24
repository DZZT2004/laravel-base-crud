<?php

use App\Fumetto;
use Illuminate\Database\Seeder;

class FumettoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config('comics');
        foreach ($fumetti as $fumetto){
            $card = new Fumetto();
            $card->title = $fumetto['title'];
            $card->description = $fumetto['description'];
            $card->thumb = $fumetto['thumb'];
            $card->price = $fumetto['price'];
            $card->series = $fumetto['series'];
            $card->sale_date = $fumetto['sale_date'];
            $card->type = $fumetto['type'];
            $card->save();
        }
        
    }
}
