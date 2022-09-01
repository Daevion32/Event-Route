<?php

namespace App\Http\Controllers;

use  App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::get();

        //var_dump($events);

        return view('home', compact('events'));

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

        $event = request()->except('_token');

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
        Event::create($event);

        
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
        $event = Event::find($id);

        return view ('showEvent', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view ('editEvent', compact('event'));
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
        $event = request()->except(['_token', '_method']);
        Event::where('id', '=', $id)->update($event);
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
        Event::destroy($id);
        return redirect()->route('home');
    
    }

    public function inscribe($id){

        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->event()->attach($event);

        return redirect()->route('home');
    }

    public function cancelInscription($id){

        
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->event()->detach($event);

        return  redirect()->route('home');
    }
    
    public function slider(){
        $event = Event::limit(5)->get();
        return view('home',compact('events'));
     }
}