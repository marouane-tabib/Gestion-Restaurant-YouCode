<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function update(User $user , ProfileRequest $request)
    {
        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return dump($request->email);
    }
}
