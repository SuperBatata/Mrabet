<?php

use App\voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        voyage::create([
            'nomVoyage' => 'ELISSA',
            'nomBateau' => 'CARTHAGE',
            'portDeChargement' =>  'AQ',
            'portDeDechargement' => 'AQ' ,
            'datechargement' => date_format('10/05/1384',"DD/MM/yyyy"),
            'datedechargement' => date_format('10/05/1384',"DD/MM/yyyy"),
            'etat'=> '1',
        ]);
    }
}
