<?php

namespace App\Http\Controllers;

use App\DTO\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index(){
        $resume = Storage::disk('resumes')->get('resume.json');
        $resumeData = json_decode($resume, true);

        // dd(storage_path('resumes'));
        // dd($resume);

        $test = Resume::fromArray($resumeData);
        // dd($test);
        
        
        return view('resume', ['resume' => Resume::fromArray($resumeData)]);
    }
}
