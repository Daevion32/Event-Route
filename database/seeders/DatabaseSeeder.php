<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\User;
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
        Event::factory()->create([
            'name' => 'Boombastic', 'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old',
            'image' => 'https://festibulo.files.wordpress.com/2022/08/captura-6.jpg?w=688',
            'spaces' => '300', 'location' => 'España/Asturias',
            'date'=> '2022-10-01',
        ]);
        Event::factory()->create([
            'name' => 'Monolink', 'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
            'image' => 'https://pbs.twimg.com/media/FNlqB2aVkAI_og9?format=jpg&name=large',
            'spaces' => '80', 'location' => 'Mallorca',
            'date'=> '2022-10-01'
            
        ]);
        Event::factory()->create([
            'name' => 'Primavera', 'description' => 'dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem ',
            'image' => 'https://etheriamagazine.com/wp-content/uploads/2019/02/Festivales-primavera-trompetera.jpg',
            'spaces' => '100', 'location' => 'Jerez/España',
            'date'=> '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Nirvana', 'description' => '“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstance',
            'image' => 'https://teatromadrid.com/wp-content/uploads/2020/01/teatro-madrid-nirvana-unplegged-cartel.jpg',
            'spaces' => '30', 'location' => 'Gent/Belgica',
            'date'=> '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Minimal-Tech', 'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit cras, per tristique conubia leo iaculis',
            'image' => 'https://static.roland.com/assets/images/products/gallery/rc_sdz075_minimal_techno_gal.jpg',
            'spaces' => '90', 'location' => 'Madrid/España',
            'date'=> '2022-10-01'
            
        ]);
        Event::factory()->create([
            'name' => 'Cercle', 'description' => 'Leo rhoncus pulvinar nisl senectus metus sociis libero dui, phasellus condimentum placerat tincidunt lacinia dapibus vestibulum torquent ut, lectus sociosqu',
            'image' => 'https://yt3.ggpht.com/ytc/AMLnZu-4Rv_pQUrc06e5EKJS4TuruJOVGd0oRnf9gN7d=s900-c-k-c0x00ffffff-no-rj',
            'spaces' => '75', 'location' => 'Santiago/Chile',
            'date'=> '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'West-Side', 'description' => ' Condimentum etiam magnis accumsan integer fermentum nostra semper a lobortis, metus gravida ligula fringilla inceptos erat suspendisse.',
            'image' => 'https://w7.pngwing.com/pngs/376/997/png-transparent-westside-connection-west-coast-hip-hop-gangsta-rap-g-funk-hip-hop-music-bow-down-monochrome-rapper-black-and-white.png',
            'spaces' => '250', 'location' => 'Singapur',
            'date'=> '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Green Day', 'description' => ' Condimentum etiam magnis accumsan integer fermentum nostra semper a lobortis, metus gravida ligula fringil',
            'image' => 'https://static.posters.cz/image/750/posters/green-day-dookie-i108319.jpg',
            'spaces' => '300', 'location' => 'Alemania/Munchen',
            'date'=> '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Tomorrow Land', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://i.pinimg.com/originals/56/fb/30/56fb306e2b834858c432604cbb2324fd.jpg',
            'spaces' => '999', 'location' => 'Belgica',
            'date'=> '2022-10-01'
            
        ]);
        Event::factory()->create([
            'name' => 'AmsterdamLights', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG7XzHTB3gCplUxNxrrh83IcDjwEBdyMVlyQ&usqp=CAU',
            'spaces' => '999', 'location' => 'Holanda',
            'date'=> '2022-10-01'
            
        ]);
         
         


        //Event::factory(20)->create();
        //    User::factory()->create(['name' => 'Administardor', 'email' => 'Admin@admin.com'], );
        //    User::factory()->create(['name' => 'User1', 'email' => 'User1@user1.com'],);

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        Event::factory()
                ->has(User::factory()->count(5))
                ->create();

        User::factory()
                ->has(Event::factory()->count(5))  
                ->create(); 
    }           
}
