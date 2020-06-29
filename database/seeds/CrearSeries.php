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
            'descripcion_serie' => 'Serie que sigue las secuelas de la desaparición de un niño que expone los secretos y las conexiones ocultas entre cuatro familias',
            'donde_ver_serie' => 'Netflix',
            'imagen_serie' => 'https://i.pinimg.com/474x/c8/53/8e/c8538e161f2d23c68ea8374da96fde1d.jpg',
            'cancion_serie' => 'https://www.youtube.com/watch?v=8c399HPb01s',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'El Puntero',
            'descripcion_serie' => 'Serie sobre puntero político que hace lo que sea para llegar al poder',
            'donde_ver_serie' => 'Youtube',
            'imagen_serie' => 'https://i.pinimg.com/474x/3f/62/8b/3f628b8243cde85c00e40ec12aa64bb3.jpg',
            'cancion_serie' => 'https://www.youtube.com/watch?v=aL801QdqZBI',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'Game Of Thrones',
            'descripcion_serie' => 'Serie donde los 7 reinos se encuentran en guerra por el trono de hierro',
            'donde_ver_serie' => 'HBO',
            'imagen_serie' => 'https://i.pinimg.com/474x/dc/68/27/dc6827e06c3a3c7e7949141c943519c8.jpg',
            'cancion_serie' => 'https://www.youtube.com/watch?v=s7L2PVdrb_8',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'El Pre$sidente',
            'descripcion_serie' => 'Serie que trata sobre la corrupción de la fifa en los diferentes continentes',
            'donde_ver_serie' => 'Netflix',
            'imagen_serie' => 'https://i.pinimg.com/474x/8b/e8/fd/8be8fdfedd19ffa14244119b450dfac2.jpg',
            'cancion_serie' => 'https://www.youtube.com/watch?v=Mlnyi3QtPts',
        ]);

        DB::table('series')->insert([
            'titulo_serie' => 'El Tigre Verón',
            'descripcion_serie' => 'Serie sobre un sindicalista poderoso de la industria de la carne ',
            'donde_ver_serie' => 'Netflix',
            'imagen_serie' => 'https://www.infobae.com/new-resizer/erMFaA4CIHlAoBqJLz_t-8NghyU=/600x400/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/07/10230608/el-tigre-veron-2.jpg',
            'cancion_serie' => 'https://www.youtube.com/watch?v=0dt-jOEjg8I',
        ]);
    }
}