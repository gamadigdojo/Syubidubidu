{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/settings.css')}}">
    <title>Settings</title>
</head>
<body>
<section id="header">
    <div class="profile-picture-container">
        <img src="storage/profile/{{$user->profileIMG}}" alt="Profile Picture">
    </div>
</section>
    <div class="container">
		<form ACTION='{{ route('profile.update') }}' METHOD='POST' id="settings-form" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form">
                <div class="title-profile">
                    <h1>Profile Info</h1>
                </div>
                <label for="username">First Name:</label>
                <input type="text" id="username" name="Fname" placeholder="First Name" value="{{ old('Fname', $user->Fname) }}">
                <label for="username">Last Name:</label>
                <input type="text" id="username" name="Lname" placeholder="Last Name" value="{{ old('Lname', $user->Lname) }}">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <label for="profile-picture">Profile Picture:</label>
                <input type="file" id="profile-picture" name="profileIMG">
                
                <button type="submit" id="submit-button">Update</button>
                <!-- ini buat error message kalo pw/username salah -->
                <!-- <div class="error-message">
                    <h1>Username atau Password salah</h1>
                </div> -->
            </div>
			<div class="history">
                <div class="title">
                    <p>Riwayat Pesanan</p>
                </div>
                <div class="card card-1">
                    <div class="img-title">
                        <img class="img-product" src="./assets/Images-removebg-preview 18.22.05.png" alt="" srcset="">
                        <h1>Yogurt Heavenly Blush 200 ml</h1>
                    </div>
                    <div class="detail">
                        <div class="stars"></div>
                        <input type="hidden" id="rating" name="rating" value="0">
                        <input type="text" class="feedback" placeholder="Beri ulasan...">
                    </div>
                </div>
                <div class="card card-2">
                    <div class="img-title">
                        <img class="img-product"  src="./assets/Images-removebg-preview 18.22.05.png" alt="" srcset="">
                        <h1>Orange juice 350 ml</h1>
                    </div>
                    <div class="detail">
                        <div class="bintang"></div>
                        <input type="hidden" id="rate" name="rate" value="0">
                        <input type="text" class="feedback" placeholder="Beri ulasan...">
                    </div>
                </div>
            </div>
		</form>
	</div>
</body>
<script src="{{asset('JS/settings.js')}}"></script>
</html>


