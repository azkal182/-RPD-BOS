<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;


use DB;
use App\komp1s;
use App\komp2s;
use App\komp3s;
use App\komp4s;
use App\detail_komps;

class AnggaranController extends Controller
{

  public function index()
  {
    $users = DB::table('komp1')
            ->join('komp2', 'id_komp1', '=', 'id_komp2')
            ->join('komp3', 'id_komp2', '=', 'id_komp3')
            ->select('komp1.t_komp1', 'komp2.t_komp2', 'komp3.t_komp3')
            ->get();
    return  view('treeview', compact('data'));
  }

  public function komp1s()
  {
    $komp1s = komp1s::all();
    return view('admin.anggaran', compact('komp1s'));
  }

  public function komp2s(Request $request)
  {
    $id_komp2 = $request->input('id_komp1');
    $komp2s = komp2s::where('id_komp1', '=', $id_komp2)->get();
    return response()->json($komp2s);
  }

  public function komp3s(Request $request)
  {
    $id_komp3 = $request->input('id_komp2');
    $komp3s = komp3s::where('id_komp2', '=', $id_komp3)->get();
    return response()->json($komp3s);
  }

  public function komp4s(Request $request)
  {
    $id_komp4 = $request->input('id_komp3');
    $komp4s = komp4s::where('id_komp3', '=', $id_komp4)->get();
    return response()->json($komp4s);
  }

  public function detail_komps (Request $request)
  {
    $id_detail_komp = $request->input('id_komp4');
    $detail_komps = detail_komps::where('id_komp4', '=', $id_detail_komp)->get();
    return response()->json($detail_komps);
  }
}
