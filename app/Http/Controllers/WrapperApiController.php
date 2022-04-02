<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function cari()
    {
        $json = Http::get('https://api.myquran.com/kota/cari/')->json();
        return response()->json($json);
    }
    public function id()
    {
        $json = Http::get('https://api.myquran.com/kota/id/')->json();
        return response()->json($json);
    }
   public function semua()
    {
        $json = Http::get('https://api.myquran.com')->json();
        return response()->json($json);
    }
    public function hari()
    {
        $json = Http::get('https://api.myquran.com')->json();
        return response()->json($json);
    }
    public function bulan()
    {
       $json = Http::get('https://api.myquran.com')->json();
        return response()->json($json);
    }
}