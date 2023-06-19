<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }
     /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $coba = $request->get('select');
        return view('admin.user.create', compact('coba'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'nisn'=>'numeric|min:10|unique:users',
            'password'=>'required|string|min:8|confirmed',
        ]);

        $select = $request->get('select');
        $time = ($select === 'user') ? null : date("Y-m-d H:i:s");
        $name = $select === 'user' ? '' : $select;

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $name . " " . $request['name'],
            'email' => $request['email'],
            'nisn' => $request['nisn'],
            'email_verified_at'=> $time,
            'password' => Hash::make($request['password']),
        ]);

        $user->assignRole($request->get('select'));
        return redirect()->route('admin.user.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view ('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user)
    {
        User::where('id', $user->id)
        ->update([
            'name' => $request->name,
            'email'=>$request->email
        ]);
    return redirect('admin/user')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id','=',$id)->delete();
        return redirect('admin/user')->with('success', 'Data Berhasil Di Hapus');
    }
}
