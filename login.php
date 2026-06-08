<?php
include "header.php";
?>
<style>
    .login {
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    background-color: #f2f2f2;}

    input {
        margin: 5px;
        width: 80%;
    }
</style>

<section>
    <form action="sv_login.php" method="post">
        <div class="login">
        <input type="text" placeholder="username" name="username"><br>
        <input type="password" placeholder="password" name="password"><br>
        <button type="submit">Login Bosqu!</button>
        </div>
    </form>
</section>