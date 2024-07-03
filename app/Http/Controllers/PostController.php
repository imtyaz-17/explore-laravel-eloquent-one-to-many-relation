<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Fetch all posts with their associated user information
        $posts = Post::with('user')->get();

        // Fetch a specific post (ID=2) with its associated user information
        $post = Post::with('user')->find(2);

        // Fetch posts where the title is 'Third Post' along with their associated user information
        $s_post = Post::with('user')->where('title', 'Third Post')->get();

        // Fetch posts that have a user named 'John Doe' associated with them
        $u_post = Post::whereHas('user', function ($query) {
            $query->where('name', 'John Doe');
        })->with('user')->get();

        // Fetch users with the name 'John Doe'
        // $users = User::where('name', 'John Doe')->get();

        // Fetch posts that belong to users with the name 'John Doe'
        // $postss = Post::whereIn('user_id', $users->pluck('id'))->get();

        return $u_post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
