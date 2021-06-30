<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function index()
    {
        $data=Qestion::all();
        // $data=DB::table('questions')->join('topics','questions.id','=','1')->get();
        return view('pdf',compact('data'));
    }

    public function pdf()
    {
        $data=Question::all();
        $data=PDF::loadView('pdf',compact('data'));
        return $data->download('savollar.pdf');
    }
}
