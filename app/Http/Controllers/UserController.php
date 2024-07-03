<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all users with their associated posts
        $users = User::with('getPost')->get();

        // Fetch a specific user (ID=2) with their associated posts
        $user = User::with('getPost')->find(2);

        // Fetch users who do not have any posts
        $zp_user = User::doesntHave('getPost')->get();

        // Fetch users who have posts, along with their posts
        $p_user = User::Has('getPost')->with('getPost')->get();

        // Fetch users with a count of their posts
        $pc_user = User::withCount('getPost')->get();



        return $pc_user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $post = new Post([
        //     'title' => 'New Title',
        //     'description' => 'New Post desc'
        // ]);

        // $user = User::find(2);
        // // Associate the new post with the found user and save it
        // $user->getPost()->save($post);

        $user = User::find(3);
        $user->getPost()->create([
            'title' => 'New Title 2',
            'description' => 'New Post desc 2'
        ]);
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
