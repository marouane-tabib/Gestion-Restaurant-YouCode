<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    // public function update(User $user , ProfileRequest $request){
    //     dd('Stop here');
    //     // $user->update($request->validated());
    //     // $this->authorize('update', $user);
    //     $this->authorize('update' , $request);
    //     // $user->update([
    //     //     'name' => $request->name,
    //     //     'email' => $request->email,
    //     //     'updated_at' => now()
    //     // ]);
    //     return 'update method runing...';
    // }
    public function update(User $user, ProfileRequest $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        return $this->success('profile','Profile updated successfully!');
    }
}
