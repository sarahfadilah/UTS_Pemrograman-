<?php
// d-flex align-items-center justify-content-center vh-100
session_start();

$list_user = [
    [
        'username' => 'sarahfadilah',
        'email' => 'sarahfadilah37@gmail.com',
        'password' => '12345'
    ]
];

$not_found = false;
foreach ($list_user as $key => $value) {
    if ($value['email'] == $_REQUEST['email']) {
        if ($value['password'] == $_REQUEST['password']) {
            $_SESSION['username'] = $value['username'];
            header("location: index.php");
        } else {
            $_SESSION['error'] = 'Password Salah';
            $not_found = true;
        }
    } else {
        $_SESSION['error'] = 'Email tidak terdaftar';
        $not_found = true;
    }

    if ($not_found == true) {
        header("location: login.php");
    }
}