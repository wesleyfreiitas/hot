<?php

use Illuminate\Database\Seeder;

class HospedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospedes')->insert(['nome'=>'Katusha', 'complemento'=>'Corradi', 'email'=>'kcorradi0@cbsnews.com']);
        DB::table('hospedes')->insert(['nome'=>'Bernie', 'complemento'=>'Czadla', 'email'=>'bczadla1@4shared.com']);
        DB::table('hospedes')->insert(['nome'=>'Abbie', 'complemento'=>'Breckon', 'email'=>'abreckon2@tinyurl.com']);
        DB::table('hospedes')->insert(['nome'=>'Burt', 'complemento'=>'Leser', 'email'=>'bleser3@shop-pro.jp']);
        DB::table('hospedes')->insert(['nome'=>'Nananne', 'complemento'=>'Wager', 'email'=>'nwager4@pinterest.com']);
        DB::table('hospedes')->insert(['nome'=>'Travis', 'complemento'=>'Dabling', 'email'=>'tdablingrr@dropbox.com']);
    }
}
