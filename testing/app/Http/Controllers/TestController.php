<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showInfo()
    {
        $users = DB::table('account_info') -> paginate(3);
        return view('Q2', ['users' => $users]);
    }

    public function showAdd(Request $rq)
    {
        $account = $rq->input('account');
        $account = strtolower($account);
        $name = $rq->input('name');
        $gender = $rq->input('gender');
        $birthday = $rq->input('birthday');
        $email = $rq->input('email');
        $note = $rq->input('note');

        $info = new \App\account_info();
        $info -> account = $account;
        $info -> name = $name;
        $info -> gender = $gender;
        $info -> birthday = $birthday;
        $info -> email = $email;
        $info -> note = $note;
        $info -> save();

        return redirect('Q2');
    }

    public function showDelete($account)
    {
        $info = new \App\account_info();
        $duser = $info -> where('account',$account) -> delete();
        return redirect('Q2');
    }

    public function showEdit(Request $rq , $account)
    {
        $name = $rq->input('name');
        $gender = $rq->input('gender');
        $birthday = $rq->input('birthday');
        $email = $rq->input('email');
        $note = $rq->input('note');

        $info = new \App\account_info();
        $upuser = $info -> where('account' , $account);
        $upuser -> update(['name' => $name , 'gender' => $gender , 'birthday' => $birthday , 'email' => $email , 
        'note' => $note]);

        
        return redirect('Q2');
    }

    public function showSearch(Request $rq)
    {
        $users = DB::table('account_info') -> get();
        $type = $rq->input('type');
        $name = $rq->input('search');
        $result = $users -> where($type , $name);
        return view('result', ['searchUser' => $result]);
    }

}
