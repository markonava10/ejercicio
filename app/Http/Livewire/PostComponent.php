<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Whitepagination;
use App\Post;

class PostComponent extends Component
{
    use WhitePagination;

    public $post, $body;

    public $view = 'create';
    
    public function render()
    {
        return view('livewire.post');
    }

    public function store ()
    {
        $this->validate(['post' => 'required', 'body' => 'required']);
        Post::create([
            'post' => $this->post,
            'body'  => $this->body
        ]);
    }

}
