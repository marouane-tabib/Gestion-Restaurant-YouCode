<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Plat $plat)
    {
        return response()->json($plat->all());
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return response()->json('Create Method is runing...');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Plat $plat , Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'image' => 'required',
        ]);
        $plat->create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => 3,
            'image' => "202302100814ella-olsson-_Buh5P_61JE-unsplash.jpg"
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 'fails',
                'message' => $validator->errors(),
                'data-form' => [$request->all()]
            ] , 400);
        }

        return response()->json([
            'status' => "success",
            'message' => "New record created successfully!",
            'data-form' => [$request->all()],
        ] , 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plat $plat)
    {
        return response()->json([
            'status' => "success",
            'message' => "The record is ready to show hem !",
            'data-form' => [$plat],
        ] , 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Plat $plat)
    // {
    //     return response()->json($plat);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Plat $plat , Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 'fails update',
                'message' => $validator->errors(),
                'data-form' => $request->all()
            ] , 400);
        }
        $plat->update([
            'title' => $request->title,
            'description' => $request->description,
            // 'user_id' => 3,
            'image' => "202302100814ella-olsson-_Buh5P_61JE-unsplash.jpg"
        ]);

        return response()->json([
            'status' => "success",
            'message' => "New record updated successfully!",
            'data-form' => [$request->all()],
        ] , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plat $plat)
    {
        $result = $plat->delete();

        return response()->json([
            'status' => "success",
            'message' => "Record deleted successfully!",
            'data-form' => [$result],
        ] , 200);
    }
}
