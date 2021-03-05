<?php

namespace App\Http\Controllers;

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
        $users = User::all();

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = [
            'Laki - laki',
            'Perempuam'
        ];

        return view('admin.users.create', [
            'genders' => $genders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'           => 'required|numeric',
            'name'          => 'required',
            'domicile'      => 'nullable',
            'date_of_birth' => 'required|date',
            'gender'        => 'required',
            'phone_number'  => 'required|numeric',
            'username'      => 'required',
            'email'         => 'required|email',
            'password'      => 'required',
            'domicile'      => 'required'
        ]);

        $data = [];
        foreach ($request->all() as $key => $value) {
            $data[$key] = $value;
        }

        return User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'nik'           => $data['nik'],
            'domicile'      => $data['domicile'],
            'date_of_birth' => $data['date_of_birth'],
            'gender'        => $data['gender'],
            'phone_number'  => $data['phone_number'],
            'username'      => $data['username']
        ]);

        return redirect(route('admin.users.create'))->with('status', 'Data pengguna berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        $genders = [
            'Laki - laki',
            'Perempuan'
        ];

        return view('admin.users.edit', [
            'genders' => $genders,
            'users' => $User
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        $request->validate([
            'nik'           => 'required|numeric',
            'name'          => 'required',
            'domicile'      => 'nullable',
            'date_of_birth' => 'required|date',
            'gender'        => 'required',
            'phone_number'  => 'required|numeric',
            'username'      => 'required',
            'email'         => 'required|email',
            'password'      => 'required',
            'domicile'      => 'required'
        ]);

        $data = [];
        foreach ($request->all() as $key => $value) {
            $data[$key] = $value;
        }

        $data['password'] = Hash::make($request['password']);

        $User->update($data);

        return redirect(route('admin.users.index'))->with('status', 'Data pengguna berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        $User->destroy($User->id);

        return redirect(route('admin.users.index'));
    }
}
