<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //public function show($name){
      //  $result='abc';
       // return view('employee.show',compact('name'));//bhayena
    //}
    public function show($name,$second,$third){
        $result='';
        $result = (int)$name+(int)$second;
        $arrayCustom= [
            1,2,3,4,5,6
        ];
        return view('employee.show',[
            'result' => $result,
            'third' => $third,
            'arr' => $arrayCustom
        ]);
        //return view('employee.show',compact('result'));
    }
    public function index(){
        $a = 1;
        $b = 2;
        $sum = $a+$b;
        echo $sum . " is the sum of a and b";

    }
    public function display($id){
        echo "This is route parameter ".$id;
    }
    public function forPostRequest(Request $request){
        dd($request);
    }
    
    public function bladeDemo(){
        $arr = [1,2,3,4,5,6];
        return view('employee.demo',compact('arr'));
    }
}
