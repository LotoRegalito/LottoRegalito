<?php


comprobar();
function comprobar()
{
    session_start();
    if (isset($_SESSION['data'])) {
        echo 'true';
        return;
    } elseif (!isset($_SESSION['data'])) {
        echo 'false';
        return;
    }
}
