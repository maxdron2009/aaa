<?  

//session_set_cookie_params(100000,'/','samesite=none',"ifrm.com",false,false);
//session_set_cookie_params(1000,'/; samesite=None',"1c_mat.com",false,false
header("Set-Cookie: Kal=100; path=/; domain=aaa.com; Secure; SameSite=None");
session_start();

$_SESSION["TEST"]=100;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>

<title>Test</title>
<meta name="Description" content=""/>
<meta name="Keywords" content="" />
<meta name="robots" content="all"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="jquery.min.js"></script>

<script>

function GoAjax()
{
       $.ajax({
            url: 'server.php',
            method: 'post',
            dataType: 'html',
            data: {'Mode':1,
                   'Value': 100 },
            success: function(data)
			{
				alert(data);
            }
	   });
}


</script>


</head>

<body id="body">


<? echo "TEST=".$_SESSION["TEST"]; ?>

<button onClick="GoAjax();">Go</button> 

</body>
</html>

