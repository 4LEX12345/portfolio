<div x-data="{ uri_type: @entangle('uri_type') }" class=" min-h-screen " id="form-section">
    <div class="max-w-9xl mx-auto space-y-8">

        <div class=" p-6 space-y-6">
            @if (session()->has('message'))
            <div class="text-green-500 text-sm">{{ session('message') }}</div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Service Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Service Name</label>
                    <x-text-input type="text" wire:model="name" class="w-full rounded border-gray-300 mt-1"></x-text-input>
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <x-text-area type="text" wire:model="description" class="w-full rounded border-gray-300 mt-1"></x-text-area>
                    @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Technology Select -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Technology</label>
                <select wire:model="uri_type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-primarybutton focus:border-primarybutton">
                    <option value="">-- Choose Technology --</option>
                    <option value="image">Image</option>
                    <option value="lottie">Lottie</option>
                </select>
                @error('uri_type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Image Upload -->
            <div x-show="uri_type == 'image'">
                <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                <div class="relative flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-primarybutton transition">
                    <input type="file" wire:model="uri" class="absolute inset-0 opacity-0 cursor-pointer" />
                    <div class="flex flex-col items-center">
                        <svg class="w-8 h-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 01.88-2.35l7.12-8.3a4 4 0 015.88 0l7.12 8.3A4 4 0 0121 15H3z" />
                        </svg>
                        <span class="text-gray-600 text-sm">Click to upload image</span>
                    </div>
                </div>
                @error('uri') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                @if ($uri)
                <div class="mt-3">
                    <p class="text-sm text-gray-600 mb-1">Preview:</p>
                    @if (is_object($uri))
                    <img src="{{ $uri->temporaryUrl() }}" alt="Image Preview" class="w-40 h-40 object-cover rounded-md border border-gray-300" />
                    @else
                    <img src="{{ asset('storage/' . $uri) }}" alt="Image Preview" class="w-40 h-40 object-cover rounded-md border border-gray-300" />
                    @endif
                </div>
                @endif
            </div>

            <!-- Lottie Link -->
            <div x-show="uri_type == 'lottie'">
                <label class="block text-sm font-medium text-gray-700 mb-1">Link <span class="text-xs text-gray-400">(e.g https://lottie.host/...)</span></label>
                <x-text-input type="text" wire:model="other_uri" class="w-full rounded border-gray-300 mt-1"></x-text-input>
                @error('other_uri') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <x-primary-button wire:click="save" class="bg-primarybutton hover:bg-primarybutton/90 transition text-white px-4 py-2 rounded-md shadow">
                {{ $is_edit ? 'Update Service' : 'Save Service'}}
            </x-primary-button>
        </div>

        <!-- Services List -->
        <div class="px-6 py-2">
            <h2 class="block text-sm font-medium text-gray-700 mb-5">Your Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @forelse($services as $service)
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition border">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-md font-bold text-gray-800">{{ $service->name }}</h3>
                        <span class="text-xs text-gray-500 uppercase">{{ $service->uri_type }}</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">{{ $service->description }}</p>
                    <div class="flex items-center gap-4">
                        <button wire:click="edit({{ $service->id }})" onclick="location.href='#form-section';" class="flex items-center gap-1 text-blue-500 hover:underline text-sm">
                            ✏️ Edit
                        </button>
                        <button wire:click="delete({{ $service->id }})" class="flex items-center gap-1 text-red-500 hover:underline text-sm">
                            🗑️ Delete
                        </button>
                    </div>
                </div>
                @empty
                <div class="col-span-2 text-center text-gray-400">
                    🚀 No services yet. Start by adding one above!
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>