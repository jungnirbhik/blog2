<?php
session_start();
if(!isset($_SESSION['email'])){

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>List post</title>
    <style>
        img{ width:100px;
        }
    </style>
  </head>
  <body>
    <div class ="container mt-5">
        <div class = "row">
            <div class ="col-md-12">
                <div class="card-header">
                    <h4>Listing of the Post</h4>
                    <div class="card-body">
                       
                        <table class ="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>body</th>
                                    <th>Description</th>
                                    <th>Cover_image</th>
                                    <th>created_by</th>
                                </tr>
                            </thead>
                            <tbody class='listing_process.php'> 
                            <?php
include("connection.php");
// $sql="SELECT posts.id, posts.title, posts.body, posts.subtitle, posts.cover_image, user.username as created_by
// FROM posts table
// JOIN user ON user.id= posts.created_by";

$sql="SELECT posts.id, posts.title, posts.body, posts.subtitle, posts.cover_image, user.username as created_by
FROM posts
LEFT JOIN user ON user.id= posts.created_by";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo "<pre>";
// print_r($row);
// exit();
foreach($row as $value){
    ?>
    <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['body']; ?></td>
            <td><?php echo $row['subtitle']; ?></td>
            <td><img src="<?php echo $row['cover_image']; ?>" alt="Cover Image" width="100"></td>
            <td><?php echo $row['created_by']; ?></td>
        </tr>
    <?php 

}
?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  </body>
</html>
