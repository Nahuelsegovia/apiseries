<?php

use Illuminate\Database\Seeder;

class CrearSeries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'titulo_serie' => 'Dark',
            'descripcion_serie' => 'Serie que no entiendo, ni quiero ver',
            'donde_ver_serie' => 'Netflix',
            'imagen_serie' => '/imagenes/serie.png',
            'cancion_serie' => '/canciones/serie.mp3',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'El Puntero',
            'descripcion_serie' => 'Serie sobre puntero político que hace lo que sea para llegar al poder',
            'donde_ver_serie' => 'Youtube',
            'imagen_serie' => '/imagenes/serie.png',
            'cancion_serie' => '/canciones/serie.mp3',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'Game Of Thrones',
            'descripcion_serie' => 'Serie donde los 7 reinos se encuentran en guerra por el trono de hierro',
            'donde_ver_serie' => 'HBO',
            'imagen_serie' => '/imagenes/serie.png',
            'cancion_serie' => '/canciones/serie.mp3',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'El Pre$sidente',
            'descripcion_serie' => 'Serie que trata sobre la corrupción de la fifa en los diferentes continentes',
            'donde_ver_serie' => 'Netflix',
            'imagen_serie' => '/imagenes/serie.png',
            'cancion_serie' => '/canciones/serie.mp3',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'El Tigre Verón',
            'descripcion_serie' => 'Serie sobre un sindicalista poderoso de la industria de la carne ',
            'donde_ver_serie' => 'Netflix',
            'imagen_serie' => '/imagenes/serie.png',
            'cancion_serie' => '/canciones/serie.mp3',
        ]);
    }
}