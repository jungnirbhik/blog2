<?php
session_start();
include("connection.php");

if(isset($_POST['Submit']));{
    if($_SERVER["REQUEST_METHOD"]=="POST"){

$title =$_POST['title'];
$body=$_POST['body'];
$subtitle =$_POST['subtitle'];
$image=$_FILES['cover_image']['name'];
$created_by=$_POST['created_by'];
print_r($image);

$upload_dir = 'uploads/';
        $upload_image = $upload_dir . basename($image);
        move_uploaded_file($_FILES['cover_image']['tmp_name'], $upload_image);

        





if($title && $body && $image && $subtitle && $created_by){
  
//     $query="SELECT * FROM posts WHERE title ='$title'&& description ='$description' && subtitle='$subtitle' && cover_image='$image'";
//     $data=mysqli_query($conn,$query);
//      if(!$data){
//     die("Error:".mysqli_error($conn));
//      }
//    $numrows= mysqli_num_rows($data);



    $insertquery="insert into posts (title,body,subtitle,cover_image,created_by) values('$title','$body','$subtitle','$upload_image','$created_by')";
    $result =mysqli_query($conn,$insertquery);

        if($result){
        
            
         } echo'<div class="alert alert-success" role="alert">
         <strong>Success</strong> Data created successfully!
       </div>';
        }
        else{
            echo"submission failed.";
        }
         
    }
}
    


?>