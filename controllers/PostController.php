<?php
function post_controller_index()
{

    require(MODEL_DIR . '/post.php');
    $data = post_model_list();

    // print_r($data);
    render(VIEW_DIR . '/post/index.php', $data);
}

function post_controller_create()
{

    render(VIEW_DIR . '/post/create.php');
}

function post_controller_insert($request)
{
    require(MODEL_DIR . '/post.php');
    post_model_insert($request);
    header("Location: ?module=post&action=index");
}

function post_controller_view($request)
{

    require(MODEL_DIR . '/post.php');
    $data = array('post' => post_model_view($request));

    render(VIEW_DIR . '/post/view.php', $data);
}

function post_controller_edit($request)
{
    require(MODEL_DIR . '/post.php');
    post_model_edit($request);
    header("Location: ?module=post&action=index");
}

function post_controller_delete($request)
{
    require(MODEL_DIR . '/post.php');
    post_model_delete($request);
    header("Location: ?module=post&action=index");
}