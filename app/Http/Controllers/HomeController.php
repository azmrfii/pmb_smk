<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('is.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function admin()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dash');
    }

    public function update_user(Request $request, $id)
    {
        $data = Auth::user()->id;

        $name = $request->input('name');
        $username = $request->input('username');
        
        User::where('id', Auth::user()->id)->update([
            'name' => $name,
            'username' => $username,
        ]);
        return redirect()->route('admin/home')->with('message', 'Successfully managed to change user !');
    }
}
