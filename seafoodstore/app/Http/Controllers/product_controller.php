<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use File;

class product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        // return $posts;
        return view('produk', ['product' => $product]);
    }
    public function index_admin()
    {
        $post = product::all();
        // return $posts;
        return view('add_produk', ['post' => $post]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = new product;
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName1 = time() . 1 . '.' . $request->image1->extension();
        $imageName2 = time() . 2 . '.' . $request->image2->extension();
        $imageName3 = time() . 3 . '.' . $request->image3->extension();
        $imageName4 = time() . 4 . '.' . $request->image4->extension();



        $request->image1->move(public_path('images'), $imageName1);
        $request->image2->move(public_path('images'), $imageName2);
        $request->image3->move(public_path('images'), $imageName3);
        $request->image4->move(public_path('images'), $imageName4);

        $post->gambar_1 =  $imageName1;
        $post->gambar_2 =  $imageName2;
        $post->gambar_3 =  $imageName3;
        $post->gambar_4 =  $imageName4;

        $post->nama_product = $request->judul;
        $post->deskripsi = $request->desc;
        $post->isi = $request->isi;
        $post->jenis = $request->kategori;


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
        $post = product::find($id);
        $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($request->hasFile('image1')) {
            File::delete(public_path('images/' . $post->gambar_1));
            $imageName1 = time() . 1 . '.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $imageName1);
            $post->gambar_1 =  $imageName1;
        }
        if ($request->hasFile('image2')) {
            File::delete(public_path('images/' . $post->gambar_2));
            $imageName1 = time() . 2 . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $imageName1);
            $post->gambar_2 =  $imageName1;
        }
        if ($request->hasFile('image3')) {
            File::delete(public_path('images/' . $post->gambar_3));
            $imageName1 = time() . 3 . '.' . $request->image3->extension();
            $request->image3->move(public_path('images'), $imageName1);
            $post->gambar_3 =  $imageName1;
        }
        if ($request->hasFile('image4')) {
            File::delete(public_path('images/' . $post->gambar_4));
            $imageName1 = time() . 4 . '.' . $request->image4->extension();
            $request->image4->move(public_path('images'), $imageName1);
            $post->gambar_4 =  $imageName1;
        }
        $post->nama_product = $request->judul;
        $post->deskripsi = $request->desc;
        $post->isi = $request->isi;
        $post->jenis = $request->kategori;


        $post->save();

        return back()->with('success', 'Selamat, Product telah berhasil diedit.');

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

        $post = product::find($id);
        File::delete(public_path('images/' . $post->gambar_1));
        File::delete(public_path('images/' . $post->gambar_2));
        File::delete(public_path('images/' . $post->gambar_3));
        File::delete(public_path('images/' . $post->gambar_4));
        product::destroy($id);
        return back();
    }
}
