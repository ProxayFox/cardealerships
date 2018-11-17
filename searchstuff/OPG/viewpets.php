<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    if (array_key_exists("user", $_SESSION)) {   
            $result = opgDBscripts::getInstance()->viewPet(); 
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
        	<table align="center" width="75%"> 
            <tr>
            	<td align="center" colspan="7"><h1>View Pets</h1></td>
            </tr>
            <tr><th>Category</th><th>Type</th><th>Gender</th><th>Age</th>
                <th>Image</th><th>Decscription</th><th>Edit</th></tr>
            <?php while ($row = $result->fetch_row()) { ?>                     
                <tr>
                	<td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td> 
                    <td><?php echo $row[4]; ?></td>
                    <td><img id="petimage" src="pets/<?php echo $row[5]; ?>" alt="Pet Image" width="120" /></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><form action="editpet.php" method="POST">
                    <input id="petid" name="petid" type="hidden" value="<?php echo $row[0]; ?>"/>
                    <input name="Edit" type="submit" value="Edit" />
                    </form></td> 
                    <td><form action="delpet.php" method="POST">
                    <input id="petid" name="petid" type="hidden" value="<?php echo $row[0]; ?>"/>
                    <input name="Delete" type="submit" value="Delete" onclick="return confirm('Press OK to continue with DELETE!')"/>
                    </form></td>
                </tr>
            <?php  }  ?>      
        </table>
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