<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'musedikutemitope@gmail.com', 
            'current_datetime' => Carbon::now()->toIso8601String(),
            'github_url' => 'https://github.com/Josh6335/HngStage0' 
        ];

        return response()->json($data, 200); 
    }
}
