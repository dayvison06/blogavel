<?php

namespace App\Services\Blogavel;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
class PostServices
{
    protected $post;
    protected $user;
    public function __construct(Post $post, User $user){
        $this->post = $post;
        $this->user = $user;
    }

    public function createPost(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Verifica se o usuário está autenticado
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para criar um post.');
        }

        $user = auth()->user();
        $request['slug'] = strtolower(str_replace(' ', '-', $request['title']));
        $request['author'] = str($user->name);
        $request['published_at'] = now();

        $data = [
            'title' => $request['title'],
            'slug' => $request['slug'],
            'content' => $request['content'],
            'author' => $request['author'],
            'published_at' => $request['published_at'],
            'user_id' => $user->id,
        ];

        $this->post->create($data);

        return true;
    }

    public function listPosts(){
        return $this->post->all();
    }

    public function showPost($id){
        return $this->post->where('id', $id)->first();
    }

    public function ownerPost($post) {
        $user = $this->user;
        $ownerPost = $user->where('id', $post->user_id)->first();

        return $ownerPost;
    }
}
