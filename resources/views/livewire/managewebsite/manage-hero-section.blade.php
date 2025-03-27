<div>
    <div class=" p-6 space-y-4">
        @if (session()->has('message'))
        <div class="text-green-500">{{ session('message') }}</div>
        @endif

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Header</label>
            <x-text-input type="text" wire:model="header" class="w-full rounded border-gray-300 mt-1"></x-text-input>
            @error('header') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sub Header</label>
            <x-text-input type="text" wire:model="sub_header" class="w-full rounded border-gray-300 mt-1"></x-text-input>
            @error('sub_header') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <x-primary-button wire:click="save" class="bg-primarybutton text-white px-4 py-2 ">
            Save Hero Section
        </x-primary-button>
    </div>

</div>