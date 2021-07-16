<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request){

        $search = $request->search;

        if($search){
            $events = Event::where([
                ['title','like','%'.$search. '%']
            ])->get();
        }
        else{
            $events = Event::all();
        }

        return view('welcome',['events'=> $events,'search'=>$search]);
    }

    public function create(){
        return view('events.create');
    }
    
    public function store(Request $request){

        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;
        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $request_image = $request->image;

            $extension = $request_image->extension();
            $image_name = md5($request_image->getClientOriginalName(). strtotime('now')) . "." .$extension;

            $request->image->move(public_path('img/events'),$image_name);

            $event->image = $image_name;

        }



        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');
    }

    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show',['event'=>$event]);
    }

    public function login(){
        return view('events.login');
    }
}
