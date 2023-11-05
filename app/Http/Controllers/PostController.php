<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $pagination = 6;
        $posts = Post::latest()->paginate($pagination);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        return view('posts.show', [
            'posts' => Post::findOrFail($id)

        ]);
    }

    public function destroy($id)
    {

        $posts = Post::find($id);
        $posts->delete();

        return redirect('posts')->with(['info', 'Post has been deleted!']);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('posts')->with(['success', 'Post has been created!']);
    }

    public function edit($id)
    {
       $posts = Post::findOrFail($id);
       return view('posts.edit', ['posts' => $posts]);
    }

    public function update($id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required'

        ]);

        Post::where('id', $id)->update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('posts')->with(['success', 'Post has been updated!']);
    }
}
