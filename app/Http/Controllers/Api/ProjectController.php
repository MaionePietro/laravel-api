<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index(){

        $project = Project::all(); //with('type')
        return response()->json([
            'success'=>true,
            'project'=>$project,
        ]);
    }
    public function show(slug){
        return response()->json([
            'success'=>true,
            'project'=>$project,
        ]);
    }
}
