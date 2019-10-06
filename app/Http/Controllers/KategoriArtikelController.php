<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listKategoriArtikel=KategoriArtikel::all(); //select *from kategori_artikel
    	
    	//blade
    	return view('kategori_artikel.index', compact('listKategoriArtikel'));
    	//return view('kategori_artikel.index')->with('data',$ListKategoriArtikel);
    }

    public function show($id){

    	$kategoriArtikel=KategoriArtikel::find($id);

    	return view('kategori_artikel.show', compact(('KategoriArtikel')));
    }


}
