<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use Illuminate\Support\Facades\Storage;

class AnimalsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::orderBy('created_at','desc')->paginate(10);
        return view('animals.index',compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required',
            'description' => 'required',
            'availability' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //Handle image upload
        if($request->hasFile('image')){
            
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $request->file('image')->getClientOriginalExtension();
           
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
           
            $path = $request->file('image')->storeAs('public/animal_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Animal
        $animal = new Animal;
        $animal->name = $request->input('name');
        $animal->date_of_birth = $request->input('date_of_birth');
        $animal->description = $request->input('description');
        $animal->availability = $request->input('availability');
        $animal->image = $fileNameToStore;
        $animal->save();

        return redirect('/animals')->with('success', 'Animal Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::find($id);
        return view('animals.show')->with('animal', $animal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);

        if(auth()->user()->role == 0){
            return redirect('/animals')->with('error', 'Unauthorised');
        }

        return view('animals.edit')->with('animal', $animal);
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
        $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required',
            'description' => 'required',
            'availability' => 'required'
        ]);

        if($request->hasFile('image')){
            
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $request->file('image')->getClientOriginalExtension();
           
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
           
            $path = $request->file('image')->storeAs('public/animal_images', $fileNameToStore);
        } 

        //Update Animal
        $animal = Animal::find($id);
        $animal->name = $request->input('name');
        $animal->date_of_birth = $request->input('date_of_birth');
        $animal->description = $request->input('description');
        $animal->availability = $request->input('availability');
        if($request->hasFile('image')){
            $animal->image = $fileNameToStore;
        }
        $animal->save();

        return redirect('/animals')->with('success', 'Animal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);

        if($animal->image != 'noimage.jpg'){
            Storage::delete('public/animal_images/'.$animal->image);
        }

        if(auth()->user()->role == 0){
            return redirect('/animals')->with('error', 'Unauthorised');
        }
        $animal->delete();
        return redirect('/animals')->with('success', 'Animal Removed');
    }
}
