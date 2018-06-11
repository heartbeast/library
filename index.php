<!DOCTYPE html>
<html>

<head>
<title>Login</title>
<meta http-equiv="content-Type" content="text/html" charset="utf-8">

<link rel="stylesheet" type="text/css" href="tmp/style.css">

</head>
<body>
<div class="content" >
<form id="main" method="post" class="mainForm" action="check_login.php">
    <div class="title"><p>Welcome to xXx</p></div>
    <div class="normalInput">
        <input type="text" id="username" name="username" placeholder="账户名"> 
    </div>
    <div class="normalInput">
        <input type="text" id="password" name="passcode" placeholder="密码">
    </div>
    <div class="normalInput">
        <input type="text" id="extra" name="extra" placeholder="其它参数">
    </div>
    <input type="submit" class="fullBtnBlue" name="Submit" value="Submit" />
</form>
</div>
<div style="text-align:center;">
</div>
</body>

<script>
$(document).ready(
    function() { 
        $("input[name='username']").focus();
    }
);
</script>

</body>
</html>
