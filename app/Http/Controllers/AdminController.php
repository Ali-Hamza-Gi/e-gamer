<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function fetch_all_players(Request $request)
    {
        $all_players = User::orderBy('id', 'desc')->where(['user_type' => 'player', 'is_admin' => 0])->get();
        return view('admin.players.players',compact('all_players'));
    }
    public function delete_player($id)
    {
        $delete_player = User::where(['id' => $id , 'user_type' => 'player'])->firstOrFail();
        $delete_player->delete();
        return redirect()->route('fetch.all.players')->with('error', 'Player Deleted Successfully');
    }
    public function fetch_all_brands(Request $request)
    {
        $all_brands = User::orderBy('id', 'desc')->where(['user_type' => 'brand', 'is_admin' => 0])->get();
        return view('admin.brands.brands',compact('all_brands'));
    }
    public function delete_brand($id)
    {
        $delete_brand = User::where(['id' => $id, 'user_type' => 'brand'])->firstOrFail();
        $delete_brand->delete();
        return redirect()->route('fetch.all.brands')->with('error', 'Brand Deleted Successfully');
    }
}
