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
            'tipo'=>'Individual Basic',
            'capacidad'=>'1',
            'n_habitacion'=>'1',
            'tamano'=>'20m²',
            'pvp'=>'50',
            'imagen'=> '/img/room/indBas1.jpg'
        ]);

        Room::create([
            'tipo'=>'Individual Basic',
            'capacidad'=>'1',
            'n_habitacion'=>'2',
            'tamano'=>'20m²',
            'pvp'=>'50',
            'imagen'=> '/img/room/indBas1.jpg'
        ]);

        Room::create([
            'tipo'=>'Individual Executive',
            'capacidad'=>'1',
            'n_habitacion'=>'3',
            'tamano'=>'30m²',
            'pvp'=>'80',
            'imagen'=> '/img/room/indBas2.jpg'
        ]);

        Room::create([
            'tipo'=>'Individual Executive',
            'capacidad'=>'1',
            'n_habitacion'=>'4',
            'tamano'=>'30m²',
            'pvp'=>'80',
            'imagen'=> '/img/room/indBas2.jpg'
        ]);

        Room::create([
            'tipo'=>'Individual Deluxe',
            'capacidad'=>'1',
            'n_habitacion'=>'5',
            'tamano'=>'50m²',
            'pvp'=>'150',
            'imagen'=> '/img/room/indBas3.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble Basic',
            'capacidad'=>'2',
            'n_habitacion'=>'6',
            'tamano'=>'50m²',
            'pvp'=>'60',
            'imagen'=> '/img/room/dobBas1.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble Basic',
            'capacidad'=>'2',
            'n_habitacion'=>'7',
            'tamano'=>'50m²',
            'pvp'=>'60',
            'imagen'=> '/img/room/dobBas1.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble Experience',
            'capacidad'=>'2',
            'n_habitacion'=>'8',
            'tamano'=>'60m²',
            'pvp'=>'80',
            'imagen'=> '/img/room/dobBas2.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble Experience',
            'capacidad'=>'2',
            'n_habitacion'=>'9',
            'tamano'=>'60m²',
            'pvp'=>'80',
            'imagen'=> '/img/room/dobBas2.jpg'
        ]);

        Room::create([
            'tipo'=>'Doble Deluxe',
            'capacidad'=>'2',
            'n_habitacion'=>'10',
            'tamano'=>'80m²',
            'pvp'=>'190',
            'imagen'=> '/img/room/dobBas3.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple Basic',
            'capacidad'=>'3',
            'n_habitacion'=>'11',
            'tamano'=>'80m²',
            'pvp'=>'120',
            'imagen'=> '/img/room/tripBas1.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple Basic',
            'capacidad'=>'3',
            'n_habitacion'=>'12',
            'tamano'=>'80m²',
            'pvp'=>'120',
            'imagen'=> '/img/room/tripBas1.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple Executive',
            'capacidad'=>'3',
            'n_habitacion'=>'13',
            'tamano'=>'120m²',
            'pvp'=>'130',
            'imagen'=> '/img/room/tripBas2.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple Executive',
            'capacidad'=>'3',
            'n_habitacion'=>'14',
            'tamano'=>'120m²',
            'pvp'=>'130',
            'imagen'=> '/img/room/tripBas2.jpg'
        ]);

        Room::create([
            'tipo'=>'Triple Deluxe',
            'capacidad'=>'3',
            'n_habitacion'=>'15',
            'tamano'=>'200m²',
            'pvp'=>'280',
            'imagen'=> '/img/room/tripBas3.jpg'
        ]);
    }
}
