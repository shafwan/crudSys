<?php

namespace App\Http\Controllers;

use App\Peoples;
use Illuminate\Http\Request;

use App\Http\Requests;

class PeopleController extends Controller
{
    public function index()
    {
        //$peoples=Peoples::all();
        $peoples=Peoples::paginate(1);
        return view('people.index')->with('peoples',$peoples);
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $gender=$request->gender;

        $peoples=new Peoples;
        $peoples->name=$name;
        $peoples->phone=$phone;
        $peoples->email=$email;
        $peoples->gender=$gender;
        $peoples->save();

            return redirect('/people');
    }

    public function destroy(Peoples $people)
    {
       // $people=Peoples::find($id);
        $people->delete();
        return redirect('/people');
    }

    public function edit($id)
    {
        $people=Peoples::find($id);
        return view('people.edit')->with('people', $people);
    }

    public function update(Request $request,$id)
    {
        $people=Peoples::find($id);
        $people->name=$request->name;
        $people->save();
        return redirect('/people');
    }
    public function show($id)
    {
        $people=Peoples::find($id);
        return view('people.show')->with('people',$people);
    }

}
