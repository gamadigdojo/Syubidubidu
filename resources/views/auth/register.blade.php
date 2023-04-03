{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="Fname" :value="__('FName')" />
            <x-text-input id="Fname" class="block mt-1 w-full" type="text" name="Fname" :value="old('Fname')" required autofocus autocomplete="Fname" />
            <x-input-error :messages="$errors->get('Fname')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div>
            <x-input-label for="Lname" :value="__('LName')" />
            <x-text-input id="Lname" class="block mt-1 w-full" type="text" name="Lname" :value="old('Lname')" required autofocus autocomplete="Lname" />
            <x-input-error :messages="$errors->get('Lname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Addres -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- DOB -->
        <div class="mt-4">
            <x-input-label for="DOB" :value="__('DOB')" />
            <x-text-input id="DOB" class="block mt-1 w-full" type="date" name="DOB" :value="old('DOB')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('DOB')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('CSS/Register.css')}}">
</head>
<body>

    <div class="title">
        <H1>Register</H1>
    </div>
    
    <section id="form-section">
            <form  action="{{ route('register') }}" method="POST" class="form" onsubmit="return validateForm()">
             @csrf
            <div class="input">
                <div class="input-box">
                    <input type="text" placeholder="First name" id="firstName" name="Fname" required>
                    <div id="error-first-name" class="error-message"></div>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last name" id="lastName" name="Lname" required>
                    <div id="error-last-name" class="error-message"></div>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Address" id="address" name="address" required>
                    <div id="error-address" class="error-message"></div>
                </div>
                <div class="input-box">
                    <input type="date" placeholder="Day of birth" id="dob" name="DOB" required>
                    <div class="error-message" id="error-dob"></div>
                </div>
                <div class="input-box">
                    <input type="email" id="email" placeholder="Email" name="email" required>
                    <div class="error-message" id="error-email"></div>
                </div>
                <div class="input-box">
                    <input type="tel" placeholder="Mobile number" id="phone" name="phone" required>
                    <div class="error-message" id="error-tel"></div>
                </div>
                <div class="input-box">
                    <input type="password" id="password" placeholder="Password" name="password" required>
                    <div class="error-message" id="error-pass"></div>
                </div>
                <div class="input-box">
                    <input type="password" id="confirmPassword" placeholder="Confirm Password" name="password_confirmation" required>
                    <div class="error-message" id="confirm-password-error"></div>
                </div>
            </div>

            <div class="submit-btn">
                <button type="submit" id="submitBtn">Register</button>
            </div>
            <br>
            <div class="link-have-acc">
                <h1>Already have account? <a href="{{ route('login') }}">click here</a> to login </h1>
            </div>
            </form>
    </section>
</body>
<script src="{{asset('JS/Register.js')}}"></script>
</html>