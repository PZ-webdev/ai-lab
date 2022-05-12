<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::truncate();
        Trip::upsert(
            [
                [
                    'name' => 'Kolorado', 'continent' => 'Ameryka Północna', 'period' => '7',
                    'description' => 'jest wyżynno-górzystym stanem, którego średnia wysokość nad '.
                    'poziomem morza przekracza 2000 m. Najwyższy szczyt '.
                    'Kolorado, Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią '.
                    'część stanu zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią '.
                    '– obszar Wielkich Równin.',
                    'price' => '15000', 'country_id' => '1',
                ],
                [
                    'name' => 'Alaska', 'continent' => 'Ameryka Północna', 'period' => '7',
                    'description' => 'pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to '.
                    'najwyższa część łańcucha Kordylierów z najwyższym szczytem '.
                    'kontynentu – Denali (McKinley) (6194 m n.p.m.). Długość ok. '.
                    '1000 km. Zbudowane z granitów i ze skał osadowych.',
                    'price' => '16000', 'country_id' => '1',
                ],
                [
                    'name' => 'Everest', 'continent' => 'Azja', 'period' => '7',
                    'description' => 'najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość '.
                    '8844 (pomiary chińskie) lub 8850 (pomiary amerykańskie)), '.
                    'ośmiotysięcznik położony w Himalajach Wysokich (Centralnych), '.
                    'na granicy Nepalu i Chińskiej Republiki Ludowej (Tybetu).',
                    'price' => '18000', 'country_id' => '2',
                ],
                [
                    'name' => 'Alpy', 'continent' => 'Europa', 'period' => '7',
                    'description' => 'najwyższy łańcuch górski Europy, ciągnący się łukiem od '.
                    'wybrzeża Morza Śródziemnego w okolicy Savony po dolinę '.
                    'Dunaju w okolicach Wiednia. Łańcuch ma długość około 1200 '.
                    'km, szerokość od 150 do 250 km i zajmuje powierzchnię około '.
                    '220 tys. km².',
                    'price' => '12000', 'country_id' => '3',
                ],
                [
                    'name' => 'Kilimandżaro', 'continent' => 'Afryka', 'period' => '10',
                    'description' => 'góra w Tanzanii, leżąca przy granicy z Kenią. Jest najwyższą '.
                    'górą Afryki i jedynym miejscem na kontynencie, gdzie śnieg jest '.
                    'całoroczny. Jest jednym z najwyższych samotnych masywów. W jego '.
                    'skład wchodzą trzy szczyty będące pozostałością po trzech wulkanach: '.
                    'Uhuru, Mawenzi, Shira.',
                    'price' => '19000', 'country_id' => '4',
                ],
                [
                    'name' => 'Ruwenzori', 'continent' => 'Afryka', 'period' => '10',
                    'description' => 'pasmo górskie w środkowej Afryce na granicy Demokratycznej Republiki '.
                    'Konga i Ugandy. Stanowią, obok Kilimandżaro i góry Kenia, jeden z trzech '.
                    'obszarów w Afryce gdzie występują współcześnie lodowce. Spośród sześciu '.
                    'głównych masywów w Ruwenzori najwyższa jest Góra Stanleya, a dokładniej '.
                    'jeden z jej wierzchołków nazywany Szczytem Małgorzaty (Margherita, 5109 m n.p.m.).',
                    'price' => '18000', 'country_id' => '5',
                ],
                [
                    'name' => 'Karakorum', 'continent' => 'Azja', 'period' => '14',
                    'description' => 'łańcuch górski na pograniczu Indii, Pakistanu i Chin, drugi pod względem wysokości na Ziemi. '.
                    'Powstał w orogenezie alpejskiej. Obszar gór należy do najbardziej zlodowaconych na kuli ziemskiej. '.
                    'W górach tych znajdują się największe lodowce górskie świata poza rejonami polarnymi i po lodowcu '.
                    'Fedczenki w Pamirze (długość 77 km).',
                    'price' => '15500', 'country_id' => '6',
                ],
                [
                    'name' => 'Tatry', 'continent' => 'Europa', 'period' => '5',
                    'description' => 'najwyższe pasmo w łańcuchu Karpat, również najwyższe między Alpami a Uralem i Kaukazem. '.
                    'Są częścią Łańcucha Tatrzańskiego, w Centralnych Karpatach Zachodnich. Wysokogórska część '.
                    'Tatr o glacjalnym charakterze jest unikatowa w skali Polski i zalicza się do najwyższej '.
                    'kategorii pod względem atrakcyjności.',
                    'price' => '5500', 'country_id' => '7',
                ],
                [
                    'name' => 'Sudety', 'continent' => 'Europa', 'period' => '5',
                    'description' => 'łańcuch górski na obszarze południowo-zachodniej Polski i północnych Czech, stosunkowo '.
                    'niewielki skrawek znajduje się w Niemczech; najwyższy szczyt Śnieżka – 1603 m n.p.m. '.
                    'Znajdują się w Pozaalpejskiej Europie Środkowej, są najwyższą częścią Masywu Czeskiego '.
                    'oraz najwyższymi górami Czech.',
                    'price' => '6000', 'country_id' => '7',
                ],
                [
                    'name' => 'Góry Śnieżne', 'continent' => 'Australia', 'period' => '11',
                    'description' => 'najwyższe pasmo górskie Alp Australijskich w Wielkich Górach Wododziałowych położone '.
                    'w południowo-wschodniej Australii, na terenie stanu Nowa Południowa Walia. Znajdują się '.
                    'tu najwyższe szczyty Australii z najwyższym szczytem – Górą Kościuszki (2228 m n.p.m.). '.
                    'Dużą część pasma zajmuje Park Narodowy Kościuszki.',
                    'price' => '16900', 'country_id' => '8',
                ]
            ],
            'name'
        );
    }
}
