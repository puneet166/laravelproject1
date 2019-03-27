<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
        	[
            'name' => 'Admin',
            'description' => '',
        	]);
             DB::table('roles')->insert(
            [
            'name' => 'Moderator',
            'description' => '',
            ]);
    
        	 DB::table('roles')->insert(
            
            [
            'name' => 'General User',
            'description' => '',
        	]);
        	 DB::table('roles')->insert(
            [

            'name' => 'Employee',
            'description' => '',
        	]);
    
    }                                                                                                                                                                                                                                                                           
}
