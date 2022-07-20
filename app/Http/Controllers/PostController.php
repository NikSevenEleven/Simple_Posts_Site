<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        $categories = Category::all();
        return view('post.create',compact('categories'));

    }

    public function store()
    {
        $data=request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>'',
        ]);
        Post::create($data);
        return redirect()->route('post.index');

    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));

    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('post.edit', compact('post'),compact('categories'));

    }

    public function update(Post $post)
    {


        $data=request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>'',
        ]);
        $post->update($data);
        return redirect()->route('post.show',$post->id);
    }

    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('post.index');
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
