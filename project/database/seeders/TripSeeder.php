<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'id_country' => 1,
            'name' => 'Wycieczka Górska',
            'continent' => 'Europa',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae aut quasi quia obcaecati, numquam dolore magni veniam natus reiciendis necessitatibus non debitis, libero voluptatibus repellat facilis eaque. Quisquam ipsum quibusdam doloribus iusto impedit, hic non rerum nihil accusamus repellat itaque eius sunt deleniti rem distinctio voluptates blanditiis consectetur delectus atque. Vitae sit numquam non eos aspernatur. Fugiat nisi quisquam suscipit, officiis aperiam modi aliquid, asperiores architecto ab optio dolores velit. Sapiente expedita nam accusamus molestiae optio sint consequuntur delectus atque quaerat maxime, illum blanditiis deserunt unde quod. Obcaecati natus architecto labore esse distinctio culpa temporibus consectetur iusto? Nisi, expedita.',
            'price' => 999.99,
        ]);

        Trip::create([
            'id_country' => 1,
            'name' => 'Morze Bałtyckie',
            'continent' => 'Europa',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae aut quasi quia obcaecati, numquam dolore magni veniam natus reiciendis necessitatibus non debitis, libero voluptatibus repellat facilis eaque. Quisquam ipsum quibusdam doloribus iusto impedit, hic non rerum nihil accusamus repellat itaque eius sunt deleniti rem distinctio voluptates blanditiis consectetur delectus atque. Vitae sit numquam non eos aspernatur. Fugiat nisi quisquam suscipit, officiis aperiam modi aliquid, asperiores architecto ab optio dolores velit. Sapiente expedita nam accusamus molestiae optio sint consequuntur delectus atque quaerat maxime, illum blanditiis deserunt unde quod. Obcaecati natus architecto labore esse distinctio culpa temporibus consectetur iusto? Nisi, expedita.',
            'price' => 1200,
        ]);

        Trip::create([
            'id_country' => 4,
            'name' => 'Gorąca Plaża',
            'continent' => 'Europa',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae aut quasi quia obcaecati, numquam dolore magni veniam natus reiciendis necessitatibus non debitis, libero voluptatibus repellat facilis eaque. Quisquam ipsum quibusdam doloribus iusto impedit, hic non rerum nihil accusamus repellat itaque eius sunt deleniti rem distinctio voluptates blanditiis consectetur delectus atque. Vitae sit numquam non eos aspernatur. Fugiat nisi quisquam suscipit, officiis aperiam modi aliquid, asperiores architecto ab optio dolores velit. Sapiente expedita nam accusamus molestiae optio sint consequuntur delectus atque quaerat maxime, illum blanditiis deserunt unde quod. Obcaecati natus architecto labore esse distinctio culpa temporibus consectetur iusto? Nisi, expedita.',
            'price' => 2100.50,
        ]);

        Trip::create([
            'id_country' => 6,
            'name' => 'Nowy York',
            'continent' => 'Europa',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae aut quasi quia obcaecati, numquam dolore magni veniam natus reiciendis necessitatibus non debitis, libero voluptatibus repellat facilis eaque. Quisquam ipsum quibusdam doloribus iusto impedit, hic non rerum nihil accusamus repellat itaque eius sunt deleniti rem distinctio voluptates blanditiis consectetur delectus atque. Vitae sit numquam non eos aspernatur. Fugiat nisi quisquam suscipit, officiis aperiam modi aliquid, asperiores architecto ab optio dolores velit. Sapiente expedita nam accusamus molestiae optio sint consequuntur delectus atque quaerat maxime, illum blanditiis deserunt unde quod. Obcaecati natus architecto labore esse distinctio culpa temporibus consectetur iusto? Nisi, expedita.',
            'price' => 2500.50,
        ]);

        Trip::create([
            'id_country' => 2,
            'name' => 'Brama Brandernburska',
            'continent' => 'Europa',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae aut quasi quia obcaecati, numquam dolore magni veniam natus reiciendis necessitatibus non debitis, libero voluptatibus repellat facilis eaque. Quisquam ipsum quibusdam doloribus iusto impedit, hic non rerum nihil accusamus repellat itaque eius sunt deleniti rem distinctio voluptates blanditiis consectetur delectus atque. Vitae sit numquam non eos aspernatur. Fugiat nisi quisquam suscipit, officiis aperiam modi aliquid, asperiores architecto ab optio dolores velit. Sapiente expedita nam accusamus molestiae optio sint consequuntur delectus atque quaerat maxime, illum blanditiis deserunt unde quod. Obcaecati natus architecto labore esse distinctio culpa temporibus consectetur iusto? Nisi, expedita.',
            'price' => 1000,
        ]);

        Trip::create([
            'id_country' => 3,
            'name' => 'Ciepła Holandia',
            'continent' => 'Europa',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae aut quasi quia obcaecati, numquam dolore magni veniam natus reiciendis necessitatibus non debitis, libero voluptatibus repellat facilis eaque. Quisquam ipsum quibusdam doloribus iusto impedit, hic non rerum nihil accusamus repellat itaque eius sunt deleniti rem distinctio voluptates blanditiis consectetur delectus atque. Vitae sit numquam non eos aspernatur. Fugiat nisi quisquam suscipit, officiis aperiam modi aliquid, asperiores architecto ab optio dolores velit. Sapiente expedita nam accusamus molestiae optio sint consequuntur delectus atque quaerat maxime, illum blanditiis deserunt unde quod. Obcaecati natus architecto labore esse distinctio culpa temporibus consectetur iusto? Nisi, expedita.',
            'price' => 1200,
        ]);

        Trip::create([
            'id_country' => 6,
            'name' => 'Kolorado',
            'continent' => 'Ameryka Północna',
            'description' => 'Jest wyżynno-górzystym stanem, którego średnia wysokość nad
            poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado,
            Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią część stanu
            zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią – obszar
            Wielkich Równin.',
            'price' => 1500,
        ]);

        Trip::create([
            'id_country' => 6,
            'name' => 'Alaska',
            'continent' => 'Ameryka Północna',
            'description' => 'Pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to
            najwyższa część łańcucha Kordylierów z najwyższym szczytem
            kontynentu – Denali (McKinley) (6194 m n.p.m.). Długość ok. 1000
            km. Zbudowane z granitów i ze skał osadowych.',
            'price' => 1800,
        ]);

        Trip::create([
            'id_country' => 5,
            'name' => 'Everest',
            'continent' => 'Azja',
            'description' => 'Najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość
            8844 (pomiary chińskie) lub 8850 (pomiary amerykańskie)),
            ośmiotysięcznik położony w Himalajach Wysokich (Centralnych), na
            granicy Nepalu i Chińskiej Republiki Ludowej (Tybetu).',
            'price' => 1800,
        ]);

        Trip::create([
            'id_country' => 7,
            'name' => 'Alpy',
            'continent' => 'Europa',
            'description' => 'Najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża
            Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach
            Wiednia. Łańcuch ma długość około 1200 km, szerokość od 150 do
            250 km i zajmuje powierzchnię około 220 tys. km².',
            'price' => 1800,
        ]);
    }
}
