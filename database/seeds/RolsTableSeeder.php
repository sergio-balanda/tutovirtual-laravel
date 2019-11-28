<?php

use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = ['Admin','Editor','Supervisor'];

        foreach ($rols as $key => $rol){
            DB::table('rols')->insert([
                'name' => $rol,
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
