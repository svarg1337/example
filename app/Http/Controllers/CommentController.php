<?php

namespace App\Http\Controllers;

use App\Http\Requests\Commnets\CommentsRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentsRequest $request)
    {
        //dd($request->validated());
        Comment::create($request->validated());

        // return redirect()->route('articles.index')->with('status', 'create');
        return back()->with('status', 'create');
    }
}
