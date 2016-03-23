<?php
// Initialize Login Class
include ( 'models/Login_mdl.php' );
$Login = new Login_mdl();
echo $Login->model;

// All functions for Login Page will be initialized here
login_function();

// Login Template
include ( 'views/login.php' );