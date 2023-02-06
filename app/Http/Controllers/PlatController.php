<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatController extends Controller
{
    public function create(Plat $plat , Request $request){
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/Image'), $filename);
        }
        $plat->create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id ,
            'image' => $filename
        ]);
        return redirect()->back();
    }

    public function destroy(Plat $plat){
        $delete = $plat->delete();
        return redirect()->back();
    }

    public function edit(Plat $plat){
        return view('plats.edit' , ['plat' => $plat]);
    }

    public function update(Plat $plat , Request $request){
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage/Image'), $filename);
        }
        $plat->update([
            'image' => "",
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);
    }
}
