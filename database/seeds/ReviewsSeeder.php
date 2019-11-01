<?php

use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review1 = new \App\Review();
        $review1->internshipId = "1";
        $review1->stars = "5";
        $review1->description = "Zeer leuke samenwerking.";
        $review1->save();

        $review2 = new \App\Review();
        $review2->internshipId = "2";
        $review2->stars = "1";
        $review2->description = "Zeer slechte samenwerking.";
        $review2->save();
    }
}
