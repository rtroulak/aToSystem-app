<?php
header('Content-Type: text/html; charset=utf-8');

echo $_COOKIE[$cookie_username]." - ".$_COOKIE[$cookie_password];
unset($_COOKIE['username']);
unset($_COOKIE['password']);
$_COOKIE['username']='';
$_COOKIE['password']='';
session_start();


?>

<!DOCTYPE html>
<!--App: atosystem-->
<!--Company: atoinsurance-->
<!--Dev: rtroulak-->
<!--Date: 4/1/2019-->
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>aToSystem</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <img style="display: block;margin: 0 auto;" width="600px" height="150px" src="assets/images/whitelogo.png">
        <h1 style="color:white" align="center">ATOSystem</h1>
        <br>
        <br>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"> </label>
        <div class="login-form">
            <form class="sign-in-htm" action="app.php" method="POST">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="username" name="username" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="password" name="password" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Log In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                <a href="#forgot">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>