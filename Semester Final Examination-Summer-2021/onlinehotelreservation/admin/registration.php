<?php
include_once 'include/class.user.php'; 
$user=new User(); 
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $register=$user->reg_user($fullname, $uname, $upass, $uemail); 
    if($register) 
    { 
        echo "
<script type='text/javascript'>
    alert('Your Manager has been Added Successfully');
</script>"; 
        echo "
<script type='text/javascript'>
    window.location.href = '../admin.php';
</script>"; 
    } 
    else 
    {
        echo "
<script type='text/javascript'>
    alert('Registration failed! username or email already exists');
</script>";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
    <script language="javascript" type="text/javascript">
        function submitreg() {
            var form = document.reg;
            if (form.name.value == "") {
                alert("Enter Name.");
                return false;
            } else if (form.uname.value == "") {
                alert("Enter username.");
                return false;
            } else if (form.upass.value == "") {
                alert("Enter Password.");
                return false;
            } else if (form.uemail.value == "") {
                alert("Enter email.");
                return false;
            }
        }
    </script>
</head>



</html>