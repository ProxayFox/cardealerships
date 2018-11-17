<?php
    //require_once("sql/db.php");                       
    if (!empty($_POST["title"])) {
		// Get Data
		$title= $_POST['title'];
		$info = $_POST['info'];
		
		// Get File Data
		$target = "images/";
		$ctarget = $target . basename($_FILES["imagename"]["name"]);
		$imagename = ($_FILES["imagename"]["name"]);
		$imgtype = pathinfo($ctarget,PATHINFO_EXTENSION);
        
        echo 'Title: '.$title.'<br>Information: '.$info.'<br>Image Name: '.$imagename.'<br><br>';

		// Check File Type
		if($imgtype != "jpg" && $imgtype != "png" && $imgtype != "jpeg" && $imgtype != "gif" ) {
			$imgerror ='Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>The file entered is a '.$imgtype.' type';
			$_SESSION['img_error'] = $imgerror;
			echo $imgerror;
		}
		else {
			$_SESSION['img_error'] = '';
			// Save Uploaded Files
			move_uploaded_file($_FILES["imagename"]["tmp_name"], $ctarget);	
            
			// Add To Database
	//	    $sql = "INSERT INTO images (rID,name,image,info)
	//		VALUES (NULL,'".$recipe."','".$imagename."','".$info."');";
	//		mysqli_query($con, $sql);			
		}
		
   //     header('Location: index.php');  
		
		}
    else {
    //    header('Location: index.php');
    //    exit;
    }   
?>