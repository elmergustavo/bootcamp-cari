<form wire:submit.prevent="submit" class="w-[400px] mx-auto py-16">

    @if (session()->has('message'))
        <div class="mb-3 inline-flex w-full items-center rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
            role="alert">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                        clip-rule="evenodd" />
                </svg>
            </span>
            {{ session('message') }}
        </div>
    @endif

    <div class="flex gap-4 mb-4">
        <label>
            <input type="radio" value="customer" name="role" wire:model="role">
            Customer
        </label>
        <label>
            <input type="radio" value="vendor" name="role" wire:model="role">
            Vendor
        </label>
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="first_name"
            class="w-full border @error('first_name') border-red-500 @enderror" placeholder="First Name">
        @error('first_name')
            <div class="relative px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                <span class="absolute inset-y-0 left-0 flex items-center ml-4">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
                <p class="ml-6">{{ $message }}</p>
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="last_name"
            class="w-full border @error('first_name') border-red-500 @enderror" placeholder="Last Name">
        @error('last_name')
            <div class="relative px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                <span class="absolute inset-y-0 left-0 flex items-center ml-4">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
                <p class="ml-6">{{ $message }}</p>
            </div> </span>
        @enderror
    </div>

    <div class="mb-4">
        <input type="email" wire:model.debounce.500ms="email"
            class="w-full border @error('email') border-red-500 @enderror" placeholder="Email">
        @error('email')
            <div class="relative px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                <span class="absolute inset-y-0 left-0 flex items-center ml-4">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
                <p class="ml-6">{{ $message }}</p>
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <input type="password" wire:model.debounce.500ms="password"
            class="w-full border @error('password') border-red-500 @enderror" placeholder="Password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="company_name"
                class="w-full border @error('company_name') border-red-500 @enderror" placeholder="Company Name">
            @error('company_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="vat_number"
                class="w-full border @error('vat_number') border-red-500 @enderror" placeholder="VAT Number">
            @error('vat_number')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    @endif

    <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Register</button>
</form>
