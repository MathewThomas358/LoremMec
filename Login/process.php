<?php
session_start();

$connect = mysql_connect('localhost', 'root', '', 'mecdata') or die('Database could not connect');
$select = mysql_select_db('test', $connect) or die('Database could not select');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    chckusername($username, $password);
}

function chckusername($username, $password){

    $check = "SELECT * FROM data WHERE username='$username'";
    $check_q = mysql_query($check) or die("<div class='loginmsg'>Error on checking Username<div>");

    if (mysql_num_rows($check_q) == 1) {
        chcklogin($username, $password);
    }
    else{
        echo "<div id='loginmsg'>Wrong Username</div>";
    }
}

function chcklogin($username, $password){

    $login = "SELECT * FROM data WHERE username='$username'  and password='$password'";
    $login_q = mysql_query($login) or die('Error on checking Username and Password');

    if (mysql_num_rows($login_q) == 1){
        echo "<div id='loginmsg'> Logged in as $username </div>"; 
        $_SESSION['username'] = $username;
        header('Location: ../Login_Success/LoginSucc.php');
    }
    else {
        echo "<div id='loginmsg'>Wrong Password </div>"; 
        //header('Location: login-problem.php');
    }
}
?>