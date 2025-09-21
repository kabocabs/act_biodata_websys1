
<?php

if (isset($_POST['submit'])){
    $target_dir = "uploads/";

    if (!is_dir($target_dir)){
        mkdir($target_dir, 0777, true);
    }



$file_name = basename($_FILES["myfile"]["name"]);
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;

    $fileType = strtoLower(pathinfo($target_file, PATHINFO_EXTENSION));

    $newFileName = uniqid("file_", true). "." .$fileType;
    $target_file = $target_dir . $newFileName;

    if (file_exists($target_file)){
        echo "Sorry, File already exist.<br>";
        $uploadOk = 0;

    }

    if ($_FILES["myfile"]["size"] > 2* 1024 * 1024){
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }


    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if(!in_array($fileType, $allowed_types)){
        echo "Sorry, only jpeg";
        $uploadOk=0;

    }

    if ($uploadOk == 0){
        echo "Your file was not uploaded. <br>";

    } else{
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)){
                echo "The File ". htmlspecialchars($file_name)."has been upploaded successfully";
            
        }
        else{
            echo "Sorry there was an error uploading your file. <br>";
        }
    } 
} else{
        echo"No file uploaded";
    }

    echo "<img src = '".$target_file."'>";
?>

<img src = "<?=$target_file?>">