<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Facades\App;

class PublicDonatController extends Controller
{
    public function index($id)
    {
        $project = Project::findOrFail($id) or App::abort(404);
        return view('project.donate',compact('project'));
    }
}
