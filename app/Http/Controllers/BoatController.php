<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Boat;

class BoatController extends Controller
{



        public function create($name) {
        return view ( 'boat_create', array("user" => User::where("name",$name)->get()->first()));
    }

    public function edit($name, $id)
    {
        return view ( 'boat_edit', [
            "user" => User::where("name",$name)->get()->first(),
            'boat' => Boat::where("id", $id)->get()->first()]);
    }

    public function update(Request $request, $id) {

        $default_image_url = "default.jpg";

        $boat = Boat::findorfail ( $id );
        $boat->name = $request ['name'];
        $boat->length = $request ['length'];
        $boat->picture = $default_image_url;
        $boat->isPrimary = $request ['isPrimary'];
        $boat->ownerId = $request ['ownerId'];

        $redirect_user = User::where("id",$boat->ownerId)->get()->first();

        $boat->save();
        return redirect ( 'userprofile/'.$redirect_user->name );

        return redirect ( 'user' )->with( 'success', $user->name.' is bijgewerkt.' );
    }

    public function destroy($id) {

        $boat = Boat::findorfail ( $id );
        $redirect_user = User::where("id",$boat->ownerId)->get()->first();
        $boat->delete ();
        return redirect ( 'userprofile/'.$redirect_user->name );
    }



    public function store(Request $request)
    {
        $default_image_url = "default.jpg";

        $boat = Boat::create([
            'name' => $request ['name'],
            'length' => $request['length'],
            'picture' => $default_image_url,
            'isPrimary' => $request['isPrimary'],
            'ownerId' => $request['ownerId']

        ]);

        $boat->name = $request ['name'];
        $boat->length = $request ['length'];
        $boat->picture = $default_image_url;
        $boat->isPrimary = $request ['isPrimary'];
        $boat->ownerId = $request ['ownerId'];

        $redirect_user = User::where("id",$boat->ownerId)->get()->first();

        $boat->save();
        return redirect ( 'userprofile/'.$redirect_user->name );
    }
}
