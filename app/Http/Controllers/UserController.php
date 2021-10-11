<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function showAction($id){
        $user = User::find($id);
        //$user = User::where("id", "=", $id)->first();
        return view("update", ['user' => $user]);
        // echo $user->email."<br>";
        // echo $user->meno." ".$user->priezvisko."<br>";
        // echo $user->vek."<br>";
        // echo $user->updated_at;
    }

    public function insertAction(Request $request){
        echo "Idem";
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('Email');
        $age = $request->input('age');
        $password = $request->input('password');

        User::create([
            'meno' => $firstname,
            'priezvisko' => $lastname,
            'email' => $email,
            'vek' => $age,
            'heslo' => mt_rand(1,80),
        ]);

        // $user = new User();
        // $user->meno = $firstname;
        // $user->priezvisko = $lastname;
        // $user->email = $email;
        // $user->vek = $age;

        // $user->meno = str_random(5);
        // $user->priezvisko = str_random(8);
        // $user->email = $user->meno.".".$user->priezvisko."@gmail.com";
        // $user->vek = mt_rand(1,80);
        //$user->save();

        return response()->view('adduser');
    }

    public function updateAction($id, Request $request){
        $user = User::find($id);
        //$user = User::where("id", "=", $id)->first();
        $user->update([
            'meno' => $request->input('firstname'),
            'priezvisko' => $request->input('lastname'),
            'email' => $request->input('Email'),
            'vek' => $request->input('age')
        ]);
        return redirect()->action([UserController::class, 'showAllAction']);
        //return view("users", ['users' => $users]);
    }

    public function deleteAction($id){
        $user = User::find($id);
        $user->delete();
    }

    public function showAllAction(){
        $users = User::all();
        return view("users", ['users' => $users]);
    }

    public function getAddUserForm(){
        return view("adduser");
    }
}
