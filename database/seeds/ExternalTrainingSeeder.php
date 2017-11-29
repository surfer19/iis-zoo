<?php

use App\TrainingExternal;
use Illuminate\Database\Seeder;

class ExternalTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newExtTraining = new TrainingExternal();
        $newExtTraining->company_name = 'Exponea';
        $newExtTraining->company_address = 'Bottova 5, Bratislava';
        $newExtTraining->save();

    }
}
