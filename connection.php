<?php
    $db_hostname="localhost";
    $db_username="admin";
    $db_password="123";
    $db_name="uma";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="Insert into users(name,email,phone,subject,message) values ('$name','$email','$phone','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    // echo "We will contact you soon";

    echo '<script>
    alert("successful submit");
    location.href="contact-us.html"
    </script>'
    // mysqli_close($conn);
 
?>