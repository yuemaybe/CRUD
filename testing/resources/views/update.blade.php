@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<html>
    <head>
        <title>update</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">

        <table border='2'>
                <tr>
                    <td>account</td>
                    <td>name</td>
                    <td>gender</td>
                    <td>birthday</td>
                    <td>email</td>
                    <td>note</td>
                </tr>

                
                @foreach ($users as $user)
                <form action='../update/{{ $user->account }}' method='POST'>
                <tr>
                    <td> {{ $user->account }} </td>
                    <td> <input value='{{ $user->name }}' type='text' name='name'> </td>
                    <td> 
                    <select name='gender'>
                    <option value='0'>男性</option>
                    <option value='1'>女性</option>
                    </select> 
                    </td>
                    <td> <input value='{{ $user->birthday }}' type='date' name='birthday'> </td>
                    <td> <input value='{{ $user->email }}' type='email' name='email'> </td>
                    <td> <input value='{{ $user->note }}' type='text' name='note'> </td>

                    <td>
                        
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <button>更改</button>
                
                    </td>
                </tr>
                </form>
                @endforeach

            </table>
    </div>
    </div>
    </div>
    </body>
</html>
@endsection