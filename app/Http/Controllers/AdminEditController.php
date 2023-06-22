<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Detail_transaksi;
use App\Profile;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class AdminEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $Profile = Profile::find($id);
        return view('admin.edit', compact('Profile'));
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
      //melakukan validasi data
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ]);
    //fungsi eloquent untuk mengupdate data inputan kita
    Profile::find($id)->update($request->all());
    $categories = Category::all();
        $grafik = DB::table('detail_transaksi')
            ->join('books', 'detail_transaksi.book_id', '=', 'books.id')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('detail_transaksi.*', 'books.*', 'categories.*')
            ->get();
        $buku = Book::all()->count();
        $user = Role::find(2)->users()->count();
        $dipinjam  = Detail_transaksi::where(['status' => 0])->count();

        return view('admin/home', compact('dipinjam', 'user', 'buku', 'categories', 'grafik'));
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
