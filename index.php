

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style>
            .im1{
               border: #0d1137 40px solid; 
            }
            .cardl1{ 
       background-clip:border-box;
       border: dotted 5px black;
       padding: 20px;
       background: none;
      margin-bottom: 20px;
      background:#0d1137;
      color:#F49F1C ;
       }
       .cardl{
        background-clip:border-box;
       border: dotted 5px black;
       padding: 20px;
       background: none;
      margin-bottom: 20px;
      background: #F49F1C;
      color: #0d1137;
       }
       .cardr{
        padding: 20px;
       margin: 20px;
       background: green;
       }
       .leftcolumn {  
  float: left;
  width: 75%;
  padding-right: 10px;
  background: none;
}
.rightcolumn {
  float: left;
  width: 25%;
  background-color: gray;
}

        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="social.css">
        <link rel="stylesheet" href="popup.css">
        <title>COVID-19</title>
        <script type="text/javascript">
            window.onload = function(){ 
                            alert("Welcome To our Page :)");
                            }
                        function tq(){ 
                            return"Thanks for visiting our webpage!!";
                            }      
        </script>
    </head>
    <body style="font-family: 'Times New Roman', Times, serif;overflow-x: hidden;" onbeforeunload="return tq()">  
        <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
        <script type="text/javascript" src="scroll.js">
        </script>    
               <div class="title">
                <h1>Welcome to home page</h1>
                <h1 style="text-align: center;"><a href="covid.php"><span class="headcov" style="font-family:cursive ;">COVID19 </span></a><a href="https://en.wikipedia.org/wiki/Karnataka">
                    <span class="headcoi" style="font-family: cursive;">BANGALORE</span></font> </a></h1></div>
                    <div class="header"><div id="mySidepanel" class="sidepanel">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                            <a href="#">Home</a>
                            <a href="about us new.php">About us</a>
                            <a href="#contact">Contact</a>
                          </div>
                        <p style="float: left;background-color: black;"><button class="openbtn" onclick="openNav()" >☰ Menu</button></p></div>
                        <!--<ul><font size="4">
                            <li><a href="#">Home</a></li><p style="color: red;">&emsp; + &emsp;</p>
                            <li><a href="about us new.php">About us</a></li><p style="color: red;">&emsp; + &emsp;</p>
                            <li><a href="#contact">Contact us</a></li>
                        </font></ul>--> 
                        <br><br><br><br>
                        <script>
                            function openNav() {
                              document.getElementById("mySidepanel").style.width = "250px";
                            }
                            
                            function closeNav() {
                              document.getElementById("mySidepanel").style.width = "0";
                            }
                            function vid(){
                            }
                            </script>
                            <br>
        <div class="leftcolumn">
            <div class="cardl">
        <table align="center" border="1">
            <tr>
                <td>
                    <img src="cov.gif" height="250" width="300" align="left" usemap="#co-info" class="map1">
                </td>
                <td>
                    <marquee behaviour="scroll" direction="up"><ul type="square">
                    <font size="6" color="#0d1137"><li>Bangalore: Heightened vigil despite drop<br> in new Covid cases</li>
                        <li>The decline in daily Covid-19 cases in the <br>district appeared to be slow but steady</li>
            <li>Bangalore tops state with 252 fresh Covid-19 cases</li></font></ul></marquee></td>
                    </tr>
        </table></div></div>
    <div class="rightcolumn">
        <div class="cardr">
            <p style="text-align: center;"><img src="divright1.gif" width="300" height="250" ></p>
            <br>
        </div></div>
        <div class="leftcolumn">
            <div class="cardl1">
        <map name="co-info" class="map1">
            <area shape="rect" title="covidimage" coords="0,0,300,250" target="blank" href="covid.php" class="map1">
        </map>
        <p style="text-align: center;"><img src="live1.png" usemap="#live" height="700" width="600" class="map1"></p>
        <map name="live">
            <area shape="rect" title="covidimage" coords="0,0,600,700" target="blank" href="https://www.covid19india.org/state/KA">
        </map></div>
    </div>
        <div class="rightcolumn">
        <div class="cardr">

           <p style="text-align: center;"><img src="do.gif" width="300" height="700"></p>
        </div></div>
        <div class="leftcolumn">
            <div class="cardl">
                <table align="center">
            <tr>
                <td><h3><a href="cbe.php" target="_blank"><font size="8">AREA wise Cases :</font></a></h3>
                    <script type="text/javascript">
                    function search()
                    {
                        var a = prompt("Please enter the area that you want to know:");
                        a=String(a);
                        if(a=="Bangalore-North")
                        {
                            open("1.php");
                        }
                        else if (a=="Bangalore-South") {
                            open("2.php");
                        }
                        else if(a=="Mysore"){
                            open("3.php");
                        }
                        else if(a=="Tumakuru"){
                            open("4.php");
                        }
                        else if(a=="Dakshina kannada"){
                            open("5.php");
                        }
                        else if(a=="Hassan"){
                            open("6.php");
                        } 
                        else if(a==0){
                            open("index.php");
                        }else {
                            open("notexist.php");
                        }

                    }
                        </script>
                  
                       <button onclick="search()">Click here to search by area</button><br>
                        <br>
                <iframe src="cases.php" width="500" height="200" style="border:double black 1px;"></iframe>
                </map>
            </td>
        </font></p></tr></table></div></div>  
                <br><br>
        <div class="rightcolumn">
            <div class="cardr" style="text-align: center;"><marquee behavior="scroll" direction="up">
                <h2>Announcements</h2>
                <font size="5" color="yellow"><ul type="disc">
                    <li>Karnatka govt extends Covid lockdown till July 19</li>
                    <li>Shops allowed to open till 9 pm</li>
                    <li>Colleges, schools, zoos will continue to remain shut</li>
                </ul></font>
                <br><br><br><br><br>
            </marquee>
            </div>
        </div>
        <div class="leftcolumn">   
        <div class="cardl1">
        <table>
            <tr> 
                <td>
                    <img src="co.png" width="300" height="300">
                </td>
                <td>
                    <p><font size="8">Vaccination Centers :(in City)</font></p>
                    <ol type="1"><font size="6">
                        <li><a href="login.php">click here for vaccine registration</a></li>
                        
                    </font></ol>
                </td>
            </tr>
        </table> </div></div>
        <div class="rightcolumn">
            <div class="cardr">
                <p style="text-align:center ;"><img src="vac.gif" width="300" height="300"></p>
            </div>
        </div>
        <br><br>
        <hr>
        <table  align="center">
                <br>
                <script type="text/javascript">
                    var slideIndex = 0;
                    showSlides();
                    
                    function showSlides() {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      slides[slideIndex-1].style.display = "block";  
                      setTimeout(showSlides,5000); // Change image every 5 seconds
                    }
                    </script>
                
         <!--<tr>           
                <map name="san">
                </map>
                <td>
                </td>
                </map>
            </tr>
            <br>
            <tr>
                <td>
                    <img src="covi.png" width="400" height="300" usemap="#covi">
                </td>
                <map name="covi">
                    <area shape="rect" title="NEWS -3" coords="0,0,400,300" target="blank" href="covi.php">
                </map>
                <td>
                    <img src="pica.png" width="400" height="300" usemap="#pica">
                </td>
                <map name="pica">
                </map></tr>--->
               <tr>                   
                    </td>
                </tr>
        </table>
        
       <hr>
       <map name="mask" class="map1">
           <area shape="rect" title="MASK" coords="70,45,140,90" target="blank" href="mask.php" class="map">
       </map>
      
       <?php
if (isset($_POST['submit'])) {
    $fname = $_POST['name1'];
    $lname = $_POST['name2'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $Aadhaar = $_POST['Aadhaar'];

    $servername = "web_development-db-1";
    $username = "root";
    $password = "1234";
    $dbname = "kalyan";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the user data into the updates table
    $sql_insert = "INSERT INTO updates (F_name, L_name, email, P_no , Aadhaar_no) VALUES ('$fname', '$lname', '$email', '$mobile','$Aadhaar')";

    if (mysqli_query($conn, $sql_insert)) {
        echo "now u will receive updates!";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>

<form style="text-align:center;background-color:black;" method="POST" action="index.php" name="myform1" onsubmit="return validateForm()"> 
    <fieldset>
        <legend>
            <font color="white" size="4">Want to receive updates??</font> 
        </legend>
        <br>
        <p><font size="6" color="white"><button onclick="openForm()" class="obutton">Register</button> here to get Continuous updates!! </font></p>
        <div class="form-popup" id="myForm" name="myform1">
            <h1 style="text-align: center;">Register</h1>
            <label for="name1"><b>First Name :</b></label>
            <input type="text" placeholder="Enter your first name" name="name1" id="fname"  size="30" onfocusin="myfocus(this)" onblur="myblur(this)" required><br><br>
            <label for="name2"><b>Last Name :</b></label>
            <input type="text" placeholder="Enter your last name" name="name2" id="lname"  size="30" onfocusin="myfocus(this)" onblur="myblur(this)" required><br><br>
            <label for="email"><b>Email :</b></label>
            <input type="text" placeholder="Enter Email" name="email"  size="30" onfocusin="myfocus(this)" required><br><br>
            <label for="mobile"><b>Mobile number :</b></label>  
            <input type="tel" placeholder="Enter your mobile number" name="mobile" pattern="[0-9]{10}"  size="30" onfocusin="myfocus(this)" required><br><br><br>
            <label for="aadhaar">Aadhaar number:</label>
            <input type="tel" name="Aadhaar" id="aadhaar" pattern="[0-9]{12}" required>
            <button type="submit" class="btn" name="submit">Register</button>&emsp;
            <button type="button" class="btn" onclick="closeForm()">Close</button>
        </div>
    </fieldset>
</form>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
  
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

    function myblur(a) {
        a.value = a.value.toUpperCase();
    }         

    function myfocus(b) {
        b.style.background = "red";
        b.style.border = " solid 2px red";
    } 

    function validateForm() {
        var emailID = document.myform1.email.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");
        var nam1 = document.myform1.name1.value;
        var nam2 = document.myform1.name2.value;
        var mail = document.myform1.email.value;
        var mob = document.myform1.mobile.value;
        var dataPreview = "You've entered the following details:\n" +
                          "First Name: " + nam1 + "\n" +
                          "Last Name: " + nam2 + "\n" +
                          "Mail Address: " + mail + "\n" +
                          "Mobile Number: " + mob + "\n";
                          
        if (atpos < 1 || (dotpos - atpos) < 2) {
            alert("Please enter a valid email ID");
            return false;
        } else {
            alert(dataPreview);
            return true;
        }
    }
</script>

            <br>
            </fieldset>
   </form>
       <footer class="footer1">
           <p>
        <div class="footerl">
 
            <h3 style="font-family:cursive;margin-top:99px;">Covid<span style="color: red;">Bangalore</span></h3>
            
            <p class="footer-links">
            <a href="index.php">Home</a>
            +
            <a href="about us new.php">About us</a>
            +
            <a href="#contact">Contact</a>
            </p>
            <p style=" color:  #8f9296;
 font-size: 14px;
 font-weight: normal;">Covid Bangalore &copy; 2023</p>
            </div>
                                <div class="footerc" style="height: 263px;">
                                     <p id="contact" style="text-align: center;font-family:cursive;color: red;"><u>CONTACT US</u></p><br>
                                        <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>jithendra-xxxxxxxxxx</p>                                 
                                        <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>raju-xxxxxxxxxx</p>
                                            
                                            <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>kalyan-xxxxxxxxx
                                </p></div>
                                        <div class="footerr" style="vertical-align: middle;margin-top:60px;">
                                            <h3 style="font-family:cursive;">Follow us on:</h3>
                                            <p style="text-align: center;vertical-align: middle;"><a href="https://www.facebook.com/" class="fa fa-facebook" style="vertical-align: middle;"></a>
                                            <a href="https://www.instagram.com/" class="fa fa-instagram" style="vertical-align:middle ;"></a>
                                            <a href="https://www.twitter.com/" class="fa fa-twitter" style="vertical-align: middle;"></a></p>
                                       </div>                       
                                        </p></footer>
       </body>
