<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public  function index(){
        $posts=Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection=collect($posts);
        $uniqueUserIds=$collection->unique('userId');
        $count=$collection->countBy('userId');
        return view('index',[
            'uniqueUserIds'=> $uniqueUserIds,
            'count'=> $count
        ]);
    }

    public  function  show($id){
        $posts=Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collections=collect($posts)->where('userId', $id);
        return view('show',[
            'collections'=>$collections,
            'id'=>$id
        ]);
    }
}

