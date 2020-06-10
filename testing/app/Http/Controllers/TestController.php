<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showInfo()
    {
        $users = DB::table('account_info')->orderBy('created_at','desc')->paginate(3);
        return view('Q2', ['users' => $users]);
    }

    public function showAdd(Request $rq)
    {
        
        $info = new \App\account_info();
        $info->userAdd($rq);
        return redirect('Q2');
    }

    public function showDelete($account)
    {
        $info = new \App\account_info();
        $info -> userDelete($account);
        return redirect('Q2');
    }

    public function showEdit(Request $rq , $account)
    {
        $info = new \App\account_info();
        $info -> userUpdate($rq, $account);
        
        return redirect('Q2');
    }

    public function showSearch(Request $rq)
    {

        $info = new \App\account_info();
        $result = $info -> userSearch($rq);
        return view('result', ['searchUser' => $result]);

    }

}
