<!DOCTYPE html>

<html>
    <head>
    <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
        <title>Q2</title>
    </head>
    <body>
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
        <a href= ' {{ url("create") }} '>創建帳號</a>
<br>
        {{ $users->links() }}
    </body>
</html>