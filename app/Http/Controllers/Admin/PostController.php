<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $posts = Post::where('user_id', Auth::id())->get();
        $posts = Post::all();
        
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::all();
        return view('admin.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataInput = $request ->all();
        
        
        $request->validate(
            [
                'title' =>[
                    'min:3',
                    'required',
                ],
                'post_content' => 'min:3|required',
                'post_image' => 'image|max:999',
            ]
        );

        $dataInput['user_id'] = Auth::id();
        $dataInput['post_date'] = new DateTime();

        
        $dataInput['post_image'] = Storage::put('uploads', $dataInput['post_image']);
        

        

        $newPost = new Post();
        $newPost->fill($dataInput);
        $newPost->save();

        Post::create($dataInput);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);   
        return view('admin.posts.edit', compact('post'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd( $request ->all());
        $dataInput = $request ->all();

        $post = Post::findOrFail($id);
        $post->update($dataInput);
        $dataInput['post_image'] = Storage::put('uploads', $dataInput['post_image_uploaded']);
       
        
        return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $post = Post::findOrFail($id);
            $post::destroy($id);
            return redirect()->route('admin.posts.index', $post->id)->with('delete', $post->title);
        }
    }
}
