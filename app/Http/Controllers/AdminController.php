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

        return view('admin.index', compact('totalUsers', 'totalPosts', 'totalExcursions'));
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
        // Logic to update post
    }

    public function deletePost($id)
    {
        // Logic to delete post
    }

    // Excursion management
    public function manageExcursions()
    {
        // Logic to fetch and display excursion data
        return view('admin.excursions');
    }

    public function deleteExcursion($id)
{
    $excursion = Excursion::findOrFail($id);
    $excursion->delete();
    return redirect()->route('admin.excursions.index')->with('success', 'Excursion deleted successfully.');
}


}
