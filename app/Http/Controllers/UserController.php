<?php

namespace App\Http\Controllers;

use App\Boat;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller {


    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view ( 'users', [
            'users' => User::orderBy ( 'id', 'asc' )->get (),
        ] );
    }
    
        public function profile($user) {

        $userobj = User::where("name", $user)->get()->first();

        return view ( 'userprofile', [
            'user' => $userobj,
            'boats' => Boat::where("ownerid", $userobj->id)->get()]);
    }

    public function edit($name)
    {
        return view("user_edit", array("user" => User::where("name",$name)->get()->first()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view ( 'user_create', [] );
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate ( $request, [
            'name' => 'max:255',
            'email' => 'max:255',
            'password' => 'max:255',
            'phone' => 'max:255',
            'adress_street' => 'max:255',
            'adress_nr' => 'max:255',
            'adress_zipcode' => 'max:255',
            'address_city' => 'max:255',
            'pays_electricity' => 'between:0,1',
        ] );

        $default_password = bcrypt("default_password");

        $user = User::create ( [
            'name' => $request ['name'],
            'email' => $request ['email'],
            'password' => $default_password,
            'phone' => $request ['phone'],
            'adress_street' => $request ['adress_street'],
            'adress_nr' => $request ['adress_nr'],
            'adress_zipcode' => $request ['adress_zipcode'],
            'adress_city' => $request ['adress_city'],
            'pays_electricity' => $request ['pays_electricity'],

        ] );


        $user->email = $request ['email'];
        $user->password =  $default_password;
        $user->phone = $request ['phone'];
        $user->adress_street = $request ['adress_street'];
        $user->adress_nr = $request ['adress_nr'];
        $user->adress_zipcode = $request ['adress_zipcode'];
        $user->adress_city = $request ['adress_city'];
        $user->pays_electricity = $request ['pays_electricity'];

        if (strlen ( $request ['password'] ) > 0) {
            $this->validate ( $request, [
                'password' => 'required|confirmed|min:6'
            ] );
            $user->password = bcrypt ( $request ['password'] );
        }

        $user->save ();
        return redirect ( 'user' )->with( 'success', $user->name.' is toegevoegd.' );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate ( $request, [
            'name' => 'max:255',
            'email' => 'max:255',
            'password' => 'max:255',
            'phone' => 'max:255',
            'adress_street' => 'max:255',
            'adress_nr' => 'max:255',
            'adress_zipcode' => 'max:255',
            'address_city' => 'max:255',
            'pays_electricity' => 'between:0,1',
        ] );

        $user = User::findorfail ( $id );
        $user->name = $request ['name'];
        $user->email = $request ['email'];
        $user->phone = $request ['phone'];
        $user->adress_street = $request ['adress_street'];
        $user->adress_nr = $request ['adress_nr'];
        $user->adress_zipcode = $request ['adress_zipcode'];
        $user->adress_city = $request ['adress_city'];
        $user->pays_electricity = $request ['pays_electricity'];
        $user->save ();

        return redirect ( 'user' )->with( 'success', $user->name.' is bijgewerkt.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $currentuser = Auth::user ();
        if ($id == $currentuser->id) {
            return redirect ( 'user' );
        }

        $user = User::findorfail ( $id );
        $user->delete ();
        return redirect ( 'user' );
    }
}
