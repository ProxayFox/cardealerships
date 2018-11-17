<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    $result = opgDBscripts::getInstance()->othersRescued();   
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
            <li><a href="contactus.php" title="Contact Us">Contact Us</a></li>
    	</ul>
    </nav>
    <div id="content">
        <div id="leftside"><br><br>
        	<p>When you have found what you are looking for then 
               <a href="contactus.php" title="Contact Us">Contact Us</a>.
            </p>
        	<table align="center" width="75%"> 
            <tr><td align="center" colspan="7"><h1>Other Rescued Pets</h1></td></tr>
            <tr><th>ID</th><th>Category</th><th>Type</th><th>Gender</th><th>Age</th>
                <th>Image</th><th>Decscription</th></tr>
            <?php while ($row = $result->fetch_row()) { ?>                     
                <tr>
                	<td><?php echo $row[0]; ?></td>
                	<td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td> 
                    <td><?php echo $row[4]; ?></td>
                    <td><img id="logo" src="pets/<?php echo $row[5]; ?>" alt="Pet Online logo" width="120" /></td>
                    <td><?php echo $row[6]; ?></td>              
                </tr>
            <?php  }  ?>      
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
	<div id="footer">&copy; Pet Online &nbsp;&nbsp;&nbsp;</a>
    </div>
</div>
</body>
</html>