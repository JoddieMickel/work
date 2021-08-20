<?php

namespace App\Http\Controllers;
use App\Models\Girl;
use Illuminate\Http\Request;

class GirlController extends Controller
{
    public function index(){
        $girls=Girl::all();
        return view('girls.index')->with('girl',$girls));
    }
    public function create(){
        return view('girls.create');
    }
    public function save($name,$description){
        $girls= new Girl();
    
        $girls->name=$name;
        $girls->description=$description;

        $girls->save();
        return saved();
    }
    public function store(Request,$request){
        $girls= new Girl();

        $girls->name =$request->$name;
        $girls->descripion =$request->$description;
        // return view('/girls/'.$girls->id');

        $girls->save();
        return saved();
    }
    public function show(Girl,$girls){
        return view('girls.show'->with('girl',$girls));
    }
    public function edit(Girl,$girls){
        return view('girls.edit'->with('girl',$girls));
    }
    public function destroy(request $request ,Girl $girls){
        $girls=delete();
        $request->session()->flash('message','Successfully deleted the person!');
        return redirect('tasks');
    }
}
