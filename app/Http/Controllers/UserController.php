<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $min;
    public $max;
    public $result='';
    private $fullname;


    public function fullName(Request $request)
    {
//        return $request->first_name.' '.$request->last_name;
        $this->fullname =$request->first_name.' '.$request->last_name;
        return view('home',['result'=>$this->fullname]);

    }
    public function series(Request $request)
    {
//        return $request->first_number.''.$request->second_number;
        if($request['first_number']!=' ' && $request['second_number']!=' ') {


            $this->min = min((int)$request['first_number'],(int)$request['second_number']);
            $this->max = max((int)$request['first_number'],(int)$request['second_number']);


            for($i= $this->min; $i<= $this->max; $i++){
                $this->result.=(string)$i.' ';

            }

        }
        else
        {
            $this->result=' ';
        }

        return view('series',['request'=>$this->result]);


    }




}
