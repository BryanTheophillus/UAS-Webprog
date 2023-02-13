<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AccoutManagement(){
        $Accounts = Account::paginate(7);
        return view('AccountMaintanance',compact('Accounts'));
    }

    public function Update($id){
        $Account = Account::find($id);
        $roles = Role::All();
        return view('updateRole', compact('Account','roles'));
    }

    public function UpdateRole($id, Request $request){
        $Account = Account::find($id);

        $request->validate([
            'Role' => 'required',
        ]);

        if (isset($request->Role)) {
            $Account->role_id = $request->Role;
        }
        $Account->save();
        return redirect('/AccoutManagement');
    }

    public function DeleteAccount($id){
        $Account = Account::find($id);
        if(isset($Account)){
            $Account->delete();
        }
        return redirect('/AccoutManagement');
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
