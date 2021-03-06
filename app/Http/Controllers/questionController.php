<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function question($difficulty)
    {
        $msg = '';
        $params =  DB::table('questions')->join('lv','lv.lvid', '=','questions.lv_lvid')
        ->where('lv.lvname','=',$difficulty) ->oldest('qid')->get();
        $hints='';
        if($params==null){
        return redirect('/home');
        }
        $clearflagcnt = DB::table('ac')->join('users','users.id', '=','ac.user_id')
                    ->select('question_qid')
                    ->where('group_gid','=',Auth::user()->group_gid)->count();
        if($difficulty=='hard'){
            $hints = DB::table('roulette')->join('users','users.id', '=','roulette.user_id')
            ->join('hints','hints.id','=','roulette.number')
            ->distinct()
            ->orderBy('roulette.number', 'asc')
            ->select('roulette.number' ,'hints.hint')
            ->where('roulette.number','<',21)
            ->where('group_gid','=',Auth::user()->group_gid)->get();
        }
        if($clearflagcnt < 1){
            $clearflag = '';
        }else{
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->where('group_gid','=',Auth::user()->group_gid)
        ->get();
        }
        return view('question',['questions'=> $params ,'message' => $msg , 'clearflags' => $clearflag,'difficulty'=>$difficulty,'hints'=>$hints]);
    }    
}
   

