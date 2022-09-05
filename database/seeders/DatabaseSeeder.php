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
            'image' => 'https://produccionesbaltimore.es/wp-content/uploads/2022/03/CARTEL-Boombastic-Benidorm-1097x600.png',
            'spaces' => '300', 'location' => 'España/Asturias',
            'date' => '2022-10-01',
        ]);
        Event::factory()->create([
            'name' => 'Monolink', 'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
            'image' => 'https://pbs.twimg.com/media/FNlqB2aVkAI_og9?format=jpg&name=large',
            'spaces' => '80', 'location' => 'Mallorca',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Primavera', 'description' => 'dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem ',
            'image' => 'https://assets-img.primaverasound.com/2500x0/psweb/wq46w0d8hn9ilumo2kak_1657556382451.jpg',
            'spaces' => '100', 'location' => 'Jerez/España',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Nirvana', 'description' => '“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstance',
            'image' => 'https://i.etsystatic.com/22453392/r/il/4e3db8/3178301500/il_570xN.3178301500_b8lb.jpg',
            'spaces' => '30', 'location' => 'Gent/Belgica',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Minimal-Tech', 'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit cras, per tristique conubia leo iaculis',
            'image' => 'https://static.roland.com/assets/images/products/gallery/rc_sdz075_minimal_techno_gal.jpg',
            'spaces' => '90', 'location' => 'Madrid/España',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Cercle', 'description' => 'Leo rhoncus pulvinar nisl senectus metus sociis libero dui, phasellus condimentum placerat tincidunt lacinia dapibus vestibulum torquent ut, lectus sociosqu',
            'image' => 'https://yt3.ggpht.com/ytc/AMLnZu-4Rv_pQUrc06e5EKJS4TuruJOVGd0oRnf9gN7d=s900-c-k-c0x00ffffff-no-rj',
            'spaces' => '75', 'location' => 'Santiago/Chile',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'West-Side', 'description' => ' Condimentum etiam magnis accumsan integer fermentum nostra semper a lobortis, metus gravida ligula fringilla inceptos erat suspendisse.',
            'image' => 'https://soundtrackfest.com/wp-content/uploads/2018/10/WestSideStory-Bilbao2018-Main.jpg',
            'spaces' => '250', 'location' => 'Singapur',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Green Day', 'description' => ' Condimentum etiam magnis accumsan integer fermentum nostra semper a lobortis, metus gravida ligula fringil',
            'image' => 'https://greenday.fm/wp-content/uploads/2020/09/02-050608-2017.jpg',
            'spaces' => '300', 'location' => 'Alemania/Munchen',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'TomorrowLand', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://yt3.ggpht.com/5C8e_VL2fvl8tEDcnW5K_TsocwiNxbhuXCpdV2t8DhJO-dz8cWIYq6nT3Mf4F9yBnQmIWZUe=s900-c-k-c0x00ffffff-no-rj',
            'spaces' => '999', 'location' => 'Belgica',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'Amsterdam Lights', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://i.ytimg.com/vi/aX2t-Tcvgpc/maxresdefault.jpg',
            'spaces' => '999', 'location' => 'Holanda',
            'date' => '2022-10-01'

        ]);
        Event::factory()->create([
            'name' => 'AquaSella', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://aquasella.com/wp-content/uploads/2022/04/aqs2022_1080x1350-2.png',
            'spaces' => '999', 'location' => 'Arriondas/Cangas de Onís',
            'date' => '2022-09-04',

        ]);
        Event::factory()->create([
            'name' => 'Barcelona-Rock-2022', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://cdn-az.allevents.in/events9/banners/e25a6d136e34c54eaecc57b5338bb99aea7ab5c272bebaa0160d727f7b31a5e1-rimg-w722-h960-gmir.jpg?v=1656589553',
            'spaces' => '40', 'location' => 'Parc de Can Zam de Santa Coloma de Gramanet-Barcelona',
            'date' =>  '2022-09-04'

        ]);
        Event::factory()->create([
            'name' => 'Resurrection Fest 2022', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://www.resurrectionfest.es/media/Resurrection-Fest-2014-Cartel-5-ESP-scaled.jpg',
            'spaces' => '999', 'location' => 'Lugo-España',
            'date' =>  '2022-09-04'

        ]);
        Event::factory()->create([
            'name' => 'Perfest 2022 ', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://www.dodmagazine.es/wp-content/uploads/2022/07/perfest-2022.jpg ',
            'spaces' => '250', 'location' => 'Recinto Ferial Esquivias Toledo ',
            'date' =>  '2022-09-04'

        ]);
        Event::factory()->create([
            'name' => 'San Destival 2022', 'description' => 'aqui se dejara una breve descripcion del evento',
            'image' => 'https://www.dodmagazine.es/wp-content/uploads/2021/12/sansan-festival-2022-cartel.jpg ',
            'spaces' => '999', 'location' => 'Recinto de Festivales de Benicàssim
            ',
            'date' =>  '2022-09-04'

        ]);




        //Event::factory(20)->create();
        //    User::factory()->create(['name' => 'Administardor', 'email' => 'Admin@admin.com'], );
        //    User::factory()->create(['name' => 'User1', 'email' => 'User1@user1.com'],);

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        // Event::factory()
        //         ->has(User::factory()->count(5))
        //         ->create();

        // User::factory()
        //         ->has(Event::factory()->count(5))  
        //         ->create(); 
    }
}
