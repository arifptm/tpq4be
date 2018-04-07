<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Student;
use App\Achievement;

class AchievementController extends Controller
{
    
	public function store(Request $request){
		$input = $request->all();
		$achievement = new Achievement;
		$achievement->create($input);
		return response()->json($achievement);		
	}



    public function studentAchievement($id){
    	$student = Student::findOrFail($id);
    	$achievement = $student->achievements;

    	return response()->json($achievement);
    }
}
