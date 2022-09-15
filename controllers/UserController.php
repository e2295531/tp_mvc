<?php
function user_controller_index()
{
    user_controller_checkSession();
    require(MODEL_DIR . '/user.php');
    $data = user_model_list();

    //print_r($data);
    render(VIEW_DIR . '/user/index.php', $data);
}

function user_controller_create()
{;

    render(VIEW_DIR . '/user/create.php');
}

function user_controller_insert($request)
{
    user_controller_checkSession();
    require(MODEL_DIR . '/user.php');
    user_model_insert($request);
    header("Location: ?module=user&action=index");
}

function user_controller_view($request)
{

    user_controller_checkSession();
    require(MODEL_DIR . '/user.php');
    $data = array('user' => user_model_view($request));

    render(VIEW_DIR . '/user/view.php', $data);
}

function user_controller_edit($request)
{
    user_controller_checkSession();
    require(MODEL_DIR . '/user.php');
    user_model_edit($request);
    header("Location: ?module=user&action=index");
}

function user_controller_delete($request)
{
    user_controller_checkSession();
    require(MODEL_DIR . '/user.php');
    user_model_delete($request);
    header("Location: ?module=user&action=index");
}

function user_controller_login()
{
    require(MODEL_DIR . '/user.php');


    //print_r($data);
    render(VIEW_DIR . '/user/login.php');
}


function user_controller_auth($request)
{

    session_start();
    require(MODEL_DIR . '/user.php');


    $data = user_model_auth($request);

    $count = mysqli_num_rows($data);

    if ($count == 1) {

        $user = mysqli_fetch_array($data, MYSQLI_ASSOC);
        // dc print_r($user);
        $dbpassword = $user['password'];
        if (password_verify($request['password'], $dbpassword)) {
            $_SESSION['userId'] = $user['userId'];
            $_SESSION['nom'] = $user['name'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

            header("Location: ?module=post&action=index");

            //print_r($dbpassword);
        } else {
            header("Location: ?module=user&action=login");
        }
    } else {
        header("Location: ?module=user&action=login");
    }
}

function user_controller_checkSession()
{
    session_start();

    if (isset($_SESSION['fingerPrint']) and $_SESSION['fingerPrint'] == md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    } else {
        header("Location: index.php?module=user&action=login");
    }
}
function user_controller_logout()
{
    session_start();
    session_destroy();
    header("Location: index.php?module=base&action=index");
}