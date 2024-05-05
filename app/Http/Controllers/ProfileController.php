<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function show_admin(){
        $id = auth()->user()->id;
        $data = DB::table('users')
                    ->where('id', $id)
                    ->select('id', 'name', 'email', 'role')
                    ->first();
        if ($data->role == 'user') {
            return redirect()->back();
        }
        dd($data);
    }

    public function show_user(){
        $id = auth()->user()->id;
        $data = DB::table('users')
                    ->where('id', $id)
                    ->select('id', 'name', 'email', 'role')
                    ->first();
        if ($data->role == 'admin') {
            return redirect()->back();
        }
        dd($data);
    }

    public function edit_admin(){
        $id = auth()->user()->id;
        $data = DB::table('users')
                    ->where('id', $id)
                    ->select('id', 'name', 'email', 'role')
                    ->first();
        if ($data->role == 'user') {
            return redirect()->back();
        }
        return view('admin.updateuser');
    }

    public function edit_user(){
        $id = auth()->user()->id;
        $data = DB::table('users')
                    ->where('id', $id)
                    ->select('id', 'name', 'email', 'role')
                    ->first();
        if ($data->role == 'admin') {
            return redirect()->back();
        }
    }

    public function update_admin(Request $request, string $id){
        $request->validate([
            'name' => 'unique:users,name',
            'email' => 'unique:users,email',
            'password' => 'min:8',
            'confirm_password' => 'same:password'
        ]);

        if ($request->password == "") {
            DB::table('users')->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            DB::table('users')->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
        }
        
    }

    public function update_user(Request $request, string $id){
        $request->validate([
            'name' => 'unique:users,name',
            'email' => 'unique:users,email',
            'password' => 'min:8',
            'confirm_password' => 'same:password'
        ]);

        if ($request->password == "") {
            DB::table('users')->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            DB::table('users')->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
        }
        
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('updateuser', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
