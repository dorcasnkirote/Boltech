<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(10); // Adjust the number of items per page if needed
        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new comment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|integer|exists:posts,id', // Assuming you have a related post model
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'message' => 'required|string',
        ]);

        $commentData = $request->all();
        Comment::create($commentData);

        return redirect()->route('comments.index')->with('success', 'Comment added successfully.');
    }

    /**
     * Display the specified comment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified comment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'message' => 'required|string',
        ]);

        $comment->update($request->all());

        return redirect()->route('comments.index')->with('success', 'Comment updated successfully.');
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully.');
    }
}
