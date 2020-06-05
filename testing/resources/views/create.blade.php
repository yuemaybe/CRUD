<!DOCTYPE html>

<html>
    <head>
        <title>create</title>
    </head>
    <body>

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
        

    </body>
</html>