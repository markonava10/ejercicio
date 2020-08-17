<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Countrie;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */                                                                                                                                                                                 
    public function index()
    {
        $user = auth()->user();
        $user->name = $user->name;
        $posts = Post::all();
        $countries = Countrie::all();
        
        return view("/welcome")->with(array("posts" => $posts, "countries" => $countries));
        
    }
}
