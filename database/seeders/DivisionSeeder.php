<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division_data = [
            [
                'division_name' => 'Office of the Regional Director',
                'division_code' => 'ORD',
            ], [
                'division_name' => 'Geosciences Division',
                'division_code' => 'GD',
            ], [
                'division_name' => 'Mine Safety, Environment and Social Development Division',
                'division_code' => 'MSESDD',
            ], [
                'division_name' => 'Mine Management Division',
                'division_code' => 'MMD',
            ], [
                'division_name' => 'Finance and Administrative Division',
                'division_code' => 'FAD',
            ]
        ];

        \App\Models\Division::insert($division_data);
    }
}
