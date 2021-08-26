<?    

//ini_set('session.cookie_secure', 'false');   // true
//ini_set('session.cookie_samesite', 'none');  //same_site none

session_set_cookie_params(1000,'/; samesite=None',"aaa.com ",false,false);
session_start();

echo "SESSION TEST=>".$_SESSION["TEST"];
