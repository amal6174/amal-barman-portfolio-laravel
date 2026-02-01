<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('admin.projects.create');
    }


    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'descriptio'=>'required',
            'tech_stack'=>'required',
            'github_link'=>'required',
        ]);

        Project::create($request->all());

        return redirect()->route('admin.projects')->with('success','Project Add successfully');


    }
}
