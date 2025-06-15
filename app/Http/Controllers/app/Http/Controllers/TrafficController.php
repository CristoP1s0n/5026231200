<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrafficController extends Controller
{
    //
    public function index()
    {
        DB::table('pagecounter')->where('id', 1)->increment('jumlah');

    	$pagecounter = DB::table('pagecounter')->where('id', 1)->first();
    	return view('pagecounter',['pagecounter' => $pagecounter]);

    }
}
