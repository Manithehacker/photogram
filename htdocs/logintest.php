<?php

include 'libs/load.php';


$user='priya';
$pass=isset($_GET['pass']) ? $_GET['pass'] : '';
//$pass ='vel1234';
$result =null;
if (isset($_GET['logout'])) {
    session::destroy();
    die("session destroyed, <a href='logintest.php'>login again</a>");
}
if (session::get('is_loggedin')) {
    $username = session::get('session_username');
    $userobj = new user($user);
    //  print("welcome back".$username['username']);
    print("wecome back". $userobj->getusername());
    // print("<br>".$userobj->getbio());
    $userobj->setbio("making new things...");
    //print("<br>".$userobj->getbio());
} else {
    printf("no session found trying to login now..<br>");
    $result =user::login($user, $pass);
    if ($result) {
        $userobj = new user($user);
        print("login success".$userobj->getusername());
        session::set('is_loggedin', true);
        session::set('session_username', $result);
    } else {
        //   print("login failed..,$user<br><br>");
    }
}
echo <<< EOL
<a href="logintest.php?logout">logout</a>
EOL;
