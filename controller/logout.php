<?php

session_start();

include_once 'verificaLogin.php';
session_destroy();

echo " <script>
            window.location.href = '../index.php';
        </script>";

exit();

?>