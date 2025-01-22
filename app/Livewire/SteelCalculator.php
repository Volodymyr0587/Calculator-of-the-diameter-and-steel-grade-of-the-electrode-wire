<?php

namespace App\Livewire;

use App\Models\Steel;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SteelCalculator extends Component
{
    #[Validate('required', message: 'Будь ласка, вкажіть марку сталі')]
    public $steelGrade;
    #[Validate('required', message: 'Будь ласка, оберіть тип зварювання')]
    #[Validate('in:manual,semi-auto,automatic', message: 'Тип зварювання повинен бути одним з Ручне, Напівавтомат, Автоматичне')]
    public $weldingType;
    #[Validate('required|numeric|min:0.1', message: 'Будь ласка, вкажіть товщину матеріалу')]
    public $materialThickness;
    public $result;

    public function calculate()
    {
        $this->validate();

        // Логіка вибору дроту
        $wire = Steel::where('steel_grade', $this->steelGrade)
            ->where('welding_type', $this->weldingType)
            ->where('material_thickness', '<=', $this->materialThickness)
            ->orderBy('material_thickness', 'desc')
            ->first();

        if ($wire) {
            $this->result = [
                'wire_diameter' => $wire->wire_diameter,
                'wire_material' => $wire->wire_material,
            ];
        } else {
            $this->result = 'Немає відповідного дроту.';
        }
    }

    public function render()
    {
        return view('livewire.steel-calculator')->layout('components.layouts.app', [
            'title' => 'Калькулятор діаметра та марки сталі електродного дроту',
            'header' => 'Калькулятор діаметра та марки сталі електродного дроту',
        ]);
    }
}
