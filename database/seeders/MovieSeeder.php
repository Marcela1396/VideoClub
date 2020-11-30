<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies =[
            [
                'title' => '¡Scooby!',
                'year' => '2020',
                'director' => 'Tony Cervone',
                'poster'=> '1.jpg',
                'synopsis' => 'Con cientos de casos resueltos y aventuras compartidas, Scooby y la pandilla se enfrentan al misterio más grande y desafiante de todos los tiempos: un complot para liberar al aterrador perro fantasma Cerbero en el mundo de los vivos.'
            ],
            [
                'title' => 'Yo antes de ti',
                'year' => '2016',
                'director' => 'Thea Sharrock',
                'poster'=> '2.jpg',
                'synopsis' => 'La vida de Louisa Clark, una chica alegre y alocada, que va empalmando un trabajo con otro para ayudar a su familia a subsistir, cambia por completo cuando comienza a trabajar como cuidadora de un joven millonario, quien quedó paralítico tras un accidente. Poco a poco, se va estableciendo entre ellos una conexión cada vez más íntima.'
            ],
            [
                'title' => 'Mentes poderosas',
                'year' => '2018',
                'director' => 'Jennifer Yuh',
                'poster'=> '3.jpg',
                'synopsis' => 'Ruby es una adolescente que ha sido encerrada en un campo de concentración por haber desarrollado superpoderes. Ruby escapa y se une a otros jóvenes fugados con poderes excepcionales, pero los agentes del Gobierno tratarán de capturarlos.'
            ]
        ];
        DB::table('movies')->insert($movies);
    }
}
