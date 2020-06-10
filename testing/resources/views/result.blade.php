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
            @foreach ($searchUser as $shuser)
            <tr>
                <td>{{ $shuser->account }}</td>
                <td>{{ $shuser->name }}</td>
                <td>{{ $shuser->gender }}</td>
                <td>{{ $shuser->birthday }}</td>
                <td>{{ $shuser->email }}</td>
                <td>{{ $shuser->note }}</td>
            </tr>
            @endforeach
    </table>

<br>

    <form action='Q2' method='GET'>
        <button type='submit'>回上頁</button>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>
@endsection