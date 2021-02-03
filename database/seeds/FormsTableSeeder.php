<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('forms')->insert([
            'label' => 'N° de ligne',
            'codeCreance' => 'inwi2002'
        ]);

        DB::table('forms')->insert([
            'label' => 'Code de paiement',
            'codeCreance' => 'inwi2002'
        ]);
    }
}
