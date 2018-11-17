<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    if (array_key_exists("user", $_SESSION)) {   
		$category = $_POST['category'];
		$pettype = $_POST['pettype'];
		$gender = $_POST['gender'];
		$agegroup = $_POST['agegroup'];
		
        $result = opgDBscripts::getInstance()->findPet($category,$pettype,$gender,$agegroup);  
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
        	<li><a href="index.php" title="Home">Home</a></li> 
        	<li><a href="#" title="Cats">Cats</a>
            	<ul>
            		<li><a href="catslost.php" title="Lost">Lost</a></li>
                	<li><a href="catsrescued.php" title="Rescued">Rescued</a></li>
                </ul>
            </li>
            <li><a href="#" title="Dogs">Dogs</a>
            	<ul>
            		<li><a href="dogslost.php" title="Lost">Lost</a></li>
                	<li><a href="dogsrescued.php" title="Rescued">Rescued</a></li>
                </ul>
            </li>
            <li><a href="#" title="Other Pets">Other Pets</a>
            	<ul>
            		<li><a href="otherslost.php" title="Lost">Lost</a></li>
                	<li><a href="othersrescued.php" title="Rescued">Rescued</a></li>
                </ul>
            </li>
        	<li><a href="petfinder.php" title="Pet Finder">Pet Finder</a></li>
    	</ul>
    </nav>
    <div id="content">
        <div id="leftside">
            <h1>View All Pets</h1>
        	<table> 
            <tr><th>Category</th><th>Pet Type</th><th>Gender</th>
                <th>Age Group</th><th>Image Name</th><th>Decscription</th></tr>
            <?php if($result != FALSE){
			while ($row = $result->fetch_row()) { ?>                     
                <tr>
                	<td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td> 
                    <td><?php echo $row[4]; ?></td>
                    <td><img id="logo" src="pets/<?php echo $row[5]; ?>" alt="Pet Online logo" /></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><form action="editpet.php" method="POST">
                    <input id="petid" name="petid" type="hidden" value="<?php echo $row[0]; ?>"/>
                    <input name="Edit" type="submit" value="Edit" />
                    </form></td> 
                </tr>
            <?php } }  ?>      
        </table>
        </div>
        <div id="rightside">
        	<p><form action="login.php">
                <img src="images/pets3.jpg" alt="Pets" /><br>
                <input type="submit" value="Login">
            </form></p>
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
	<div id="footer">&nbsp;&nbsp;&nbsp;
    	&copy; Pet Online 
        <a href="login.php" title="Admin">Admin</a>
    </div>
</div>
</body>
</html>