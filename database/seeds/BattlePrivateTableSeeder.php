<?php

use Illuminate\Database\Seeder;
use App\BattlePrivate;

class BattlePrivateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        BattlePrivate::truncate();

        $faker = \Faker\Factory::create();

        
        for ($i = 0; $i < 10; $i++) {
            BattlePrivate::create([
                'name' => 'Startup'." ".$faker->word,
                'sponsor' => $faker->name,
                'seedFund' => '20M'
            ]);
        }
    }
}
