<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){

        $search = $request->search;

        $posts = Post::where('title','LIKE', "%{$search}%")
                ->with('user')
                ->latest()->paginate();

        return view('crud.home',  ['posts' => $posts]);
    }

    public function blog(){
        // consulta en base de datos
        //$posts = Post::get(); //obtener todo
        //$posts = Post::first(); // primer registo
        //$posts = Post::find(25); // buscar por id
        
        $posts = Post::latest()->paginate();

        return view('crud.blog', ['posts' => $posts]);        
    }
    
    public function post(Post $post){
        
        return view('crud.post', ['post' => $post]);        
    }    
}
