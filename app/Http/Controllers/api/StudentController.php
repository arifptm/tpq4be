<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Student;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class StudentController extends Controller
{
    
	public function index(){
		$students = Student::active()->orderBy('id', 'desc')->paginate(10);
		return response()->json($students);
	}

    public function store(Request $request){
    	$input = $request->student;    	
    	
    	if($request->image != ''){
    		$input['image'] = $this->base64tojpg($request->image);
    	}

    	$student = Student::create($input);
    	return response()->json($student);
    }

    public function update(Request $request, $id){
    	$input = $request->student;
    	$student = Student::findOrFail($id);    	    	
    	if ($request->image != '') {
    		$input['image'] = $this->base64tojpg($request->image);
    	}    	
    	$student->update($input);
    	return response()->json($student);
    }

    public function show($id){
    	$student = Student::findOrFail($id);
		$student->tuition = 'Rp.'.number_format($student->tuition, 0, ',','.');
		$student->infrastructure_fee = 'Rp.'.number_format($student->infrastructure_fee, 0, ',','.');
		$student->uniform_fee = 'Rp.'.number_format($student->uniform_fee, 0, ',','.');

    	return response()->json($student);
    }

    public function deactivate(Request $request){
    	$student = Student::findOrFail($request->id);
    	$student->stop_date = Carbon::now();
    	$student->save();
    	return response()->json($request);	
    }

    public function destroy($id){
    	$student = Student::destroy($id);    
    	return response()->json($student);	
    }


    public function search(Request $request){
    	$students = Student::orderBy('id', 'desc')->where('fullname','like',"%$request->keyword%")->paginate(10);
		return response()->json($students);	
    }

    public function base64tojpg($base) {        
        $filename = "img-".time().".jpg";
        $path = public_path().'/images/students/' . $filename;
        Image::make($base)->save($path);     
        return $filename;
    }
}
