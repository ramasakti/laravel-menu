<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role' => 'Admin'],
            ['role' => 'Kepala Sekolah'],
            ['role' => 'Wali Murid'],
        ];
        DB::table('role')->insert($data);
    }
}
