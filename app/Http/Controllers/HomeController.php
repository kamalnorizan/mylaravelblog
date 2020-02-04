<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Post;
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
        $users = User::where('id','<=',30)->get();
        $user = User::find(2);
        //test push
        // $post = Post::all();
        return response()->json($user->relposts);
        // return view('home');
    }
}
