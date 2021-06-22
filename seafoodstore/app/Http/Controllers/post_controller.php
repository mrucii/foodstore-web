<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use File;
class post_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::all();
        // return $posts;
        return view('blog', ['post' => $post]);
    }
    public function index_admin()
    {
        $post = post::all();
        // return $posts;
        return view('add_blog', ['post' => $post]);
    }

    public function detail_blog($id)
    {
        $post_detail = post::where('id', $id)->get();
        return view('detailblog', ['post_detail' => $post_detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName1 = time() . 1 . '.' . $request->image1->extension();
        $request->image1->move(public_path('images'), $imageName1);
        $post = new post;
        $post->photo =  $imageName1;
        $post->title = $request->judul;
        $post->isi = $request->editor2;
        $post->author = "Admin 1";
        $post->save();
        return back()->with('success', 'Selamat, Post telah berhasil ditambahkan.');
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
        $post = post::find($id);
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('gambar')) {
            File::delete(public_path('images/' . $post->photo));
            $imageName1 = time() . 1 . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName1);
            $post->photo =  $imageName1;
        };
        $post->title = $request->judul;
        $post->isi = $request->editor2;
        $post->author = "Admin 1";
        $post->save();
        return back()->with('success', 'Selamat, Post telah berhasil diedit.');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = post::find($id);
        File::delete(public_path('images/' . $post->photo));
        post::destroy($id);
        return back();
    }
}
