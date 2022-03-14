<?php

namespace Database\Seeders;
use App\Models\alumno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$foto = ('OPRdCCGb6A9nMhoWwQVpy221wDyydzaIsPcSveOx.jpg');

       /* DB::table('alumno')->insert([
            'carne' => '700',
            'nombre' => 'IVAN ALDANA ',
            'alias' => 'ALDANA',
            'foto' =>$foto,
            'correo' => 'aldana@gmail.com',
            'fecha_nacimiento' => '2001-09-12',
            'telefono' => '00004545',
            'id_categoria' => '2',
        ]);

        DB::table('alumno')->insert([
            'carne' => '701',
            'nombre' => 'FABIO MORALES',
            'alias' => 'FAB',
            'foto' =>$foto,
            'correo' => 'faby@gmail.com',
            'fecha_nacimiento' => '2002-11-31',
            'telefono' => '78963120',
            'id_categoria' => '2',
        ]);*/
        alumno::factory(1000)->create();

    }
}
