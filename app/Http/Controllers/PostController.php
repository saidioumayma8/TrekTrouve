<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::accepted()->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function editPost($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function managePosts()
    {
        $user = Auth::user();
        $posts = $user->posts()->get(); // Assuming you have a relationship set up in your User model

        return view('user.posts.index', compact('posts'));
    }

    public function deletePost($id)
    {
        $user = Auth::user();
        $post = Post::where('user_id', $user->id)->findOrFail($id);
        $post->delete();

        return redirect()->route('user.posts.index')->with('success', 'Post deleted successfully.');
    }

    public function acceptPost($id)
    {
        $post = Post::findOrFail($id);
        $post->is_accepted = true;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post accepted successfully.');
    }

    public function rejectPost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete(); // Or mark as rejected in some other way

        return redirect()->route('admin.posts.index')->with('success', 'Post rejected successfully.');
    }
}
