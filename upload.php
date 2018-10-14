<?php



$errors = array(); 
include('errors.php');
$i = 0;

if (isset($_POST['upload'])){
$fileName = $_POST['fileName'];
$fileDesc = $_POST['fileDesc'];
$file_array = $_FILES['upload']['name'];
$file_size = $_FILES['upload']['size'];
$file_tmp = $_FILES['upload']['tmp_name'];
while($i < count($file_array)){
//    echo $name;
//    echo $size;
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file_array[$i]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if($fileType != "pdf" && $fileType != "doc" && $fileType != "jpeg" && $fileType != "jpg" && $fileType != "docx" && $fileType != "ppt" && $fileType != "pptx" && $fileType != "png") {
        array_push($errors,"Invalid file format.");
        $uploadOk = 0;
    }
    
    if ($file_size[$i] > 500000) {
        array_push($errors,"Sorry, file is too large");
        $uploadOk = 0;
    }
    
    if (file_exists($target_file)) {
    array_push($errors,"Sorry, file already exists");
    $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        array_push($errors,"Sorry, there was an error");
// if everything is ok, try to upload file
    } else {
            if (move_uploaded_file($file_tmp[$i], $target_file)) {
                header('location: user_prof.php');
            } 
            else {
                array_push($errors,"Sorry, there was an error");
                
            }
    }
    $i++;
}
}

?>
