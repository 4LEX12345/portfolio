<div>
    @if (session()->has('message'))
    <div class="text-green-500">{{ session('message') }}</div>
    @endif
    <div class="">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tech Stack</label>
            <x-text-input type="text" wire:model="technology" class="w-full rounded border-gray-300 mt-1"></x-text-input>
            @error('technology') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <x-primary-button wire:click="save" class="bg-primarybutton text-white px-4 py-2 mt-4">
            Save Technology
        </x-primary-button>
    </div>

    <div class="mt-5">
        <h3 class="block text-sm font-medium text-gray-700 mb-1">Saved Technologies</h3>
        <ul class="space-y-2 py-5">
            @forelse ($technologies as $tech)
            <li class="flex justify-between items-center bg-white shadow p-3 rounded">
                <span>{{ $tech->technology }}</span>
                <button wire:click="delete({{ $tech->id }})" class="text-red-500 hover:underline text-sm">Delete</button>
            </li>
            @empty
            <div class="col-span-2 text-center text-gray-400">
                🚀 No tech stack yet. Start by adding one above!
            </div>
            @endforelse
        </ul>
    </div>
</div>