<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fruit et legumes (type 1)
        DB::table('ingredients')->insert([
            [
                'name' => 'ail',
                'type' => 1
            ],
            [
                'name' => 'carotte',
                'type' => 1
            ],
            [
                'name' => 'choux',
                'type' => 1
            ],
            [
                'name' => 'choux de bruxelle',
                'type' => 1
            ],
            [
                'name' => 'courge',
                'type' => 1
            ],
            [
                'name' => 'concombre',
                'type' => 1
            ],
            [
                'name' => 'epinard',
                'type' => 1
            ],
            [
                'name' => 'navet',
                'type' => 1
            ],
            [
                'name' => 'oignon',
                'type' => 1
            ],
            [
                'name' => 'poireau',
                'type' => 1
            ],
            [
                'name' => 'celeri',
                'type' => 1
            ],
            [
                'name' => 'asperge',
                'type' => 1
            ],
            [
                'name' => 'radis',
                'type' => 1
            ],
            [
                'name' => 'choux fleur',
                'type' => 1
            ],
            [
                'name' => 'concombre',
                'type' => 1
            ],
            [
                'name' => 'courgette',
                'type' => 1
            ],
            [
                'name' => 'laitue',
                'type' => 1
            ],
            [
                'name' => 'choux blanc',
                'type' => 1
            ],
            [
                'name' => 'poivron',
                'type' => 1
            ],
            [
                'name' => 'aubergine',
                'type' => 1
            ],
            [
                'name' => 'mais',
                'type' => 1
            ],
            [
                'name' => 'tomate',
                'type' => 1
            ],
            [
                'name' => 'brocoli',
                'type' => 1
            ],
            [
                'name' => 'citron',
                'type' => 1
            ],
            [
                'name' => 'kiwi',
                'type' => 1
            ],
            [
                'name' => 'mandarine',
                'type' => 1
            ],
            [
                'name' => 'orange',
                'type' => 1
            ],
            [
                'name' => 'pamplemousse',
                'type' => 1
            ],
            [
                'name' => 'poire',
                'type' => 1
            ],
            [
                'name' => 'pomme',
                'type' => 1
            ],
            [
                'name' => 'cerise',
                'type' => 1
            ],
            [
                'name' => 'fraise',
                'type' => 1
            ],
            [
                'name' => 'framboise',
                'type' => 1
            ],
            [
                'name' => 'abricot',
                'type' => 1
            ],
            [
                'name' => 'cassis',
                'type' => 1
            ],
            [
                'name' => 'groseille',
                'type' => 1
            ],
            [
                'name' => 'melon',
                'type' => 1
            ],
            [
                'name' => 'mirabelle',
                'type' => 1
            ],
            [
                'name' => 'nectarine',
                'type' => 1
            ],
            [
                'name' => 'peche',
                'type' => 1
            ],
            [
                'name' => 'prune',
                'type' => 1
            ],
            [
                'name' => 'figue',
                'type' => 1
            ],
            [
                'name' => 'mure',
                'type' => 1
            ],
            [
                'name' => 'myrtille',
                'type' => 1
            ],
            [
                'name' => 'pasteque',
                'type' => 1
            ],
            [
                'name' => 'raisin',
                'type' => 1
            ]
        ]);

        // Feculent (type 2)
        DB::table('ingredients')->insert([
            [
                'name' => 'pain',
                'type' => 2
            ],
            [
                'name' => 'flocon d\'avoine',
                'type' => 2
            ],
            [
                'name' => 'riz',
                'type' => 2
            ],
            [
                'name' => 'lentille',
                'type' => 2
            ],
            [
                'name' => 'pates',
                'type' => 2
            ],
            [
                'name' => 'semoule',
                'type' => 2
            ],
            [
                'name' => 'flageolet',
                'type' => 2
            ],
            [
                'name' => 'pois chiche',
                'type' => 2
            ],
            [
                'name' => 'feve',
                'type' => 2
            ],
            [
                'name' => 'millet',
                'type' => 2
            ],
            [
                'name' => 'pommes de terre',
                'type' => 2
            ],
            [
                'name' => 'quinoa',
                'type' => 2
            ],
            [
                'name' => 'patate douce',
                'type' => 2
            ],
            [
                'name' => 'haricot',
                'type' => 2
            ],
            [
                'name' => 'petit pois',
                'type' => 2
            ],
            [
                'name' => 'blé',
                'type' => 1
            ],
        ]);

        // Proteines (type 3)
        DB::table('ingredients')->insert([
            [
                'name' => 'oeuf',
                'type' => 3
            ],
            [
                'name' => 'boeuf',
                'type' => 3
            ],
            [
                'name' => 'mouton',
                'type' => 3
            ],
            [
                'name' => 'agneau',
                'type' => 3
            ],
            [
                'name' => 'cheval',
                'type' => 3
            ],
            [
                'name' => 'porc',
                'type' => 3
            ],
            [
                'name' => 'veau',
                'type' => 3
            ],
            [
                'name' => 'chevreuil',
                'type' => 3
            ],
            [
                'name' => 'sanglier',
                'type' => 3
            ],
            [
                'name' => 'poulet',
                'type' => 3
            ],
            [
                'name' => 'canard',
                'type' => 3
            ],
            [
                'name' => 'dinde',
                'type' => 3
            ],
            [
                'name' => 'dorade',
                'type' => 3
            ],
            [
                'name' => 'colin',
                'type' => 3
            ],
            [
                'name' => 'cabillaud',
                'type' => 3
            ],
            [
                'name' => 'sole',
                'type' => 3
            ],
            [
                'name' => 'lieu',
                'type' => 3
            ],
            [
                'name' => 'bar',
                'type' => 3
            ],
            [
                'name' => 'maquereau',
                'type' => 3
            ],
            [
                'name' => 'merlan',
                'type' => 3
            ],
            [
                'name' => 'sardine',
                'type' => 3
            ],
            [
                'name' => 'truite',
                'type' => 3
            ],
            [
                'name' => 'saumon',
                'type' => 3
            ],
            [
                'name' => 'thon',
                'type' => 3
            ],
        ]);

        // Milk and milk base (type 4)
        DB::table('ingredients')->insert([
            [
                'name' => 'lait',
                'type' => 4
            ],
            [
                'name' => 'creme',
                'type' => 4
            ],
            [
                'name' => 'beurre',
                'type' => 4
            ],
            [
                'name' => 'yaourt',
                'type' => 4
            ],
            [
                'name' => 'fromage',
                'type' => 4
            ],
        ]);

        // Lipides (type 5)
        DB::table('ingredients')->insert([
            [
                'name' => 'huile d\'olive',
                'type' => 4
            ],
            [
                'name' => 'huile vegetale',
                'type' => 4
            ],
        ]);

        // Glucides (type 6)
        DB::table('ingredients')->insert([
            [
                'name' => 'sucre',
                'type' => 6
            ],
        ]);

        // Seafood (type 7)
        DB::table('ingredients')->insert([
            [
                'name' => 'crevette',
                'type' => 7
            ],
            [
                'name' => 'crabe',
                'type' => 7
            ],
            [
                'name' => 'ecreuvisse',
                'type' => 7
            ],
            [
                'name' => 'langoustine',
                'type' => 7
            ],
            [
                'name' => 'homard',
                'type' => 7
            ],
            [
                'name' => 'bullot',
                'type' => 7
            ],
            [
                'name' => 'huitre',
                'type' => 7
            ],
            [
                'name' => 'palourde',
                'type' => 7
            ],
            [
                'name' => 'calamar',
                'type' => 7
            ],
            [
                'name' => 'moule',
                'type' => 7
            ],
            [
                'name' => 'poulpe',
                'type' => 7
            ],
        ]);

        // Spices (type 8)
        DB::table('ingredients')->insert([
            [
                'name' => 'anis etoile',
                'type' => 4
            ],
            [
                'name' => 'poivre rose',
                'type' => 4
            ],
            [
                'name' => 'cardamome',
                'type' => 4
            ],
            [
                'name' => 'coriandre',
                'type' => 4
            ],
            [
                'name' => 'curcuma',
                'type' => 4
            ],
            [
                'name' => 'gingembre',
                'type' => 4
            ],
            [
                'name' => 'noix de muscade',
                'type' => 4
            ],
            [
                'name' => 'paprika',
                'type' => 4
            ],
            [
                'name' => 'piment',
                'type' => 4
            ],
            [
                'name' => 'poivre de sichuan',
                'type' => 4
            ],
            [
                'name' => 'safran',
                'type' => 4
            ],
            [
                'name' => 'canelle',
                'type' => 4
            ],

        ]);
    }
}
