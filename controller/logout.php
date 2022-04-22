<?php

session_start();

include_once 'verificaLogin.php';
session_destroy();

echo " <script>
                alert('Sessão encerrada');

                window.location.href = '../index.php';
            </script>";

exit();

?>