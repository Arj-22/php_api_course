<?php

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

echo $password_hash; 
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    </head>
    <body>
        <main class="container">
            <h1>Get a Hash</h1>

            <form method="post">
                <label for="password">
                    Password
                    <input type="password" name="password" id="password">
                </label>

                <button>Get Hash</button>
            </from>
        </main>

    </body>
</html>