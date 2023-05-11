<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {


        return view('admin/book/index');
    }

    public function create()
    {
        $author = Author::all();
        $categories = Category::all();
        return view('admin/book/create', compact('author', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image'        => 'file|image',
            'qty'          => 'required'
        ], [
            'title.required'    => 'Kolom tidak boleh kosong',
            'description.required' => 'Kolom tidak boleh kosong',
            'image.image'          => 'Format Gambar tidak didukung',
            'qty.required'          => 'Kolom tidak boleh kosong'
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('assets/cover');
        } else {
            $path = 'https://via.placeholder.com/150';
        }
        Book::create([
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'author_id'     => $request->author_id,
            'cover'         => $path,
            'description'   => $request->description,
            'qty'           => $request->qty
        ]);
        return redirect('admin/book')->with('success', 'Data Buku Berhasil Ditambahkan');
    }


    public function show($id)
    {
        $book = Book::where('id', $id)->get()->first();
        return view('admin/book/show', compact('book'));
    }


    public function edit($id)
    {
        $categories = Category::all();
        $author = Author::all();
        $book = Book::where('id', $id)->get()->first();
        return view('admin/book/edit', compact(['author', 'book', 'categories']));
    }


    public function update(Request $request, Book $book)
    {
        if ($request->file('image')) {
            $path = $request->file('image')->store('assets/cover');
            Storage::delete($book->cover);
        }
        if ($request->image == null) {
            $path = $book->cover;
        }
        Book::where('id', $book->id)
            ->update([
                'author_id'     => $request->author_id,
                'category_id'   => $request->category_id,
                'title'         => $request->title,
                'description'   => $request->description,
                'cover'         => $path,
                'qty'           => $request->qty
            ]);

        return redirect('admin/book')->with('success', 'Data Berhasil Di Update!');
    }

    public function destroy($id)
    {
        DB::table('books')->where('id', '=', $id)->delete();

        return redirect('admin/book')->with('success', 'Data Berhasil Di Hapus');
    }
}
