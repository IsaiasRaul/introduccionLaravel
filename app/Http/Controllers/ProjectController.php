<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getAllProjects()
    {
        $project = Projects::where('is_active', 1)
        ->orderBy('name', 'asc')
        ->take(2)
        ->get();

        dd($project);
    }

    public function insertProject()
    {
        $project = new Projects;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();

        return "Guardado";   
    }

    public function updateProject() {
        $project = Projects::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }

}
