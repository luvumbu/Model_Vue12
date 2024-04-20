<?php
function verif_file_name($filename)
{
    if (!file_exists($filename)) {
        header('Location:../');
        exit();
    }
}
?>