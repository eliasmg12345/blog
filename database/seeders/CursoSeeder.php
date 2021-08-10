<?php

namespace Database\Seeders;
use App\Models\Curso;
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
        //
        //mismo codigo que se escribia en TINKER
        $curso = new Curso();

        $curso->name='laravell';
        $curso->descripcion='el mejor framework del mundo';
        $curso->categoria='Desarrollo Web';
        $curso->save();


        $curso2 = new Curso();

        $curso2->name='laravell';
        $curso2->descripcion='el mejor framework del mundo';
        $curso2->categoria='Desarrollo Web';
        $curso2->save();



        $curso3 = new Curso();

        $curso3->name='laravell';
        $curso3->descripcion='el mejor framework del mundo';
        $curso3->categoria='Desarrollo Web';
        $curso3->save();


        Curso::factory(50)->create();

    }
}
