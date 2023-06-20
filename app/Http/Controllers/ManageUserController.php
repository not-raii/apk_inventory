<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManageUserController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        $data = User::paginate(10);

        $roles->when($request->name, function ($query) use ($request){
            return $query->whereRole($request->name);
        });

        return view('/manageUser', compact('data'),
        [
            "title" => "User",
            "role" => $roles

        ]);
    }

    //Function Tambah
    public function tambah()
    {
        $user = Role::select('id', 'name')->get();
        return view('manage_user/add_user',
        [
            "title" => "Tambah User",
            "user" => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ],[
            'nama.required' => 'nama tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
        ]);
        try {
            DB::beginTransaction();
            // Logic For Save User Data
    
            $create_user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'password' => Hash::make('password')
            ]);
    
            if(!$create_user){
                DB::rollBack();
    
                return back()->with('error', 'Something went wrong while saving user data');
            }
    
            DB::commit();
            return redirect('manageUser')->with('success', 'User berhasil di tambahkan');
    
    
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        // $user =User::create($request->all());
        //     return redirect('manageUser')->with('success', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
    $role =  User::find($id)->first();
    $user = Role::get();

    if(!$user){
        return back()->with('error', 'User Not Found');
    }

    return view('manage_user.edit_user')->with([
        "title" => "Edit User",
        'user' => $user,
        'role' => $role,
    ]);
    }

    public function update ( Request $request, $id) {
        try {
            DB::beginTransaction();
            // Logic For Save User Data
    
            $update_user = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id
            ]);
    
            if(!$update_user){
                DB::rollBack();
    
                return back()->with('error', 'Something went wrong while update user data');
            }
    
            DB::commit();
            return redirect()->route('user.manage')->with('success', 'User Updated Successfully.');
    
    
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
}
    // Function Hapus
    public function hapus($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('manageUser')->with('success', 'User berhasil di hapus');

    }
}
