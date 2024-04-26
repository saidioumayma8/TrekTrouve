<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\excursion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalPosts = Post::count();
        $totalExcursions = excursion::count();

        return view('admin.index2', compact('totalUsers', 'totalPosts', 'totalExcursions'));
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }


    // Post management
    public function managePosts()
    {
        $posts = Post::all(); // Fetch all posts from the database
        return view('admin.posts.index', compact('posts'));
    }

    public function updatePost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $post = Post::findOrFail($id);
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];

        $post->save();

        return redirect()->back()->with('success', 'Post updated successfully.');
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }

    // Excursion management
    public function manageExcursions()
    {
        $excursions = Excursion::where('is_accepted', false);
        return view('admin.excursions.index', compact('excursions'));
    }

    
    public function acceptExcursion($id)
{
    $excursion = Excursion::findOrFail($id);
    $excursion->is_accepted = true;
    $excursion->save();

    return redirect()->route('admin.excursions.index')->with('success', 'Excursion accepted successfully.');
}

public function rejectExcursion($id)
{
    $excursion = Excursion::findOrFail($id);
    $excursion->delete(); // Or mark as rejected in some other way

    return redirect()->route('admin.excursions.index')->with('success', 'Excursion rejected successfully.');
}

}
