<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = Tipo::create([
            'nombre' => 'Acero',
            'imagen' => '/imagenes/tipo/acero.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Agua',
            'imagen' => '/imagenes/tipo/agua.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Bicho',
            'imagen' => '/imagenes/tipo/bicho.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Dragon',
            'imagen' => '/imagenes/tipo/dragon.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Electrico',
            'imagen' => '/imagenes/tipo/electrico.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Fantasma',
            'imagen' => '/imagenes/tipo/fantasma.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Fuego',
            'imagen' => '/imagenes/tipo/fuego.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Hada',
            'imagen' => '/imagenes/tipo/hada.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Hielo',
            'imagen' => '/imagenes/tipo/hielo.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Lucha',
            'imagen' => '/imagenes/tipo/lucha.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Normal',
            'imagen' => '/imagenes/tipo/normal.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Planta',
            'imagen' => '/imagenes/tipo/planta.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Psiquico',
            'imagen' => '/imagenes/tipo/Psiquico.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Roca',
            'imagen' => '/imagenes/tipo/roca.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Siniestro',
            'imagen' => '/imagenes/tipo/siniestro.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Tierra',
            'imagen' => '/imagenes/tipo/tierra.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Veneno',
            'imagen' => '/imagenes/tipo/veneno.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Volador',
            'imagen' => '/imagenes/tipo/volador.gif'
        ]);
    }
}
