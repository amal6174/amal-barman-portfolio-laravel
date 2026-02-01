<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function skills(){
      $skills = Skill::latest()->get();
        return view('pages.skills',compact('skills'));
    }

    public function projects(){
        $projects = Project::latest()->get();
        return view('pages.projects',compact('projects'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
