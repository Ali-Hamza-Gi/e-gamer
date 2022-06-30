<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function fetch_all_players(Request $request)
    {
        $all_players = User::orderBy('id', 'desc')->where('user_type', 'player')->get();
        return view('admin.players.players',compact('all_players'));
    }
    public function delete_player($id)
    {
        $delete_player = User::find($id);
        $delete_player->delete();
        return redirect()->route('fetch.all.players')->with('error', 'Player Deleted Successfully');
    }
}
