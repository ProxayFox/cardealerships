<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>OPG | Pet Finder</title>
	<link href="css/opg.css" type="text/css" rel="stylesheet" />
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
           <div id="petfinder">
           	<form method="post" action="showpets.php" id="comm_form">
            	<table align="center" width="55%">
                	<tr>
                   		<td align="center" colspan="2"><h1>Pet Finder</h1></td>
                    </tr>
     				<tr>
                       <td width="30%" align="right"><label for="category">Category: </label></td> 
                       <td width="70%" align="left"><input type="radio" class="required" name="category" value="lost">Lost
									    			<input type="radio"  name="category" value="rescued">Rescued<br></td> 
                   </tr>
                   <tr>
                       <td align="right"><label for="pettype">Pet: </label></td>             
                       <td align="left"><input type="radio" class="required" name="pettype" value="cat">Cat
						   				<input type="radio" name="pettype" value="dog">Dog
                          				<input type="radio" name="pettype" value="other">Other<br></td> 
                   </tr>   
                   <tr>
                       <td align="right"><label for="gender">Gender: </label></td> 
                       <td align="left"><input type="radio" class="required" name="gender" value="male">Male
						   				<input type="radio" name="gender" value="female">Female<br></td>
                   </tr> 
                   <tr>
                       <td align="right"><label for="agegroup">Age Group: </label></td> 
                       <td align="left"><input type="radio" class="required" name="agegroup" value="infant">Infant
						   				<input type="radio" name="agegroup" value="adult" >Adult<br></td>
                   </tr>       
                    <tr>
                   		<td align="right"><button type="reset" value="Reset">Clear</button></td>
                   		<td align="left"><button type="submit" id="button" name="submit" value="Submit">Find</button></td>
                    </tr>
                </table> 
            </form>
       		</div><br>
            <img id="Pets" src="images/pets.jpg" alt="Pets" />
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