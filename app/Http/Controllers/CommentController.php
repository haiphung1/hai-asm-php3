<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $comments = $comments->load('products');
        $comments = $comments->load('users');
        return view('comment.list-comment', compact('comments'));
    }
    public function addComment(Product $product) 
    {
        $user = Auth::user();
        return view('comment.add-comment', ['product'=>$product], compact('user'));
    }
    public function createComment(CommentRequest $request)
    {
        $data= $request->except('_token');
        Comment::create($data);
        return $this->index();
    }
    public function deleteComment(Comment $comment)
    {
        $comment->delete();
        return $this->index();
    }
}
