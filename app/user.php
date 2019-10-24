<?php

/**
 *
 */
function registerUser() {
    global $connection;
    global $msg;

    if(isset($_POST['register'])) {

        $username 		= $_POST['username'];
        $user_password  = $_POST['password'];
        $user_fname	    = $_POST['first_name'];
        $user_lname		= $_POST['last_name'];
        $user_role		= $_POST['role'];


        if(!empty($username) && !empty($user_password) && !empty($user_fname) && !empty($user_lname) && !empty($user_role)
              && ($user_role != "standard_user" || $user_role != "admin")) {
            $username 		= mysqli_real_escape_string($connection, $username);
            $user_password 	= mysqli_real_escape_string($connection, $user_password);
            $user_fname 	= mysqli_real_escape_string($connection, $user_fname);
            $user_lname 	= mysqli_real_escape_string($connection, $user_lname);
            $user_role 	    = mysqli_real_escape_string($connection, $user_role);


            $q = "SELECT randsalt FROM users";
            $select_randsalt = mysqli_query($connection, $q);
            confirmQuery($select_randsalt);

            $row = mysqli_fetch_array($select_randsalt);
            $salt = $row['randsalt'];

            $password = crypt($user_password, $salt);

            if($user_role == "admin") {
                $user_role = 1;
            } else {
                $user_role = 2;
            }

            $q = "INSERT INTO users (username, password, first_name, last_name, role) ";
            $q .= "VALUES('{$username}', '{$password}', '{$user_fname}', '{$user_lname}', '{$user_role}')";
            $register_user = mysqli_query($connection, $q);
            confirmQuery($register_user);

            $msg = "Your registration has been submitted!";
        } else {
            $msg = "Fields can't be submitted!";
        }
    } else {
        $msg = "";
    }
}

function logInUser() {

    global $connection;
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $q = "SELECT * FROM users WHERE username  = '$username'";
        $selectUser = mysqli_query($connection, $q);
        confirmQuery($selectUser);

        while($row = mysqli_fetch_array($selectUser)) {
            $db_user_id     = $row['id'];
            $db_username    = $row['username'];
            $db_password    = $row['password'];
            $db_firstname   = $row['first_name'];
            $db_lastname    = $row['last_name'];
            $db_user_role   = $row['role'];
        }

        if(password_verify($password, $db_password)) {
            $user_session = array(
                'user_id'   => $db_user_id,
                'username'  => $db_username,
                'fname'     => $db_firstname,
                'lname'     => $db_lastname,
                'role'      => $db_user_role,
            );

            $_SESSION['user'] = $user_session;

            redirectTo("dashboard.php");
        } else {
            redirectTo("index.php");
        }


    }

}

function isLoggedIn() {
    if(isset($_SESSION['user'])) {
        return true;
    }

    return false;
}

function userLogOut(){
    session_destroy();
    redirectTo("index.php");
}

function isAdmin ($userRole) {
    if($userRole == 1) {
        return true;
    }
    return false;
}