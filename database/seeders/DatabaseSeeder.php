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
        Event::factory()->create(['name'=>'Evento de Prueba','description'=>'aqui se dejara una breve descripcion del evento',
                                    'image'=>'https://festibulo.files.wordpress.com/2022/08/captura-6.jpg?w=688',
                                    'spaces'=>'300','ubication'=>'Asturias',
                                    ]);
       //Event::factory(20)->create();
    //    User::factory()->create(['name' => 'Administardor', 'email' => 'Admin@admin.com'], );
    //    User::factory()->create(['name' => 'User1', 'email' => 'User1@user1.com'],);
       
    }
}
