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
            $this->uploadProfileAvatar($user, $request->file('photo'), $oldPhoto);
        }

        return back();
    }

    /**
     * Update the profile.
     *
     * @param  UpdateRequest  $request
     * @return RedirectResponse
     */
    public function updateProfile(UpdateRequest $request)
    {
        $user = Auth::user();

        $oldPhoto = $user->photo;

        $user->update($request->all());

        if ($request->hasFile('photo')) {
            if ($request->hasFile('photo')) {
                $this->uploadProfileAvatar($user, $request->file('photo'), $oldPhoto);
            }
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
     * Show the profile.
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

    /**
     * Upload profile avatar
     *
     * @return void
     */
    public function uploadProfileAvatar($user, $file, $oldPhoto)
    {
        Storage::delete(str_replace('/s3', '', $oldPhoto));

        $name = 'photo.' . $file->extension();

        $env = config('app.env');

        $path = '/' . $env . '/users/' . $user->id . '/img/';

        $s3 = Storage::disk('s3')->putFileAs($path, $file, $name, 'public');

        $user->photo = "/s3" . $path . $name;

        $user->save();
    }
}
