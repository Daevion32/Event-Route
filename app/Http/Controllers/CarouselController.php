<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use image;

class CarouselController extends Controller
{
    //
    public function index()
    {
        $carousels = Carousel::all();

        return view('home', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createEvent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $carousels = request()->except('_token');

        // $event = Event::create(
        //     [
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'image' =>  $request->image,
        //         'spaces' => $request->spaces,
        //         'location' =>  $request->location,
        //         'date' => $request->date,
                
        //     ]
        // );
        Carousel::create($carousels);

        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $carousels = Carousel::find($id);

        return view ('showEvent', compact('carousels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousels = Carousel::find($id);
        return view ('editEvent', compact('carousels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carousels = request()->except(['_token', '_method']);
        Carousel::where('id', '=', $id)->update($carousels);
        return redirect()->route('home');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carousel::destroy($id);
        return redirect()->route('home');
    
    }  

}

