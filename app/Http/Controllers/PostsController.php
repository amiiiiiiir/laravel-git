<?php

namespace App\Http\Controllers;


use App\Events\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('posts.index',compact(['posts']));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post();
        if ($file =  $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->store('public/images');
        }
        }
//        $file->move('images', $name);
//        $post->path = $name;
//
//    }
//            $post->title = $request->title;
//            $post->body  = $request->body;
//            $post->user_id = 1;
//            $post->save();
//        }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findorfail($id);
        event(new PostViewEvent($post));
        return view('posts.show',compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);

        $user = Auth::user();
//        if ($user->can('update',$post)){
            return view('posts.edit', compact(['post']));

//            return "شما اجازه ویرایش این مطلب را ندارید";

//        if (Gate::denies('edit-post',$post)) {
//
//        }else{
//
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorfail($id);
        $post->update($request->all());

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return redirect('/posts');
    }
}
