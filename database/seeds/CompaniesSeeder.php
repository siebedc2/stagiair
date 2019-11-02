<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company1 = new \App\Company();
        $company1->name = "Flux"; 
        $company1->sector = "Webdesign";
        $company1->city = "Antwerpen";
        $company1->email = "test@test.be";
        $company1->password = "123";
        $company1->save();

        $company2 = new \App\Company();
        $company2->name = "The Website Company"; 
        $company2->sector = "Webdesign";
        $company2->city = "Gent";
        $company2->email = "test@test.be";
        $company2->password = "123";
        $company2->save();

        $company3 = new \App\Company();
        $company3->name = "Dropsolid"; 
        $company3->sector = "Webdesign";
        $company3->city = "Gent";
        $company3->email = "test@test.be";
        $company3->password = "123";
        $company3->save();

        $company4 = new \App\Company();
        $company4->name = "Glue Interactive Media"; 
        $company4->sector = "Webdesign";
        $company4->city = "Gent";
        $company4->email = "test@test.be";
        $company4->password = "123";
        $company4->save();

        $company5 = new \App\Company();
        $company5->name = "Hybrid"; 
        $company5->sector = "Webdesign";
        $company5->city = "Antwerpen";
        $company5->email = "test@test.be";
        $company5->password = "123";
        $company5->save();
    }
}
