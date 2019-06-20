<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\User as UserEloquent;
use Auth;

class SchoolController extends Controller
{
    public function edit()
    {
        return view('edit');
    }

    public function store(EditRequest $request)
    {
        $user = UserEloquent::findOrFail(Auth::user()->id);
        $user->name = $request->name;
        $user->student->tel = $request->tel;
        $user->student->save();
        $user->save();
        return view('edit', ['msg' => '修改成功']);
    }
}