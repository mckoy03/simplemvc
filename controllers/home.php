<?php
// Initialize Login Class
include ( 'models/Home_mdl.php' );
$Home = new Home_mdl();
echo $Home->model;

// All functions for Home Page will be initialized here
home_function();

// Home Template
include ( 'views/home.php' );