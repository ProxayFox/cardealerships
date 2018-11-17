<?php
    require_once("sqlscripts/db.php");                       
    session_start();
    if (array_key_exists("user", $_SESSION)) {}
    else {
        header('Location: index.php');
        exit;
    }   
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <title>OPG | Admin</title>
    <link href="css/opg.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/ope.js"></script>
    <script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>      
    <script src="js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#comm_form").validate({
				errorPlacement: function(error, element) {
    				error.appendTo(element.parent());
					}
				}); /* this is the ID you gave to your form */
			});
	</script>
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
        <div id="comment">
           <form method="post" action="addpet.php" enctype="multipart/form-data" id="comm_form">
               <table align="center" width="70%">
               	   <tr>
                   		<td align="center" colspan="2"><h1>Add A Pet</h1></td>
                   </tr>
     			   <tr>
                       <td width="30%" align="right"><label for="category">Category: </label></td> 
                       <td width="70%" align="left"><input type="radio" class="required" name="category" value="Lost">Lost
									    <input type="radio" name="category" value="Rescued">Rescued</td> 
                   </tr>
                   <tr>
                       <td align="right"><label for="pettype">Pet: </label></td>             
                       <td align="left"><input type="radio" class="required" name="pettype" value="Cat">Cat
						   				<input type="radio" name="pettype" value="Dog">Dog
                          				<input type="radio" name="pettype" value="Other">Other</td> 
                   </tr>   
                   <tr>
                       <td align="right"><label for="gender">Gender: </label></td> 
                       <td align="left"><input type="radio" class="required" name="gender" value="Male">Male
						   				<input type="radio" name="gender" value="Female">Female</td>
                   </tr> 
                   <tr>
                       <td align="right"><label for="agegroup">Age Group: </label></td> 
                       <td align="left"><input type="radio" class="required" name="agegroup" value="Infant">Infant
						   				<input type="radio" name="agegroup" value="Adult">Adult</td>
                   </tr>  
                   <tr>
                   	   <td align="right"><label for="imagename">File To Upload: </label></td>
                       <td align="left"><input type="file" name="imagename" id="imagename"></td>
                   </tr>
                   <tr>
                   		<td align="right"><label for="description">Description: </label></td>
                   		<td align="left"><textarea name="description" id="description" rows="8" cols="23"></textarea></td>
                   </tr>  
                   <tr>
                   		<td align="right"><button type="reset" value="Reset">Clear</button></td>
                   		<td align="left"><button type="submit" id="button" name="submit" value="Submit">Save</button></td>
                   </tr>     
               </table> 
          </form>
      </div>
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
  <div id="footer">&copy; Pet Online &nbsp;&nbsp;&nbsp;</div>
</div>	
</body>
</html>