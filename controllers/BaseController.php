<?php

function base_controller_index(){

    require(MODEL_DIR . '/post.php');
    require(MODEL_DIR . '/user.php');
    $data = post_model_list();

    render(VIEW_DIR.'/base/welcome.php',$data);
}