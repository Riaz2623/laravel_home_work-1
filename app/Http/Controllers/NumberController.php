<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    protected $request;
    protected $data= [];
    protected $password;
    protected $startNumber;
    protected $lastNumber;
   protected $firstNumber;
   protected $i;
   protected $sum=0;


    public function password(Request $request)
    {
        $this->request = $request['password_length'];
        $this->data = ['#','@','1','A','a','6','G','9','*','5','3','/'];

        return view('password',['result'=>$this->request]);
    }
    public function calculator(Request $request)
    {
        $this->request = $request->start_number+$request->last_number;
        return view('calculator',['result'=>$this->request]);
    }
    public function number(Request $request)
    {

        $sum=0;
        for($i=$request->first_number; $i<=$request->end_number; $i++)
        {
            $sum+=$i;
        }

        return view('number',['result'=>$sum]);

    }


}
