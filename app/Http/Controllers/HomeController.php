<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\Facades\DataTables;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $users = User::paginate(10);
        // $users = User::all();
        return view('home', compact('users'));
    }

    public function getUsers()
    {
        return DataTables::of(User::query())->make(true);
        // return DataTable::of(User::query())->make(true);
    }
}
