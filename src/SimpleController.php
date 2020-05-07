<?php


namespace BacLV\Simple;

use App\Http\Controllers\Controller;
use App\User;

class SimpleController extends Controller
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
