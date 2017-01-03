<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects')->with(compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]); 

        Project::create([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]); 

        return ['message' => 'Project Created!'];
    }
}
