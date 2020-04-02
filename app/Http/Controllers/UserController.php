<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  User  $user
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, User $user)
    {
        $oldPhoto = User::find($user->id)->photo;

        $user->update($request->all());

        if ($request->hasFile('photo')) {

            Storage::delete(str_replace('/s3', '', $oldPhoto));

            $name = 'photo.' . $request->photo->extension();

            $env = config('app.env');

            $path = '/' . $env . '/users/' . $user->id . '/img/';

            $s3 = Storage::disk('s3')->putFileAs($path, $request->file('photo'), $name, 'public');

            $user->photo = "/s3" . $path . $name;

            $user->save();
        }

        return back();
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

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        $menu = "profile";

        $user = Auth::user();

        $roles = $user->roles;

        return view('profile', compact('menu', 'user', 'roles'));
    }
}
