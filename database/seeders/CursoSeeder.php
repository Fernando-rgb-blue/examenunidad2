<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = "laravel";
        $curso->descripcion = "Laravel Bueno";
        $curso->categoria = "desarrollo web";

        $curso->save();
        
        // Example 2
        $curso2 = new Curso();
        $curso2->name = "Python";
        $curso2->descripcion = "Advanced Python Programming";
        $curso2->categoria = "programación";
        $curso2->save();

        // Example 3
        $curso3 = new Curso();
        $curso3->name = "HTML & CSS";
        $curso3->descripcion = "Web Design with HTML & CSS";
        $curso3->categoria = "desarrollo web";
        $curso3->save();

        // Example 4
        $curso4 = new Curso();
        $curso4->name = "Data Science";
        $curso4->descripcion = "Data Science with Python";
        $curso4->categoria = "ciencia de datos";
        $curso4->save();

        // Example 5
        $curso5 = new Curso();
        $curso5->name = "Machine Learning";
        $curso5->descripcion = "Introduction to Machine Learning";
        $curso5->categoria = "inteligencia artificial";
        $curso5->save();

        // Example 6
        $curso6 = new Curso();
        $curso6->name = "PHP";
        $curso6->descripcion = "PHP for Web Development";
        $curso6->categoria = "desarrollo web";
        $curso6->save();
    }
}
