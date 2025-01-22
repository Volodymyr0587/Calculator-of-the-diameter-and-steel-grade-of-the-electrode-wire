<?php

namespace Database\Seeders;

use App\Models\Steel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SteelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ручне дугове зварювання (Manual)
        Steel::create([
            'steel_grade' => 'S235',
            'welding_type' => 'manual',
            'material_thickness' => 3.0,
            'wire_diameter' => 2.0,
            'wire_material' => 'E6013',
        ]);

        Steel::create([
            'steel_grade' => 'S235',
            'welding_type' => 'manual',
            'material_thickness' => 6.0,
            'wire_diameter' => 3.2,
            'wire_material' => 'E6013',
        ]);

        Steel::create([
            'steel_grade' => 'S355',
            'welding_type' => 'manual',
            'material_thickness' => 8.0,
            'wire_diameter' => 4.0,
            'wire_material' => 'E7018',
        ]);

        Steel::create([
            'steel_grade' => 'S355',
            'welding_type' => 'manual',
            'material_thickness' => 12.0,
            'wire_diameter' => 5.0,
            'wire_material' => 'E7018',
        ]);

        // Напівавтоматичне зварювання (Semi-auto)
        Steel::create([
            'steel_grade' => 'S235',
            'welding_type' => 'semi-auto',
            'material_thickness' => 1.0,
            'wire_diameter' => 0.8,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'S235',
            'welding_type' => 'semi-auto',
            'material_thickness' => 4.0,
            'wire_diameter' => 1.0,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'S355',
            'welding_type' => 'semi-auto',
            'material_thickness' => 8.0,
            'wire_diameter' => 1.2,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'S355',
            'welding_type' => 'semi-auto',
            'material_thickness' => 12.0,
            'wire_diameter' => 1.6,
            'wire_material' => 'ER70S-6',
        ]);

        // Автоматичне зварювання (Automatic)
        Steel::create([
            'steel_grade' => 'S235',
            'welding_type' => 'automatic',
            'material_thickness' => 3.0,
            'wire_diameter' => 1.2,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'S235',
            'welding_type' => 'automatic',
            'material_thickness' => 8.0,
            'wire_diameter' => 1.6,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'S355',
            'welding_type' => 'automatic',
            'material_thickness' => 10.0,
            'wire_diameter' => 2.0,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'S355',
            'welding_type' => 'automatic',
            'material_thickness' => 15.0,
            'wire_diameter' => 2.4,
            'wire_material' => 'ER70S-6',
        ]);

        // Додаткові матеріали
        Steel::create([
            'steel_grade' => 'A36',
            'welding_type' => 'manual',
            'material_thickness' => 5.0,
            'wire_diameter' => 3.2,
            'wire_material' => 'E6013',
        ]);

        Steel::create([
            'steel_grade' => 'A36',
            'welding_type' => 'semi-auto',
            'material_thickness' => 6.0,
            'wire_diameter' => 1.0,
            'wire_material' => 'ER70S-6',
        ]);

        Steel::create([
            'steel_grade' => 'A36',
            'welding_type' => 'automatic',
            'material_thickness' => 12.0,
            'wire_diameter' => 1.6,
            'wire_material' => 'ER70S-6',
        ]);
    }
}
