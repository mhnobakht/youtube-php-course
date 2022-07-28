<?php

$file = $_FILES['image'];

$name = $file['name'];

$upload_dir = "uploads/";

$path = $upload_dir.$name;

if(move_uploaded_file($file['tmp_name'], $path)) {
   echo "File uploaded!"; 
}else{
    echo "Upload Failed";
}