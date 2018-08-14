<?php

use Illuminate\Database\Seeder;
use App\BattlePublic;

class BattlePublicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BattlePublic::truncate();

        $faker = \Faker\Factory::create();

        
        for ($i = 0; $i < 10; $i++) {
            BattlePublic::create([
                'name' => 'Startup'." ".$faker->word,
                'sponsor' => $faker->name,
                'seedFund' => '20M'
            ]);
        }
    }
}
