<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso1 = new Curso();

        $curso1->name = "laravel";
        $curso1->description= "el mejor framework de PHP";
        $curso1->category = "Desarrollo web";
        $curso1->save();

        $curso2 = new Curso();

        $curso2->name = "laravel";
        $curso2->description= "el mejor framework de PHP";
        $curso2->category = "Desarrollo web";
        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "laravel";
        $curso3->description= "el mejor framework de PHP";
        $curso3->category = "Desarrollo web";
        $curso3->save();
    }
}
