<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');

    }

    public function update()
    {

        $post=Post::find(6);
        $post->update([
            'title'=>'updated',
            'content'=>'updated',
            'image'=>'updated',
            'likes'=>'123',
        ]);
        dd('updated');
    }

    public function delete()
    {

        $post=Post::withTrashed()->find(6);
        $post->restore();
        dd('end');

    }

        public function firstOrCreate()
    {



        $anotherPost = [
            'title'=>'updated',
            'content'=>'updated',
            'image'=>'updated',
            'likes'=>'123',
        ];

        $post= Post::firstOrCreate([
                'title'=>'hell'
        ],[
                'title'=>'qqqq',
                'content'=>'qqqq',
                'image'=>'qqqq',
                'likes'=>'4444',
        ]);

        dump($post->content);
        dd('111111');

    }

    public function updateOrCreate()
    {



        $anotherPost = [
            'title'=>'updated',
            'content'=>'updated',
            'image'=>'updated',
            'likes'=>'123',
        ];

        $post= Post::updateOrCreate([
            'title'=>'123'
        ],[
            'title'=>'111',
            'content'=>'updated',
            'image'=>'updated',
            'likes'=>'123',
        ]);

        dump($post->content);
        dd('111111');

    }


}
