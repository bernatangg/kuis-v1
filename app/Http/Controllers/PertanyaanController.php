<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = Pertanyaan::all();
        return view('pertanyaan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pertanyaan();
        $data->pertanyaan = $request->pertanyaan;
        $data->jwb_1 = $request->jwb_1;
        $data->jwb_2 = $request->jwb_2;
        $data->jwb_3 = $request->jwb_3;
        $data->jwb_4 = $request->jwb_4;
        $data->jwb_5 = $request->jwb_5;
        $data->jwb_6 = $request->jwb_6;
        $data->jwb_7 = $request->jwb_7;
        $data->jwb_8 = $request->jwb_8;
        $data->jwb_9 = $request->jwb_9;
        $data->jwb_10 = $request->jwb_10;
        $data->save();
        return redirect()->route('pertanyaan.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pertanyaan::where('id',$id)->get();

        return view('pertanyaan_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pertanyaan::where('id',$id)->first();
        $data->pertanyaan = $request->pertanyaan;
        $data->jwb_1 = $request->jwb_1;
        $data->jwb_2 = $request->jwb_2;
        $data->jwb_3 = $request->jwb_3;
        $data->jwb_4 = $request->jwb_4;
        $data->jwb_5 = $request->jwb_5;
        $data->jwb_6 = $request->jwb_6;
        $data->jwb_7 = $request->jwb_7;
        $data->jwb_8 = $request->jwb_8;
        $data->jwb_9 = $request->jwb_9;
        $data->jwb_10 = $request->jwb_10;
        $data->save();
        return redirect()->route('pertanyaan.index')->with('alert-success','Data berhasil diubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pertanyaan::where('id',$id)->first();
        $data->delete();
        return redirect()->route('pertanyaan.index')->with('alert-success','Data berhasi dihapus!');
    }

}