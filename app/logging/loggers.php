<?php

function console_log($thing)
{
    file_put_contents("php://stdout", $thing);
}

function console_error($thing)
{
    error_log($thing);
}