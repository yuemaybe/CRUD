@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<html>
    <head>
    <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
        <title>Q2</title>
    </head>
    <body>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
    <div class="card-body">
    
        <table border='1'>
            <tr>
                <td>account</td>
                <td>name</td>
                <td>gender</td>
                <td>birthday</td>
                <td>email</td>
                <td>note</td>
            </tr>

            @foreach ($users as $user)
            <tr>
                <td>{{ $user->account }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->birthday }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->note }}</td>

                <td>
                    <form action='delete/{{ $user->account }}' method='POST'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                        <button>刪除</button>
                    </form>

                    <form action='edit/{{ $user->account }}' method='POST'>
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                        <button>編輯</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
<br>
{{ $users->links() }}
<a href= ' {{ url("create") }} '>創建帳號</a>
<br><br>
<form action='search' method='GET'>
    <label>搜尋</label>
    <select name='type'>
        <option value='account'>Account</option>
        <option value='name'>Name</option>
        <option value='email'>Email</option>
    </select>
    <input type='text' name='search' />
    <button type='submit'>開搜</button>
</form>
<br>

    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>
@endsection