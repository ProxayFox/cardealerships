<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>OPG | Home</title>
	<link href="css/opg.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/ope.js"></script>
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
            <h1>Contact Us</h1>
            <p>Phone, email or just drop by we are open 7days 6am - 6pm<br>
            We are always happy to help with any request or concern.<br><br>
            
            Phone: 4343 567 632<br>
            Email: opg@opg.net.au
            
            </p>
            <p>We are located at:<br>277-279 Gladstone Rd, Dutton Park QLD 4102</p> 
            <img id="Pets" src="images/map.jpg" alt="Pets" />
            <br><br>
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
	<div id="footer">&copy; Pet Online &nbsp;&nbsp;&nbsp;</div>
</div>
</body>
</html>