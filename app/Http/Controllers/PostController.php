<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function indexBlog(){
        $posts = Post::where('status', '1')
                    ->orderBy('id', 'DESC')
                    ->paginate(10);
        return view('blog', compact('posts'));
    }

    public function detailBlog($slug){
        $detailPost = Post::where('slug', $slug)->first();
        // return $detailPost;
        return view('post', compact('detailPost'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('Admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|string|max:151',
            'content' => 'required',
            'status' => 'required|integer',
            'image' => 'required'
        ]);

        // return $request;

        // $file = $request->file('image');
        // return $file;

        $imageName = time().'.'.$request->file('image')->getClientOriginalName();


        $request->image->move(public_path('images'), $imageName);

        $post = Post::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'status' => $request->get('status'),
            'slug' => Str::slug($request->get('title')),
            'image' => $imageName
        ]);

        return redirect()->route('post.index')
            ->with('success', 'Post created successfully.');
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
    public function edit(Post $post)
    {
        return view('Admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if($request->hasFile('image')){
                $this->validate($request, [
                    'title' => 'required|string|max:151',
                    'content' => 'required',
                    'status' => 'required|integer',
                    'image' => 'required'
                ]);

                $imageName = time().'.'.$request->file('image')->getClientOriginalName();
                $request->image->move(public_path('images'), $imageName);

                $post->update([
                    'title' => $request->get('title'),
                    'content' => $request->get('content'),
                    'status' => $request->get('status'),
                    'slug' => Str::slug($request->get('title')),
                    'image' => $imageName
                ]);

                return redirect()->route('post.index')
                    ->with('success', 'Post updated successfully.');

        }else{
            $this->validate($request, [
                    'title' => 'required|string|max:151',
                    'content' => 'required',
                    'status' => 'required|integer',
                ]);

                $post->update([
                    'title' => $request->get('title'),
                    'content' => $request->get('content'),
                    'status' => $request->get('status'),
                    'slug' => Str::slug($request->get('title')),
                ]);

                return redirect()->route('post.index')
                    ->with('success', 'Post updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()
            ->route('post.index')
            ->with('success', 'Post deleted successfully.');
    }

}
