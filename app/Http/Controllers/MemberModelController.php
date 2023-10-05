<?php

namespace App\Http\Controllers;
use App\Models\MemberModel;//import gareko

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class MemberModelController extends Controller
{
    function addData(Request $request){
        $member = new MemberModel();
        $member->name=$request->name;
        $member->email=$request->email;
        // $member->password=$request->password;
        // $member->password=Hash::make($request->password);
        $member->password=Crypt::encrypt($request->password);
        $member->save();
        // $member->Session()->flash('myKey', "My message");
        // return redirect('/add');
        // return back();
        return redirect()->back()->with('myKey', 'Record is added successfully');

    }
}
