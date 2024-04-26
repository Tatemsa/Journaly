<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index(){
        $posts = Post::where('user_id', '=', Auth::user()->id)->get();
        return view('dashboard', [
            'posts'=>$posts
        ]);
    }

    public function create(){
        return view('createPost');
    }

    public function store(Request $request){
    //dd($request);
      //  $filename = time() . '.' . $request->image->extension();
        // $path = $request->file('image')->storeAs(
        //     'images',
        //     $filename,
        //     'public'
        // );
        
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->public = $request->public;
        $post->user_id = Auth::user()->id;
        $post->save();
        
        // $image = new Image();
        // $image->path = $path;
        // $post->image()->save($image);//Permet de stocker l'image avec l'id du post qui correspond
        
        return $this->index();
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('showPost', ['post'=>$post]);
    }

    public function update($id, Request $request){
        $post = Post::findOrFail($id);
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content
        ]);
    }

    public function otherPost(){
        $posts = Post::all()->where('public', '=', 'OUI');
        return view('otherPost', [
            'posts'=>$posts
        ]);
    }

    public function delete($id, Request $request){
        $post = Post::findOrFail($id);
        $post->delete();
        return $this->index();
    }

    public function comment($id, Request $request){
        
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->post_id = $id;
        $comment->user_id = Auth::user()->id; 
        $comment->save();

        return $this->show($id);
    }
}
