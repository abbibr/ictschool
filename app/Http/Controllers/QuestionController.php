<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
# use App\Models\Topic;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function add(Request $req)
    {
        $validate=$req->validate(
            [
                'question'=>'required',
                'opb'=>'required',
            ]
        );

        preg_match_all('!\d+!',$req->question,$numbers);
        $numbers = $numbers[0];

        for($n=0; $n<$req->opb; $n++)
        {
        	$new = $req->question; 
            for($i=0; $i<count($numbers); $i++)
            {
            	// random o`zgartirish
            	$new=str_replace($numbers[$i], rand(1,100), $new);
            } 
            $q=new Question();
            $q->question=$new;
            // $q->mavzu=$req->opa;
            $q->son=$req->opb;

            $q->save();
            Session::put('successMessage',"Savol qo`shildi!");
        }
        return redirect('questions');
    }

    public function show()
    {
        $qs=Question::all();
        # return view('questions')->with(['questions'=>$qs]);
        return view('questions',compact('qs'));
    }

    public function update(Request $req)
    {
        $validate=$req->validate(
            [
                'question'=>'required',
                'opb'=>'required',
                'id'=>'required'
            ]
        );
        $q=Question::find($req->id);
        $q->question=$req->question;
        $q->son=$req->opb;

        $q->save();
        Session::put('successMessage',"Savol yangilandi!");
        return redirect('questions');
    }

    public function delete(Request $req)
    {
        $validate=$req->validate(
            [
                'id'=>'required'
            ]
        );
        Question::where('id',$req->id)->delete();
        Session::put('successMessage',"Savol o`chirildi!");
        return redirect('questions');
    }
}
