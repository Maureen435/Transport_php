<html>
<head>
</head>
<h1><center> TRANSPORT MANAGEMENT SYSTEM</center></h1>
<style type="text/css">
h1{
    color:blue;
	background:lightblue;
	font-size:50;
   }
   body{
        background-image:a.jpg;
      }
	  .topnav {
  overflow: hidden;
  background-color: #333;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
   position: fixed;
   color: white;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   text-align: center;
   }
    #banner{
               width:50%;
            
                height:auto;
                margin:opx auto;
                float:clear;
                 background: #C27212;
                float:left;
             
                
            } 
             #bannerimg{
               
               width:100%;
                height:auto;
               border: 3px solid black;
         
                
            }
 #news{
                background:lightblue;
               
                width:49%;
               
                  height:auto;
               
                 border: 1px solid black;
                overflow: hidden;
                float:right;
           
               
            }
</style>
<div class="navbar">
  <a href="index.php">HOME</a>
  <a href="about_us.php">ABOUT US</a>
	  <a href="contact_us.php">CONTACT</a>
  <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>  
    </button>
    <div class="dropdown-content">
      <a href="login1.php">ADMIN</a>
      <a href="login.php">USER</a>
    </div>
	</div>
	</div>
<body background="a.jpg">
<div id="banner">
        <img  style="float:left" id="bannerimg" src="about_us.jpg" alt="banner"/>
    </div> <div id="news">
    <hr>  <h2  id="h1" style="color: black"> <center>About Us</center></h2> <hr>
      <marquee direction="up" align="right"><h2 style="text-align:center ">Transport is the main factor 
	  in our day to day service and this application aims to facilitate transportation easier and for
	   more details visit us @spu.ac.ke. The system allows one to manage relevant information of services
	   provided by an organization and its employees. The user can make a request to Administrator for cab.</h2></marquee><hr><hr>
    </div>
<div class="footer">
<p> Copyright@ TRANSPORT MANAGEMENT SYSTEM.</p>
</div>
</html>