<?php
$msg = "";
// if upload button is press`
if (isset($_POST['upload'])) {
    // the path store the uploaded image
    $target = "img/".basename($_FILES['image']['name']);
    
    // connect to the database
    $db = mysqli_connect("localhost", "root", "", "new_web");

    // get all the submitted data form the form
    $image = $_FILES['image']['name'];
    $category = $_POST['category'];
    $titele = $_POST['titele'];
    $descripation = $_POST['descripation'];
    $text = $_POST['text'];
    $sql ="INSERT INTO `reg` (`id`, `image`, `category`, `titele`, `descripation`, `text`) VALUES (NULL, '$image', ' $category', '$titele', '$descripation', '$text')";
    mysqli_query($db,$sql);
    
     //store the submitted dta into the database table: images
    // now lets move the uploaded image into the folder: images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
       $msg = "image upoaded successfully";

    }
    else {
        $msg = "their was a problem uploading image";
    }


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>upload imgae</title>
<link rel="stylesheet" type="text/css" href="./cont.css">
</head>
<div id="content">
    <?php
$db = mysqli_connect("localhost", "root", "", "new_web");
 $sql = "SELECT * FROM reg";
 $result = mysqli_query($db, $sql);
 while ($row = mysqli_fetch_array($result)) {
    echo "<div id='img_div'>";
    echo "<img src='img/".$row['image']."' >";
    echo "<h1>".$row['titele']."</h1>";
    echo "<a href='#'>".$row['text']."</a>";
    echo "<p>".$row['descripation']."</p>";
    echo "</div>";
 }

?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="size" value="100000">
        <div>
            <input type="file" name="image">
        </div>
        <div>
            <input type="text" name="titele">
        </div>
       
        <div>
           
            <textarea name="descripation" cols="40" rows="4" placeholder="say something about this image..."></textarea>
        </div>
        
        
        <div> 
            <select name="category" id="">
                <option>Select</option>
                <option value="pages">pages</option>
                <option value="shop">shop</option>
                <option value="blog">blog</option>
                <option value="contact">contact</option>
                
            </select>
        </div>
        <div>
            <input type="submit" name="upload" value="upload image">
        </div>
    </form>
</div>

<body>

</body>
</html>

