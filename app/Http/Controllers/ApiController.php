<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\School;

class ApiController extends Controller
{



    public function test(){

//  $a = 'ade is a boy';

//  $b = "lion";

// $arr = str_split($b);
// $count = count($arr);
// $word = [];

//  for($i=$count-1;$i> -1;$i--){
//      $word[]= $arr[$i];
//  }

 //$word = strrev($a);

// $arr = explode(" ",$a);
// $count= count($arr);
// $word = [];
// for($i=3;$i> -1; $i--){
//     $word[]=$arr[$i];
// }


// $data = implode(" ",$word);




$words = array(10,90,30,40,70);
$min = $words[0];

foreach($words as $w){
    if($min < $w){
        $min = $w;
    }
}
$data = $min;



return response()->json(['data'=>$data],201);
    }



    public function schools(){
        $schools = School::all();
        return $schools;
    }


    public function schoolCreate(){

        return view('welcome.school-create');
    }





    public function schoolPost(Request $request){

        $this->validate($request, [
			'name' => 'required',
			]);

      $school = school::create([
          'name' =>$request->name,
          'slug' => Str::slug($request->name),
      ]);

      return response()->json(['success'=>'created Successfully!' ],201);
    //   $request->Session()->flash('message.content', ' successfully submitted!');
    //   $request->session()->flash('message.level', 'success');

    //   return redirect('welcome/schools');
    }

    public function schoolEdit(School $school){
        return view('welcome.school-edit',compact('school'));
    }

    public function schoolUpdate(Request $request,School $school){

       // return response()->json(['data'=>$request->name ],201);

        if(empty($request->name)){
            return response()->json(['error'=>'name required!' ],400);
        }

        $school = school::where('id',$school->id)->update([
            'name' =>$request->name,
            'slug' => Str::slug($request->name),
        ]);
        return response()->json(['success'=>'created Successfully!' ],201);
    }



    public function schoolDelete(Request $request,School $school){

        $school->delete();
        return response()->json(['success'=>'deleted Successfully!' ],201);
    }

}
