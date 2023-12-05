<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        {
            $user = auth()->user();

            if ($user && $user->admin) {
                // Redirect admin users to the admin page
                return redirect()->route('admin');
            } else {
                // Redirect regular users to the normal home page
                return redirect()->route('pokemons.index');
            }
        }
    }
}
