<?php

    include_once ("./controller/routes.php");

    $method = $_SERVER['REQUEST_METHOD'];
    $paths = explode('/', trim($_GET['url']));

    // var_dump ($method, $paths[0],$paths[1]);
    $resource   = array_shift($paths);
    $id         = array_shift($paths);
    routes($method, $resource, $id);

    // $method = $_SERVER['REQUEST_METHOD'];
    
    // $paths = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    // $resource = array_shift($paths);
    // $id = array_shift($paths);

    // routes($method, $resource, $id);