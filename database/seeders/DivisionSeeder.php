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
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'division_name' => 'Geosciences Division',
                'division_code' => 'GD',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'division_name' => 'Mine Safety, Environment and Social Development Division',
                'division_code' => 'MSESDD',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'division_name' => 'Mine Management Division',
                'division_code' => 'MMD',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], [
                'division_name' => 'Finance and Administrative Division',
                'division_code' => 'FAD',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        ];

        \App\Models\Division::insert($division_data);
    }
}
