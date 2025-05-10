<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        if (!Gate::allows('insert-admin')) {
            abort(403);
        }
        $admins = User::get();
        return view('admin.create')->with('admin', $admins);
    }

    public function insert(Request $r)
    {
        if (!Gate::allows('insert-admin')) {
            abort(403);
        }
        $admin = new User;
        $admin->name = $r->name;
        $admin->username = $r->username;
        $admin->password = Hash::make($r->password);
        $admin->status = 0;
        
        $admin->save();

        return redirect()->route('admin.list')->with("success","Berhasil Tambahkan Admin");
    }

    public function edit(Request $r)
    {
        if (!Gate::allows('update-admin')) {
            abort(403);
        }
        $admins = User::find($r->id);
        return view('admin.edit')->with('admin', $admins);
    }

    public function update(Request $r)
    {
        if (!Gate::allows('update-admin')) {
            abort(403);
        }
        $admin = User::find($r->id);
        $admin->name = $r->name;
        $admin->username = $r->username;
        $admin->password = Hash::make($r->password);
        $admin->save();

        return redirect()->route("admin.list")->with("success","Berhasil Update Admin");
    }

    public function delete(Request $r)
    {
        if (!Gate::allows('delete-admin')) {
            abort(403);
        }
        $admin = User::find($r->id);
        $admin->delete();
        return redirect()->route("admin.list")->with("success","Berhasil Hapus Admin");
    }
}
