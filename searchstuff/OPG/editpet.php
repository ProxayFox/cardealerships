<?php
    require_once("sqlscripts/db.php");
    session_start();
    if (array_key_exists("user", $_SESSION)) {
        if( isset($_POST['Edit']) ){  //only attempt to display if edit form submitted.
            $petid = $_POST['petid'];
            $result = opgDBscripts::getInstance()->getPet($petid);
            $row = $result->fetch_row();
        }
    }
    else {
        header('Location: index.php');
        exit;
    }
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>OPG | View Pets</title>
	<link href="css/opg.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="main">
	<div id="header">
        <img id="logo" src="images/PetOnlineLogo.png" alt="Pet Online logo" />
        <span>Online Pet Gallery</span>
    </div>
    <nav>      
    	<ul>
        	<li><a href="viewpets.php" title="View Pets">View Pets</a></li> 
        	<li><a href="addpets.php" title="Add Pets">Add Pets</a></li>
        	<li><a href="logout.php" title="Pet Finder">Logout</a></li>
    	</ul>
    </nav>
    <div id="content">
        <div id="leftside"><br><br>
            <form action="updatepet.php" method="POST">
        	<table align="center"> 
            <tr><td align="center" colspan="2"><h1>Edit Pet</h1></td></tr>
            <tr><td>Category</td><td><input id="category" name="category" type="text" value="<?php echo $row[1]; ?>" /></td></tr>
            <tr><td>Pet Type</td><td><input id="pettype" name="pettype" type="text" value="<?php echo $row[2]; ?>" /></td></tr>
            <tr><td>Gender</td> <td><input id="gender" name="gender" type="text" value="<?php echo $row[3]; ?>" /></td></tr>
            <tr><td>Age Group</td> <td><input id="agegroup" name="agegroup" type="text" value="<?php echo $row[4]; ?>" /></td></tr>
            <tr><td>Image Name</td><td><input id="imagename" name="imagename" type="text" value="<?php echo $row[5]; ?>" /></td></tr>
            <tr><td>Decscription</td> <td><textarea id="description" name="description" rows="8" cols="23"><?php echo $row[6]; ?></textarea></td></tr>                    
            <tr>
                <td colspan="2" align="center">
                    <input id="petid" name="petid" type="hidden" value="<?php echo $row[0]; ?>"/>
                    <input name="Edit" type="submit" value="Save" />
                </td> 
            </tr>  
        </table>
        </form>
        </div>
        <div id="rightside">
        	<p><form target="_blank" action="https://www.petrescue.com.au/">
                <img src="images/petrescue.jpg" alt="Pet Rescue" /><br>
                <input type="submit" value="Pet Rescue">
            </form></p>
            <p><form target="_blank" action="http://www.petsdomain.com.au/">
                <img src="images/PetsDomain.jpg" alt="Pets Domain" /><br>
                <input type="submit" value="Pets Domain">                  
            </form></p>    
        </div>
    </div>
	<div id="footer">&copy; Pet Online &nbsp;&nbsp;&nbsp;</a>
    </div>
</div>
</body>
</html>