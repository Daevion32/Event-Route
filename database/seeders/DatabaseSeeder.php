<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Event::factory()->create(['name'=>'Mi evento de prueba','description'=> 'Evento fijado de prueba', 'image' => '', 'spaces'=>'15' , 'location'=> 'Direccion', 'date' => '1200-23-02', 'musical_genre' => 'Tipo musica']);
        Event::factory(20)->create();
    }
    //User::factory()→create([’name’ ⇒ ‘Admin’, ‘email’ ⇒ ‘admin@admin.com’, ‘password’ ⇒’micontraseña’]);

}

