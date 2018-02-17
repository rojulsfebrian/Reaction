<?php
echo
"\033[1;32m
                                                                                          
                                 |[ D-error Cyber4rt ]|
                 #####################################################
                 #               AUTO REACTION FACEBOOK              #
                 #                     Powered By:                   #
                 #                                                   #
                 #                   ROJULS FEBRIAN                  #
                 #                                                   #
                 #      Do Not Use This Tool For IllegaL Purpose     #
                 #####################################################
\n";

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'EMAIPMU'; // facebook username / email
$pass 		= 'PASSWORDMU'; // facebook passwod
$r_male		= '2'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '1000'; // maximum reacted status
$token 		= 'TOKENMU';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
