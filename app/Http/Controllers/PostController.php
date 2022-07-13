<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('posts', compact('posts'));
    }

    public function create()
    {
        $postsArr = [
            [
                'xxx'=>'hello',
                'yyy'=>'www',
                'zzz'=>'www',
                'qqq'=>'33',
            ],
            [
                'title'=>'hello123',
                'content'=>'www',
                'image'=>'www',
                'likes'=>'33',
            ],
            [
                'xxx'=>'hello',
                'yyy'=>'www',
                'zzz'=>'www',
                'qqq'=>'33',
            ],
        ];
            foreach ($postsArr as $post){

                Post::create([
                   'title'=>$post['xxx'],
                    'content'=>$post['yyy'],
                    'image'=>$post['zzz'],
                    'likes'=>$post['qqq'],
                ]);
dd('end');
            }

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
