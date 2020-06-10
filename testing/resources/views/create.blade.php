@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<html>
    <head>
        <title>create</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
    <div class="card-body">

    <form method='POST' action='add' enctype='multipart/form-data'>
    <input type='hidden' name='_token' value='{{csrf_token()}}'/>


        <label>Account : </label>
        <input type='text' name='account' required/><br><br>

        <label>Name : </label>
        <input type='text' name='name' required/><br><br>

        <label>Gender : </label>
        <select name='gender'>
            <option value='0'>男性</option>
            <option value='1'>女性</option>
        </select><br><br>

        <label>Birthday : </label>
        <input type='date' name='birthday' required/><br><br>

        <label>Email : </label>
        <input type='email' name='email' required/><br><br>

        <label>Note : </label>
        <input type='text' name='note' required/><br><br>

        <button type='submit'>創建</button>

    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
        

    </body>
    
</html>
@endsection