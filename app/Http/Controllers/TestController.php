<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{

    
    public function show()
    {
        
        $data['question'] = Test::all();

        return view('question',$data);
    }

    public function submit(Request $request)
    {
        $count = 0;
        $ans1 = Test::select('correct_answer')->where('id',1)->first();
        $ans2 = Test::select('correct_answer')->where('id',2)->first();
        $ans3 = Test::select('correct_answer')->where('id',3)->first();
        $ans4 = Test::select('correct_answer')->where('id',4)->first();
        $ans5 = Test::select('correct_answer')->where('id',5)->first();
  

        if($ans1->correct_answer ==  $request->Q_1){
            $count++;
        }
        if($ans2->correct_answer ==  $request->Q_2){
            $count++;
        }
        if($ans3->correct_answer ==  $request->Q_3){
            $count++;
        }
        if($ans4->correct_answer ==  $request->Q_4){
            $count++;
        }
        if($ans5->correct_answer ==  $request->Q_5){
            $count++;
        }
        $total['score'] = strval($count);

        return view('score',$total);
 
    }

    public function create_question(Request $request){
        return view('add_question');
    }


    public function store(Request $request)
    {
        if($request->input('question_no')<=5){
            $res = Test::where('id',$request->input('question_no'))->first();
            if($res){
                $res = Test::where('id',$request->input('question_no'))->first();
                $res->question=$request->input('question');
                $res->correct_answer=$request->input('correct_answer');
                $res->option_1=$request->input('option_1');
                $res->option_2=$request->input('option_2');
                $res->option_3=$request->input('option_3');
                $res->option_4=$request->input('option_4');
                $res->save();

            }else{

                $res= new Test;
                $res->id=$request->input('question_no');
                $res->question=$request->input('question');
                $res->correct_answer=$request->input('correct_answer');
                $res->option_1=$request->input('option_1');
                $res->option_2=$request->input('option_2');
                $res->option_3=$request->input('option_3');
                $res->option_4=$request->input('option_4');
                $res->save();

            }
            $request->session()->flash('msg','Data submitted');
        }
        

        
        return redirect('todo_show');
    }

    public function todo_show(Request $request)
    {
        return view('todo_show')->with('todoArr',Test::All());
    }

    public function edit(Request $request,$id)
    {
        return view('todo_edit')->with('todoArr',Test::find($id));
    }

    public function destroy(Request $request,$id)
    {
        Test::destroy(array('id',$id));
        return redirect('todo_show');
    }
}
