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
            'current_datetime' => Carbon::now('UTC')->format('Y-m-d\TH:i:s\Z'),
            'github_url' => 'https://github.com/Josh6335/HngStage0' 
        ];

        return response()->json($data, 200); 
    }
}
