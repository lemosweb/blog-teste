<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

	public function __construct(User $user){

		$this->user = $user;

	}

    public function index()
    {
    	return view('admin.user.index');
    }

    public function create()
    {        	
    	$role = ['admin', 'user'];

    	return view('admin.user.create', compact('role'));
    }

    public function store(Request $request)
    {

    	dd($request->all());

    	if($request['password'] != $request['retypepassword']) {

    		return redirect()->route('user.create');	

    	}

    	unset($request['retypepassword']);


    	$this->user->create($request->all());


    	return redirect()->route('user.index');


    }

}
