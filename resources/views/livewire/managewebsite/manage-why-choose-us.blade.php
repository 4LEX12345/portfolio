<div class="space-y-4">

    <!-- Title and Icon -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <x-text-input type="text" wire:model="name" class="w-full rounded border-gray-300"></x-text-input>
            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Icon</label>
            <x-text-input type="text" wire:model="icon" class="w-full rounded border-gray-300"></x-text-input>
            @error('icon') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

        </div>
    </div>

    <!-- Multiple Descriptions -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Add Descriptions</label>
        @foreach ($descriptions as $index => $desc)
        <div class="flex items-center space-x-2 mb-2">
            <x-text-input type="text" wire:model="descriptions.{{ $index }}" class="w-full rounded border-gray-300"></x-text-input>
            <button type="button" wire:click="removeDescription({{ $index }})" class="text-red-500 text-sm">Remove</button>
        </div>
        @endforeach

        <button type="button" wire:click="addDescription" class="text-cyan-500 hover:underline text-sm">+ Add</button>
    </div>

    <!-- Save Button -->
    <div>
        <button wire:click="save" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-6 rounded">
            SAVE
        </button>
    </div>
    <div class="mt-10">
        <h2 class="text-lg font-semibold mb-4 text-gray-800">Saved Services</h2>

        @forelse($why_choose_list as $service)
        <div class="mb-6 p-4 border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-center mb-3">
                <div>
                    <h3 class="text-md font-bold text-gray-700">{{ $service->name }}</h3>
                    <p class="text-sm text-gray-500">Icon: {{ $service->icon }}</p>
                </div>
                <div class="flex gap-2">
                    <button wire:click="edit({{ $service->id }})" class="text-blue-500 hover:underline text-sm">Edit</button>
                    <button wire:click="delete({{ $service->id }})" class="text-red-500 hover:underline text-sm">Delete</button>
                </div>
            </div>
            <h4 class="text-sm font-medium text-gray-600 mb-1">Descriptions:</h4>
            <div class="pl-4">
                <ul class="list-disc space-y-1 text-sm text-gray-700">
                    @foreach ($service->WhyChooseUsDetails as $detail)
                    <li>{{ $detail->description }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @empty
        <p class="text-gray-500 text-sm">No services added yet.</p>
        @endforelse
    </div>


</div>