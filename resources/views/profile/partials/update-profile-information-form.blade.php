<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="name" :value="__('First Name')" />
            <x-text-input id="name" name="Fname" type="text" class="mt-1 block w-full" :value="old('Fname', $user->Fname)"  autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div> --}}

       {{-- Last Name --}}
       {{-- <div>
            <x-input-label for="name" :value="__('Last Name')" />
            <x-text-input id="name" name="Lname" type="text" class="mt-1 block w-full" :value="old('Lname', $user->Lname)"  autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div> --}}
            
        {{-- Email --}}
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"  autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

        </div> --}}

        {{-- address --}}
        {{-- <div>
            <x-input-label for="name" :value="__('Address')" />
            <x-text-input id="name" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)"  autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div> --}}

        {{-- Phone --}}
        {{-- <div>
            <x-input-label for="name" :value="__('Phone Number')" />
            <x-text-input id="name" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div> --}}

        {{-- DOB --}}
        {{-- <div>
            <x-input-label for="name" :value="__('Date of Birth')" />
            <x-text-input id="name" name="DOB" type="date" class="mt-1 block w-full" :value="old('DOB', $user->DOB)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div> --}}



        {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button> --}}

            {{-- @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif --}}
        {{-- </div>
    </form>
</section>
