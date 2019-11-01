<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student1 = new \App\Student();
        $student1->firstName = "Siebe";
        $student1->lastName = "De Celle";
        $student1->email = "siebe.decelle@hotmail.be    ";
        $student1->password = "123";
        $student1->school = "Thomas More";
        $student1->education = "Interactive Multimedia Design";
        $student1->dateOfBirth = "1999-12-01 00:00:00";
        $student1->save();

        $student2 = new \App\Student();
        $student2->firstName = "Bram";
        $student2->lastName = "Theunis";
        $student2->email = "bram.theunis@hotmail.be";
        $student2->password = "123";
        $student2->school = "Thomas More";
        $student2->education = "Interactive Multimedia Design";
        $student2->dateOfBirth = "1999-12-01 00:00:00";
        $student2->save();

        $student3 = new \App\Student();
        $student3->firstName = "Cesar";
        $student3->lastName = "Peeters";
        $student3->email = "cesar.peeters@hotmail.be";
        $student3->password = "123";
        $student3->school = "Thomas More";
        $student3->education = "Interactive Multimedia Design";
        $student3->dateOfBirth = "1999-12-01 00:00:00";
        $student3->save();

        $student4 = new \App\Student();
        $student4->firstName = "Sam";
        $student4->lastName = "Ghyselinck";
        $student4->email = "sam.ghyselick@hotmail.be";
        $student4->password = "123";
        $student4->school = "Thomas More";
        $student4->education = "Interactive Multimedia Design";
        $student4->dateOfBirth = "1999-12-01 00:00:00";
        $student4->save();

        factory(\App\Student::class, 20)->create();
    }
}
