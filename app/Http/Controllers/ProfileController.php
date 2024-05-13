<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

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
        return view('admin.updateuser', compact('data'));
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
        return view('updateuser', compact('data'));
    }

    public function update_admin(Request $request, string $id){
        
        if ($request->confirm_password != "" || $request->password != "") {

            $data = DB::table('users')->where('id', $id)->first();

            if ($data->name == $request->name) {
                $request->validate([
                    'password' => 'required|min:8',
                    'confirm_password' => 'min:8'
                ]);
            } else {
                $request->validate([
                    'name' => 'unique:users,name',
                    'password' => 'required|min:8',
                    'confirm_password' => 'min:8'
                ]);
            }

            if (Hash::check($request->password, $data->password)) {
                DB::table('users')->where('id', $id)->update([
                    'name' => $request->name,
                    'password' => Hash::make($request->confirm_password)
                ]);
            } else {
                return redirect()->back()->withErrors(['password'=>'password lama anda salah']);
            } 
        } 
        else {
            $data = DB::table('users')->where('id', $id)->first();
            if ($data->name != $request->name) {
                $request->validate([
                    'name' => 'unique:users,name',
                ]);
            }
            DB::table('users')->where('id', $id)->update([
                'name' => $request->name,
            ]);
        }
        
        return redirect('/dashboard');
    }

    public function update_user(Request $request, string $id)
    {

        $data = DB::table('users')->where('id', $id)->first();

        if ($data->name != $request->name) {
            $request->validate([
                'name' => 'unique:users,name',
            ]);
            $data->name = $request->name;
        }
        if ($data->email != $request->email) {
            $request->validate([
                'email' => 'unique:users,email',
            ]);
            $data->email = $request->email;
        }
        if ($request->confirm_password != "" || $request->password != "") {
            $request->validate([
                'password' => 'required|min:8',
                'confirm_password' => 'min:8'
            ]);
            if (Hash::check($request->password, $data->password)) {
                $data->password = $request->password;
            } else {
                return redirect()->back()->withErrors(['password'=>'password lama anda salah']);
            }
        }
        if ($request->foto != "") {
            request()->validate([
                'gambar' => 'mimes:jpg,jpeg,png'
            ]);
            if ($data->foto_profile != "") {
                unlink(public_path('/img/profile/'.$data->foto_profile));
            }
            $file = $request->file('foto');
            $nama_file = Str::random(20) . '.' . $file->extension();
            $file->move('img/profile', $nama_file);
            $data->foto_profile = $nama_file;
        }

        DB::table('users')->where('id', $id)->update([
            'name' => $data->name,
            'email' => $data->email,
            'password' => $data->password,
            'deskripsi_diri' => $request->deskripsi,
            'no_telepon' => $request->no_telepon,
            'foto_profile' => $data->foto_profile,
            'alamat' => $request->alamat,
        ]);
        
        return redirect('/view-profile');
        
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

    public function hapus_foto($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        
        if ($data->foto_profile != "") {
            unlink(public_path('/img/profile/'.$data->foto_profile));
        }

        DB::table('users')->where('id', $id)->update([
            'foto_profile' => null
        ]);
        return redirect('/edit-user');
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
