<?php

$time = microtime(true);
$options =['cost'=>12];
echo password_hash("kdgwdbwjadbw", PASSWORD_BCRYPT, $options);
echo "\ntook"  . (microtime(true) - $time), "sec";
/*
if (password_verify("kdgwdbwjadbw", '$2y$12$AyuuFhq/7wPasjpHr3dYiutJ9tbofW.eFYH83MYeelhAeOGLHzENy')) {
    print("password correct");
} else {
    print("password wrong");
}
*/
