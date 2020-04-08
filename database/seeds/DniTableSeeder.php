<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dnis')->insert([
         [ 'dni'=>'C.C',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s') ]
          ,[
          'dni'=>'T.I',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')]
          ,[
            'dni'=>'P.A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]
          
          ]);
    }
}
