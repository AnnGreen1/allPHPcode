<?php
    session_start();
    echo '<pre>';
    print_r($_SESSION);
    echo '<br>';
    $_SESSION['first']=1;
    echo $_SESSION['first'];
    echo '<br>';
    print_r($_SESSION);