<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('rooms')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Room::create([
            'tipo'=>'Doble',
            'capacidad'=>'2',
            'n_habitacion'=>'1',
            'pvp'=>'60',
            'imagen'=> '/img/coches/doble.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble',
            'capacidad'=>'2',
            'n_habitacion'=>'2',
            'pvp'=>'60',
            'imagen'=> '/img/coches/doble2.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble',
            'capacidad'=>'2',
            'n_habitacion'=>'3',
            'pvp'=>'60',
            'imagen'=> '/img/coches/doble3.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble',
            'capacidad'=>'2',
            'n_habitacion'=>'4',
            'pvp'=>'60',
            'imagen'=> '/img/coches/triple.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble',
            'capacidad'=>'2',
            'n_habitacion'=>'5',
            'pvp'=>'60',
            'imagen'=> '/img/coches/triple2.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble',
            'capacidad'=>'2',
            'n_habitacion'=>'6',
            'pvp'=>'60',
            'imagen'=> '/img/coches/triple3.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple',
            'capacidad'=>'3',
            'n_habitacion'=>'7',
            'pvp'=>'80',
            'imagen'=> '/img/coches/triple.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple',
            'capacidad'=>'3',
            'n_habitacion'=>'8',
            'pvp'=>'80',
            'imagen'=> '/img/coches/doblet.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple',
            'capacidad'=>'3',
            'n_habitacion'=>'9',
            'pvp'=>'80',
            'imagen'=> '/img/coches/doblet2.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple',
            'capacidad'=>'3',
            'n_habitacion'=>'10',
            'pvp'=>'80',
            'imagen'=> '/img/coches/doblet3.jpg'
        ]);
    }
}