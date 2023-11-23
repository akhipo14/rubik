<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Produk;
use App\Models\Mentor;
use App\Models\KategoriMentor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori_id1 = 1;
        $kategori_id2 = 2;
        return view('user.home',[
            'produks'=>Produk::latest()->paginate(8),
            'produk_kategori1'=>Produk::where('kategori_id',$kategori_id1)
                                        ->latest()
                                        ->take(5)
                                        ->get(),
            'produk_kategori2'=>Produk::where('kategori_id',$kategori_id2)
                                        ->latest()
                                        ->take(5)
                                        ->get(),
            'artikels'=>Artikel::latest()->paginate(4),
            'mentors'=>Mentor::latest()->paginate(4)
        ]);
    }

    // public function index_user(){
    //     $mentor_all = Mentor::latest()->paginate();
    //     return view('user.mentor.index',[
    //         'kategori_mentor'=>KategoriMentor::all(),
    //     ],compact('mentor_all'));
    // }


}
