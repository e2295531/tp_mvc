<?php
function user_model_list()
{

    require(CONNEX_DIR);
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function user_model_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (name, birthday, username, password) VALUES ('$name','$birthday','$username','$password')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_view($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "SELECT * FROM user WHERE userId = '$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function user_model_edit($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "UPDATE user SET name = '$name', birthday = '$birthday' WHERE userId = '$userId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
function user_model_delete($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "DELETE FROM user WHERE userId = '$userId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_auth($request)
{

    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    //1 verifier le username
    $sql = "SELECT * FROM user WHERE username = '$username'";

    $result = mysqli_query($con, $sql);



    return $result;
}