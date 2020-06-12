<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use App\SementaraModel;

class KuisController extends Controller {

    public $id_pertanyaan = "";
    public $jwb_1 = "";
    public $jwb_2 = "";
    public $jwb_3 = "";
    public $jwb_4 = "";
    public $jwb_5 = "";
    public $answer = "";


    public function showpertanyaan() {
        $data = DB::table('pertanyaan')->get();
        
        
        return view('kuis',compact('data'));

    }

    public function runquiz($id)
    {
        $data = Pertanyaan::where('id_pertanyaan',$id)->get();
        $datatable = SementaraModel::all();

        return view('fullkuis',compact('data', 'datatable'));
    }

    public function search(Request $request) {
        $this->answer = $request->get('answer');
        $this->id_pertanyaan = $request->get('id_test');

        $data1 = DB::select("SELECT CASE WHEN EXISTS (SELECT jwb_1 FROM pertanyaan WHERE id_pertanyaan = '$this->id_pertanyaan' AND jwb_1 = '$this->answer') THEN 1 ELSE 0 end AS jawab");

        $data2 = DB::select("SELECT CASE WHEN EXISTS (SELECT jwb_2 FROM pertanyaan WHERE id_pertanyaan = '$this->id_pertanyaan' AND jwb_2 = '$this->answer') THEN 1 ELSE 0 end AS jawab");

        $data3 = DB::select("SELECT CASE WHEN EXISTS (SELECT jwb_3 FROM pertanyaan WHERE id_pertanyaan = '$this->id_pertanyaan' AND jwb_3 = '$this->answer') THEN 1 ELSE 0 end AS jawab");

        $data4 = DB::select("SELECT CASE WHEN EXISTS (SELECT jwb_4 FROM pertanyaan WHERE id_pertanyaan = '$this->id_pertanyaan' AND jwb_4 = '$this->answer') THEN 1 ELSE 0 end AS jawab");

        $data5 = DB::select("SELECT CASE WHEN EXISTS (SELECT jwb_5 FROM pertanyaan WHERE id_pertanyaan = '$this->id_pertanyaan' AND jwb_5 = '$this->answer') THEN 1 ELSE 0 end AS jawab");

        foreach($data1 as $item) {
            $jawaban = $item->jawab;
        }

        foreach($data2 as $item2) {
            $jawaban2 = $item2->jawab;
        }

        foreach($data3 as $item3) {
            $jawaban3 = $item3->jawab;
        }

        foreach($data4 as $item4) {
            $jawaban4 = $item4->jawab;
        }

        foreach($data5 as $item5) {
            $jawaban5 = $item5->jawab;
        }

        if ($jawaban == 1) {
            $poin = "100";
            SementaraModel::create([
                'jawaban' => $this->answer,
                'poin' => $poin
            ]);

            return redirect()->back()->with('success',"Jawaban dengan poin 100");
        } else if($jawaban2 == 1){
            $poin = "80";
            SementaraModel::create([
                'jawaban' => $this->answer,
                'poin' => $poin
            ]);
                return redirect()->back()->with('success2',"Jawaban dengan poin 80");
        } else if($jawaban3 == 1){
            $poin = "60";
            SementaraModel::create([
                'jawaban' => $this->answer,
                'poin' => $poin
            ]);
                return redirect()->back()->with('success3',"Jawaban dengan poin 60");
        } else if($jawaban4 == 1){
            $poin = "40";
            SementaraModel::create([
                'jawaban' => $this->answer,
                'poin' => $poin
            ]);
            return redirect()->back()->with('success4',"Jawaban dengan poin 40");
        } else if($jawaban5 == 1){
            $poin = "20";
            SementaraModel::create([
                'jawaban' => $this->answer,
                'poin' => $poin
            ]);
            return redirect()->back()->with('success5',"Jawaban dengan poin 20");
        } else {
            return redirect()->back()->with('failed', "ANDA SALAH BESAR");
        }
    }

    public function quizanswer(Request $request) {
        $data = $request->get('answer');  
        return redirect()->back()->with('success',$data);
    }
}