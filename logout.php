<?php
echo"logout";
    session_start();
    session_destroy();
    header('location:http://localhost/projects/login-form.html');
     
?>