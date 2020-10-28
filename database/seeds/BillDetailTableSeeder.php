<?php

use Illuminate\Database\Seeder;

class BillDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BillDetail::class,  5)->create();
    }
}
