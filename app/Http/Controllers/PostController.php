<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use App\Post;

class PostController extends Controller
{   
    

    public function index()
    {
        $posts = Post::all();
        return view("/post")->with(array('posts' => $posts));
    }

    public function crear()
    {
        return view('livewire.create');
    }

    public function insertar(Request $request)
    {
        $registro = Post::create(
            [   'post' => $request['post'],
                'body' => $request['body']
            ]);
        return $registro;
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $post = new Post();

        $post->post = request('post');
        $post->body = request('body');
        $post->user_id = $user->id;
        $post->save();
        return redirect('/home')->with('success', 'Post Created Successfully!');
    }

   
    
    public function edit($id)
    {
        $editar = Post::findOrFail($id);        
            $this->user_id = $id;
            $this->post = $editar->post;
            $this->body = $editar->body;        
            
    }    
    
    public function update()
    {
        $this->validate([
                        'post' => 'required|min:5',
                        'body' => 'required'
        ]);        
            if ($this->user_id) {
                $record = Post::find($this->user_id);
                $record->update([
                                'post' => $this->post,
                                'body' => $this->body
            ]);            
            $this->resetInput();
            
        }    }    
        
    public function destroy($id)
    {
        if ($id) {
            $record = Post::where('id', $id);
            $record->delete();
        }
    }
   
}
