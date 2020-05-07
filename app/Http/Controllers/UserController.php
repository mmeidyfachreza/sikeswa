<?php

namespace App\Http\Controllers;

use App\CategoryUser;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StroreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Intervention\Image\Facades\Image;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function index2(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                           return '<a href="#" class="xedit"
                           data-pk='.$data->id.'
                           data-name="phone_number">
                           '.$data->phone_number.'</a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryUser::all();
        return view('admin.user.form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StroreUserRequest $request)
    {
        if ($request->hasFile('avatar') && $request->has('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(354,472)->save(public_path('/uploads/avatars/' . $filename));
            $request->avatar =  $filename;
            User::create($request->all());
            return redirect()->route('user.index')->with('success','Berhasil menambah data');
        }
        User::create($request->all());
        return redirect()->route('user.index')->with('success','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $categories = CategoryUser::all();
        return view('admin.user.form',compact('user','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->id==$id) {
            # code...
            return back()->withErrors(['Tidak Bisa Menghapus Akun yang sedang digunakan']);
        }
        $user=User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success','Berhasil menghapus data');
    }


}
