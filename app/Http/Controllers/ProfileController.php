<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{


    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        //dd($follows);
        return view('profile.index', compact('user', 'follows'));
    }
    public function edit(User $user)
    {


        $this->authorize('update', $user->profile);
        return view('profile.edit', compact('user'));
    }
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);
        if (request('image')) {

            $imagePaht = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePaht}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePaht];
        }

        auth()->user()->profile->update(array_merge($data, $imageArray ?? []));
        return redirect("/Profile/{$user->id}");
    }
}
