<?php

use Illuminate\Database\Seeder;

class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cms_paginas')->insert([
          'sitename' => 'Nome do site',
      ]);
    }
}
