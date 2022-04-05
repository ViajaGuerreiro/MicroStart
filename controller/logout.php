<?php

session_start();
session_destroy();

echo " <script>
                alert('Sessão encerrada');

                window.location.href = '../index.php';
            </script>";

exit();

?>