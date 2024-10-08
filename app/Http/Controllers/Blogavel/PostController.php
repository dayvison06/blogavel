<?php

namespace App\Http\Controllers\Blogavel;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Blogavel\PostServices;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostServices $postService)
    {
        // Passando o modelo Post para o construtor do PostService
        $this->postService = $postService;
    }

    public function index(){
        $posts = $this->postService->listPosts();
        return view('welcome', ['posts' => $posts]);
    }

    public function show($id){
        $post = $this->postService->showPost($id);
        $ownerPost = $this->postService->ownerPost($post);

        return view('posts.show', ['post' => $post, 'ownerPost' => $ownerPost]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $post = $this->postService->createPost($request);

        if($post === true){
            return redirect()->route('welcome')->with(['success' => '✅ Postagem criada com sucesso!']);
        }
    }
}
