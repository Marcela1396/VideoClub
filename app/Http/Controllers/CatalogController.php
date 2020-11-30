<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //
    public function getIndex(){
        $movies = DB::table('movies')
                ->get();
        return view('catalog.index', ['peliculas' => $movies]);
    }
    public function getShow($id){
        return view('catalog.show', array('id' => $id));
    }
    public function getCreate(){
        return view('catalog.create');
    }
    public function getEdit($id){
        return view('catalog.edit', array('id' => $id));
    }
}
