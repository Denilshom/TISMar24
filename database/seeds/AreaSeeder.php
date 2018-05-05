<?php

use Illuminate\Database\Seeder;
use Cinema\Area;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            
            'nameare'=>'Base de Datos',
            'namesubare'=>'Base de Datos',
            
            
        ]);
        Area::create([
            
            'nameare'=>'Redes',
            'namesubare'=>'Redes',
            
            
        ]);
        Area::create([
            
            'nameare'=>'Ingenieria de Software',
            'namesubare'=>'Ingenieria de Software',
            
            
        ]);
        Area::create([
            
            'nameare'=>'Sistemas Telematicos',
            'namesubare'=>'Sistemas Telematicos',
            
            
        ]);
        Area::create([
            
            'nameare'=>'Telecomunicaciones',
            'namesubare'=>'Telecomunicaciones',
            
            
        ]);
    }
}
