<?php
$param = isset($_REQUEST['param']) ? $_REQUEST['param'] : '';
if(!empty($param)){
    if($param == "get_message"){
        echo json_encode(array(
            "name"=> "Junaet Faruk",
            "author" => "Rafi"
        ));
        die();
    }
    if($param == "post_data"){
        // print_r($_REQUEST);
        echo json_encode($_REQUEST);
        die();
    }
}
?>