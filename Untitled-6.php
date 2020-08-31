
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit']))
            $email = $_POST['email'];
                $pass = $_POST['password'];
                if(email=="admin" and pass=="admin"){
                    echo ('Login succcessfuly');
                }
                else
                {
                    echo ('Please enter correct email and password');
                }
				


?>
</body>
</html>