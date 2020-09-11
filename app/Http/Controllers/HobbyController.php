<?php

namespace App\Http\Controllers;

use App\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = Hobby::all();
       return view('hobby.index',compact('hobbies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'name' =>'required|min:3',
            'description' =>'required|min:5'
        ]);
        $hobby = new Hobby;
        $hobby->name = $request->name;
        $hobby->description = $request->description;
        $hobby->save();
        return $this->index()->with([
            'message_success' =>"The hobby ".$hobby->name." was created"
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(Hobby $hobby)
    {

        return view('hobby.show',compact('hobby'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobby $hobby)
    {
       return view('hobby.edit',compact('hobby'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobby $hobby)
    {
        dd($hobby);
         $request->validate([
            'name' =>'required|min:3',
            'description' =>'required|min:5'
        ]);
        $hobby = Hobby::find($request->id);
        $hobby->name = $request->name;
        $hobby->description = $request->description;
        $hobby->save();
        return $this->index()->with([
            'message_success' =>"The hobby ".$hobby->name." was updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobby $hobby)
    {
        //
    }
}
