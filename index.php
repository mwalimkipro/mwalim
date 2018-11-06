<?php error_reporting(0);
session_start();
//if(isset($_SESSION['myusername']))

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript">
window.onload = function(){
	document.drugs_form.drugs.value = "";
}
function showUser(str)
{

if (str=="")
  {
  document.getElementById("side").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("side").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","news.php?q="+str,true);
xmlhttp.send();
}
</script>
   
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	

	<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>		
    <script src="js/thickbox.js" type="text/javascript"></script>
    <link href="style/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="images/style.css" type="text/css" />
	 <link rel="stylesheet" href="base/jquery-ui.css"/>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
	<link rel="stylesheet" href="style/nivo-slider.css" type="text/css" media="screen" />

    <title>Medley Pharmacy</title>
   
    
    
    
</head>
<body >

    <div id="page">
        <div id="content" style="width:1000px;">
            <div id="logo">
                <div  class="whitetitle">Medley<br>&nbsp;Pharmacy</div>
            </div>
            <div id="topheader">
                <div align="left" class="bodytext">
                    <br />
                    <strong>Medley Pharmacy Limited</strong><br />
                    Service is our passion<br />
                    P.o Box 92-30400<br/> Eldoret<br />
                    Phone: +254724446785<br />
                    infor@medleypharm.com
                </div>
                <div id="toplinks" class="smallgraytext">
                    <a href="index.php">Home</a> | <a href="aboutus.php">Sitemap/Location</a> | <a href="contactus.php">Contact Us</a><br>
               
        <form method="post" id="search_form" action="search.php">
          <p>Search::
           <a href="#"> <input class="search" id="search" type="text" name="search"value="" placeholder="Search for drug...." /></a>
           <a href="#"> <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="images/search.png" alt="Search" title="Search"  /></a>
          </p><script type="text/javascript">
<!--
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
document.write("<small><FONT color='000080' FACE='Verdana''<B>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</B></FONT></SMALL>")

//-->
</script>
	
        </form>
<script>
var int=self.setInterval(function(){clock()},1000);
function clock()
{
var d=new Date();
var t=d.toLocaleTimeString();
document.getElementById("clock").value=t;
}
</script>
       	   </form>
                </div>
            </div>
            <div id="menu">
                <div  class="smallwhitetext" style="padding:9px;">
                    <a href="index.php">Home</a> | <a href="aboutus.php">About Us</a> | <a href="products.php">Our Services</a> | <a href="contactus.php">Contact Us</a> | <a href="login.php">Admin</a> 
                </div>
            </div>
            <div id="submenu">
                <div  class="smallgraytext" style="padding:9px;">
                <script language="javascript" type="text/javascript">
    function store()
{
$("#content1").load('output.php');
}
</script>
           <script language="javascript" type="text/javascript">
    function stor()
{
$("#content1").load('regcustd.php');
}
</script>
   <script language="javascript" type="text/javascript">
    function order()
{
$("#content1").load('orderout.php');
}
</script>
<script language="javascript" type="text/javascript">
    function here()
{
$("#content1").load('orderview.php');
}
</script>
<script language="javascript" type="text/javascript">
	function order1()
{
$("#content1").load('delivered.php');
}
</script>
                
                    <a href="cart">Online order</a> |<a href="#"onclick="store()">Drug Store</a> | <a href="login.php">Point of Sale</a> | <a href="customer.html">customer Registrarion</a>
				</div>
			</div>
			<div style="float:right;"><a href="mailto:duncankips@yahoo.com"><image src="images/mail.gif"/></a><image src="images/maker.png" width="35px" height="35px"/></div>
			
			
			<div id="right">
			
			<b>Payment Methods</b><hr>
			<img src="images//pay.gif" width="45" height="20">			
			<img src="images//visa.png"width="45" height="20">
			<img src="images//master.png"width="45" height="20">
			<script type="text/javascript" language="javascript">
setInterval(showUser(this.value),3000)

</script>
			<div id="side"><meta http-equiv="refresh" content="60"></div>
			
					</div></div>
            <div id="contenttext">
                
                    <span class="titletext">Welcome to Medley Pharmacy</span>
					<div>    
            <div>
                  
            </div></div>
                  
                    <div class="bodytext"  style="padding:12px;" align="justify" id="content1">
                   
                    <br /><div style="width:510px">
					
					<div id="pro">
					<div><form method="get" action="https://www.google.co.ke/webhp">Search for Pharmacy::<input type="text" id="search"/>
					<input type="submit" value="Go"></form>
					</div>
					<div >
					<fieldset style="background-color:#; text-align:center">Physical Locations: <select name="physicallocation">
                    <option>...Select...</option>
                    <option> Nairobi</option>
                    <option>Eldoret</option>
                    <option>Mombasa</option>
                   <option>Kisumu</option>
                   </select>
                                      
					</fieldset>
					</div>
					</div>
					
					<div  id="pro"><div><fieldset><legend>Our Store</legend><table><tr><td>
					<img src="images/store1.jpg" width="150px" height="120px"/><br>Our POS</td><td>
					<img src="images/store.jpg" width="150px" height="120px"/><br>shelf one</td><td>
					<img src="images/store5.jpg" width="150px" height="120px"/>shelf two</td>
					</tr><tr><td>
					<img src="images/store4.jpg" width="150px" height="120px"><br>shelf three</td><td>
					<img src="images/store2.jpg" width="150px" height="120px">shelf four</td><td>
					
					<img src="images/store3.jpg" width="150px" height="120px">shelf five<br></td></tr>
					
					</table>
					</fieldset>
					
					</div><div id="pro">
					   <form method="post"  action="searchdrug.php">
          <p>Prices of::
             <a href="#"> <input class="search" id="search" type="text" name="search"value="" placeholder="Enter Drug Category" /></a>
           <a href="#searchdrug.php"> <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="images/search.png" alt="Search" title="Search"  /></a>
          </p>
        </form></div>
					<div id="pro">Search for your order::<input type="text" name="customerid" placeholder="Enter Customer Id"id="search"/>
					<a href="#" onclick="here()">[Check]</a>
					</div>
					 
					</div>
                
                </div>
				
            </div>
			</div>
            <div id="leftpanel">
                <div align="justify" class="graypanel" style="border-radius:10px" >
                
                <h2>Other Links</h2><hr>
             <ul class="smallredtext">
              <li ><a href="cart">Order Online</a></li><br>
      <li><a href="#" onclick="store()">Drug Store</a></li><br>
     <li><a href="login.php">Point of Sale</a></li><br>
      
      </ul><hr>
                    <span class="smalltitle"><img src="images/news.gif"></span><br /><br />
                    <span class="smallredtext">April 10, 2016</span><br />
                    <span class="bodytext">Dear customer kindly visit our stores to find offers for our easter celebrations...</span><br />
                    <a href="#" class="smallgraytext">More...</a><br /><br />
                    <span class="smallredtext">March 21, 2016</span><br />
                    <span class="bodytext">Medley Phamacy not only performs best in selling but also in supply services,in this years...</span><br />
                    <a href="#" class="smallgraytext">More...</a><br /><br />
                    <div><img src="images/follow.png" height="30"><p>&nbsp;&nbsp;<a href="http://www.facebook.com"><img src="images/facebook.png" width="30" height="30"></a>&nbsp;&nbsp;<a href="http://www.twitter.com"><img src="images/twitter.png" height="30"></a>&nbsp;&nbsp;<a href="http://www.myspace.com"><img src="images/myspace.png" height="30"></a>&nbsp;&nbsp;<a href="http://www.flickr.com.com"><img src="images/flickr.png" height="30"></a>&nbsp;&nbsp;<a href="http://www.youtube.com"><img src="images/youtube.png" height="30"></a></div>
                </div>
            </div>
            <div id="footer" class="smallgraytext" style="border-radius:10px">
                <a href="index.php">Home</a> | <a href="aboutus.php">Pharmaceutical Policies</a> | <a href="customer.html?KeepThis=true&TB_iframe=true&height=197&width=780" title="Your Order" class="thickbox">Register for Regular Deliveries</a> | <a href="contactus.php">Contact Us</a>| 

 <span class="smallredtext"><a href="login.php">Login</a></span></p>
        
      
      

<script language="javascript" type="text/javascript">
    function call()
{
$("#content1").load('reg.html');
}
</script>
<script language="javascript" type="text/javascript">
    function call1()
{
$("#content1").load('confirmreg.php');
}
</script>

<a href="login.php">Admin</a> 
                |<a href="http://www.medley.com"> Medley Phamacy 
                &copy; 2016 | <a href="logout.php">Logout</a> 
 </div>
 </div>
          
            </div>
     
  

</body>
</html>
