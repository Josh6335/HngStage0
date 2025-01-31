<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'musedikutemitope@gmail.com', // Replace with your HNG12 Slack email
            'current_datetime' => Carbon::now()->toIso8601String(), // Get current time in ISO 8601 format
            'github_url' => 'https://github.com/yourusername/your-repo' // Replace with your GitHub repo URL
        ];

        return response()->json($data, 200); // Returning 200 OK
    }
}
