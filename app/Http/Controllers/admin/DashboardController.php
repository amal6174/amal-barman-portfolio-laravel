<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

class DashboardController extends Controller
{
    public function index(){
        $projectsCount = Project::count();
        $skillsCount = Skill::count();
        $messagesCount = Contact::count();

        return view('admin.dashboard',compact('projectsCount','skillsCount','messagesCount'));
    }

    public function projects(){
        $projects = Project::latest()->get();

        return view('admin.projects',compact('projects'));
    }

    public function messages(){
        return view('admin.messages');
    }

    public function skills(){
        $skills = Skill::latest()->get();
        return view('admin.skills',compact('skills'));
    }
}
