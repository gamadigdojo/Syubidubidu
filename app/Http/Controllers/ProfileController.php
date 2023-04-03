<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     // $request->user()->fill($request->validated());

    //     // if ($request->user()->isDirty('email')) {
    //     //     $request->user()->email_verified_at = null;
    //     // }

    //     $user = User::findOrfail($request->user()->id)->update([
    //         'Fname' => $request->Fname,
    //         'Lname' => $request->Lname,
    //         'password' => $request->password ? Hash::make($request->password) : $request->user()->password,
    //         // your code here

    //     ]);

    //     return Redirect::route('dashboard')->with('status', 'profile-updated');
    // }

    public function update(Request $request){
        $user = User::findOrFail($request->user()->id);

        // Check if a new profile picture was uploaded
        if ($request->hasFile('profileIMG')) {
            // Delete the old profile picture
            // if ($user->profileIMG && $user->profileIMG !== 'default.png') {
            //     Storage::delete('public/profile/' . $user->profileIMG);
            // }

            // Store the new profile picture
            $fileName = $request->file('profileIMG')->getClientOriginalName();
            $request->file('profileIMG')->storeAs('public/profile', $fileName);
            $user->profileIMG = $fileName;
        } else {
            // Use the default profile picture if no new picture was uploaded
            $user->profileIMG = 'default-profile.png';
        }

        // Update the other user fields
        $user->Fname = $request->Fname;
        $user->Lname = $request->Lname;
        $user->password = $request->password ? Hash::make($request->password) : $user->password;
        $user->save();

        // Redirect to the profile page
        return redirect()->route('inventory')->with('status', 'profile-updated');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
