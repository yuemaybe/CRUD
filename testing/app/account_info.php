<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account_info extends Model
{
    protected $table = 'account_info';

    public function userAdd($rq)
    {
        $account = $rq->input('account');
        $account = $rq->input('account');
        $account = strtolower($account);
        $name = $rq->input('name');
        $gender = $rq->input('gender');
        $birthday = $rq->input('birthday');
        $email = $rq->input('email');
        $note = $rq->input('note');

        $test = 12345660000;

        $this -> account = $account;
        $this -> name = $name;
        $this -> gender = $gender;
        $this -> birthday = $birthday;
        $this -> email = $email;
        $this -> note = $note;
        $this -> save();

    }

    public function userDelete($account)
    {
        $this -> where('account',$account) -> delete();
    }

    public function userUpdate($rq,$account)
    {
        $name = $rq->input('name');
        $gender = $rq->input('gender');
        $birthday = $rq->input('birthday');
        $email = $rq->input('email');
        $note = $rq->input('note');

        $this -> where('account', $account) -> update(['name' => $name , 'gender' => $gender , 'birthday' => $birthday , 'email' => $email , 
        'note' => $note]);
    }

    public function userSearch($rq)
    {
        $type = $rq->input('type');
        $name = $rq->input('search');
        $result = $this -> where($type , $name) -> get();
        return $result;
    }

    public function userShow()
    {
        return $this->all();
    }

    
}
