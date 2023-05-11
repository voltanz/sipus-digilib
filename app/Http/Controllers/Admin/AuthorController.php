<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use Illuminate\Support\Facades\DB;



class AuthorController extends Controller
{

    public function index()
    {
        return view('admin/author/index');
    }


    public function create()
    {

        return view('admin/author/create');
    }

    public function store(Request $request)
    {

        $request->validate(['name' => 'required|min:3'], ['name.required' => 'Kolom Tidak Boleh Kosong', 'name.min' => 'Minimal 3 Karakter']);

        Author::create($request->only('name'));
        return redirect()->route('admin.author.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $author = DB::table('authors')->where('id', $id)->get()->first();
        return view('admin/author/edit', ['author' => $author]);
    }


    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|min:3'
        ], [
            'name.required' => 'Kolom tidak boleh kosong',
            'name.min'      => 'Minimal 3 karakter'
        ]);

        Author::where('id', $author->id)
            ->update([
                'name' => $request->name,
            ]);

        return redirect('admin/author')->with('success', 'Data Berhasil Di update');
    }
    public function destroy($id)
    {
        DB::table('authors')->where('id', '=', $id)->delete();

        return redirect('admin/author')->with('success', 'Data Berhasil Di Hapus');
    }
}
