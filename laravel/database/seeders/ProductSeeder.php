<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        ['name' => 'c',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/19/C_Logo.png'],
        ['name' => 'cpp',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/306px-ISO_C%2B%2B_Logo.svg.png'],
        ['name' => 'csharp',
        'image' => 'https://seeklogo.com/images/C/c-sharp-c-logo-02F17714BA-seeklogo.com.png'],
        ['name' => 'python',
        'image' => 'img/python-logo.png'],
        ['name' => 'java',
        'image' => 'img/java-logo.png']
        ]);
    }
}
