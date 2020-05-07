<?php


namespace BacLV\Sample;

use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }
	
    public function index()
    {
        $users = User::all();
        return view('simple::admin')->with('users', $users);
    }
}
