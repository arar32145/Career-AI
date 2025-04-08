<!DOCTYPE html>
<html>
    <head>
        <title>QUESTIONS</title>
    </head>

    <body>
        <form method="post" action="{{ route('admin.login') }}">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            
            <button type="submit">Login</button>
        </form>
    </body>
</html>