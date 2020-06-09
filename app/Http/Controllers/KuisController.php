<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;

class KuisController extends Controller {

    public function showpertanyaan() {
        $data = DB::table('pertanyaan')->get();
        
        return view('kuis',compact('data'));

    }

    public function runquiz($id)
    {
        $data = Pertanyaan::where('id',$id)->get();

        return view('fullkuis',compact('data'));
    }

    public function search($answer) {
        $data = DB::table('pertanyaan')
                ->where('jwb_1', 'like', '%' . answer)
                ->get();
        return view('fullkuis');
    }

    public function quizanswer(Request $request) {
        $data = $request->get('answer');
        //if else untuk cek data  
        return redirect()->back()->with('success', $data);   
    }
}