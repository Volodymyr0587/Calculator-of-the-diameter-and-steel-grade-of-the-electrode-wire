<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold text-center mb-8">Калькулятор електродного дроту</h1>

    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Марка сталі</label>
            <input
                type="text"
                wire:model="steelGrade"
                placeholder="Наприклад: S235"
                class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
            @error('steelGrade') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Тип зварювання</label>
            <select
                wire:model="weldingType"
                class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            >
                <option value="manual">Ручне</option>
                <option value="semi-auto">Напівавтомат</option>
                <option value="automatic">Автоматичне</option>
            </select>
            @error('weldingType') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Товщина матеріалу (мм)</label>
            <input
                type="number"
                step="0.1"
                wire:model="materialThickness"
                placeholder="Наприклад: 5.0"
                class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
            @error('materialThickness') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-center">
            <button
                wire:click="calculate"
                class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            >
                Розрахувати
            </button>
        </div>
    </div>

    @if ($result)
        <div class="bg-gray-50 mt-6 p-4 rounded-lg shadow-md max-w-lg mx-auto">
            @if (is_array($result))
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Рекомендований дріт:</h3>
                <p class="text-gray-600"><span class="font-medium">Діаметр:</span> {{ $result['wire_diameter'] }} мм</p>
                <p class="text-gray-600"><span class="font-medium">Матеріал:</span> {{ $result['wire_material'] }}</p>
            @else
                <p class="text-gray-600">{{ $result }}</p>
            @endif
        </div>
    @endif
</div>

