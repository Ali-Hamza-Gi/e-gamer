<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function user_home()
    {

        return view('front.home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user_profile()
    {
        $user =  User::where('id', Auth::user()->id)->first();
        return view('front.profile',compact('user'));
    }
    public function user_profile_update(Request $request)
    {
        $this->validate(request(),[
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'gaming_name'=> 'required|string|max:255',
            'dob'=> 'required|string|max:255',
            'city'=> 'required|string|max:255',
            'image' => 'mimes:jpeg,jpg,png|max:10000'
        ]);

        $user_id = Auth::user()->id;
        $user_profile_update = User::findOrFail($user_id);
        $user_profile_update->first_name = $request->first_name;
        $user_profile_update->last_name = $request->last_name;
        $user_profile_update->gaming_name = $request->gaming_name;
        $user_profile_update->dob = $request->dob;
        $user_profile_update->city = $request->city;
        if($request->hasfile('image'))
        {
            $destination = 'upload/profile/' .$user_profile_update->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('upload/profile/', $filename);
            $user_profile_update->image = $filename;

        }
        $user_profile_update->update();
        return back()->with('success', 'User Profile Updated Successfully');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.home');
    }
    public function user_cover_image(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        if ($request->hasfile('file')) {
            $this->validate($request, [
                'file' => 'required|mimes:gif,png,jpg,jpeg',
            ]);
            if (file_exists($user->cover_image)) {
                unlink($user->cover_image);
            }
            $file = microtime() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads/cover_images'), $file);
            $user->cover_image = 'uploads/cover_images/' . $file;
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Cover Image Upload Sucessfully'
            ]);
        }
    }
    public function user_profile_image(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        if ($request->hasfile('file')) {
            $this->validate($request, [
                'file' => 'required|mimes:gif,png,jpg,jpeg',
            ]);
            if (file_exists($user->image)) {
                unlink($user->image);
            }
            $file = microtime() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads/profile'), $file);
            $user->image = 'uploads/profile/' . $file;
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Cover Image Upload Sucessfully'
            ]);
        }
    }

}
