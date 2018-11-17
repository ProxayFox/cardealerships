<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>OPG | Home</title>
	<link href="css/opg.css" type="text/css" rel="stylesheet" />
	<script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>      
	<script src="js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#comm_form").validate(); /* this is the ID you gave to your form */
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
        <div id="leftside">
            <h1>Galleries of lost and rescued pets</h1>
            <img id="Pets" src="images/pets.jpg" alt="Pets" />
            <p>The purpose of this Website is to show at a glance 
               all the lost and rescued pets needing to find homes.
               When you have found what you are looking for then 
               <a href="contactus.php" title="Contact Us">Contact Us</a>.
            </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Contrary to popular belief, Lorem Ipsum is not simply random text. 
               It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
               when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of 
               Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
               software including versions of Lorem Ipsum.
            </p>
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
	<div id="footer">&copy; Pet Online &nbsp;&nbsp;&nbsp;</div>
</div>
</body>
</html>