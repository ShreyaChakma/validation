<?php
//allowed image type // 

  if(empty($_POST['profile_picture'])){
    echo error_message( "profile picture is required" );
    die();
  }
$allowed_type = array(
    'image/jpg',
    'image/png',
    'image/jpeg'
);

//server uploaded image path//
$my_file = $_FILES['profile_picture']['tmp_name'];
//image path//
$destination = 'images/'.$_FILES['profile_picture']['name'];

if($_FILES['profile_picture']){
    if(in_array($_FILES['profile_picture']['type'],$allowed_type) !== false && $_FILES['profile_picture']['size']< 5*1024*1024){
       move_uploaded_file($my_file,$destination);
    }
}