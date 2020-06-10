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

    public function search(Request $request) {
        $answer = $request->get('answer');
        $id = $request->get('id');
        // $data = DB::table('pertanyaan')
        //         ->where('jwb_1', $answer)
        //         ->where('id', $id)
        //         ->get();

        $data = DB::select("SELECT CASE WHEN EXISTS (SELECT jwb_1 FROM pertanyaan WHERE id = 2 AND jwb_1 = 'sas') THEN 1 ELSE 0 end AS jawab");

        foreach($data as $item) {
            $jawaban = $item->jawab;
        }

        // dd($jawaban);
        if ($jawaban == 1) {
            return redirect()->back()->with('success',"sukses");
        } else {
            return redirect()->back()->with('failed',"gagal");
        }

        

        
    }

    public function quizanswer(Request $request) {
        $data = $request->get('answer');
        //if else untuk cek data  
        // return redirect()->back()->with('success', $data);   
        return redirect()->back()->with('success',$data);
    }
}