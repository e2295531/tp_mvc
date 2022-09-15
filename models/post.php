<?php
function post_model_list()
{
    require(CONNEX_DIR);
    
    $sql = "SELECT * FROM post inner join user on userId=postUserId";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function post_model_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    
    $sql = "INSERT INTO post (title, article, date, postUserId) VALUES ('$title','$article','$date','$postUserId')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function post_model_view($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "SELECT * FROM post WHERE postId ='$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function post_model_edit($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "UPDATE post SET title = '$title', article = '$article' WHERE postId = '$postId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
function post_model_delete($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "DELETE FROM post WHERE postId = '$postId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}