<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Aplikasi;

class BlockController extends Controller
{
    public function index(){
      $antivirus = DB::select('select * from aplikasi where kategori = "antivirus" limit 6');
      $games = DB::select('select * from aplikasi where kategori = "game" limit 6');
      return view('blog/home', ['antivirus' => $antivirus, 'games' => $games]);
    }
    public function blog(){
      return view('blog/blog');
    }
    public function news(){
      $news = DB::select('select * from tech_news');
      return view('blog/news', ['news' => $news]);
    }
    public function isinews(){
      return view('blog/postnews');
    }
}
