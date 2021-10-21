<?php

add_action( 'after_setup_theme', 'theme_functions' );

function theme_functions() {

add_theme_support( 'title-tag' );

}

function prefix_send_email_to_procure_ajax() {


if(!empty($_POST)){

$type = $_POST["type"];

//dump on crm

$post_arr = array(

"name" => $_POST["first_name"]." ".$_POST["last_name"],

"email_address" => $_POST["email_address"],

"phone_number" => $_POST["intPhoneNumber"],

"company_name" => $_POST["company_name"],

"company_size" => $_POST["company_size"],


);


/*$response = wp_remote_post(

"https://cascadiaapartments.co.ke/api/newOpportunity", $post_arr);*/


wp_remote_post("http://app.procure.ke/api/createNewDemoAccountRequest", array(

'headers' => array('Content-Type' => 'application/json; charset=utf-8'),

'body' => json_encode($post_arr),

'method' => 'POST'

));


echo json_encode(array("statusCode" => 200));

die();


}

}


add_action( 'admin_post_nopriv_eoi_form_ajax', 'prefix_send_email_to_procure_ajax' );