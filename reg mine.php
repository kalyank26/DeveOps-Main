<html>
    <head>
        <meta charset="UTF-8">
        <title colour="red">Register here</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body background="bg3.jpg" style="font-family: 'Times New Roman', Times, serif;">
            <div class="title">
            <h1 style="text-align: center;"><a href="covid.php"><font color="white">COVID19 </font></a><a href="https://en.wikipedia.org/wiki/Bangalore">
                <font color="black">Bangalore</font> </a></h1></div>
                <div class="tit">
                    <ul><font size="4">
                        <li><a href="#">Home</a></li><p style="color: red;">&emsp; + &emsp;</p>
                        <li><a href="#contact">Contact us</a></li>
                    </font></ul></div> 
       <br><hr><center>
      <form action="submit.php" method="get" style="background-color: black;width: 800px;color: wheat;" ><table align="center" height="400" width="400" style="color: wheat;">
       <center> <h1>REGISTRATION FORM</h1></center>
        <tr>
            <td>First Name </td> 
            <td>:</td> 
            <td><input type="text" name="first name" id="fname" size="30" required></td><br>
        </tr>
        <tr>
            <td>Last Name </td> 
            <td>:</td> 
            <td><input type="text" name="last name" id="lname" size="30" required></td><br>
        </tr>
        <tr>
            <label for="email address">E-MAIL :</label>            
            <input type="email" name="email address" id="email" size="30" required>
        </tr>
        <tr>
            <td>Date of Birth </td>
            <td>:</td>  
            <td><input type="date"></td>
        </tr>
        <tr>
            <label for="mobile">Mobile number :</label>  
            <input type="tel" name="phone" id="phone" size="30" pattern="[0-9]{10}" required>
        </tr>
        <tr>
            <label for="gender">Gender :</label>
           
            <label for="female"><input type="radio" name="gender" id="gender" required>Female</label>
            <label for="male"><input type="radio" name="gender" id="gender" required>Male</label>
        </tr>
        </table>
        <center>
        <h5><input type="checkbox" name="check" id="check" required> I have read and provide consent for my data to be processed for purposes mentioned in the Privacy policy
        and Terms and Conditions,<br> and agree to be contacted for promotion via whatsapp,sms,email etc.</h5>
        <p><button type="submit" name="submit" id="submit" onclick="return confirmsub()">Submit</button>&emsp;
        <button type="submit" name="reset" id="reset">Reset</button></p>
        <script type="text/javascript">
        function confirmsub()
        {
          var con=confirm("Do you want to submit?");
          if(con)
          {
              return true;
          } 
          else{ return false;} 
        }
        </script>
        </center></form></center>
        <form style="background-color: brown;">
            <fieldset>
            <p id="contact"> <table align="center">
                <tr>
                    <td style="text-align: left;
                       <td style="text-align: right;">
            <table align="right">
            <tr>
                <td><p><font face="Times New Roman" size="4" color="white"><u>CONTACT US</u></font></p></td>
            </tr>
            <tr>
                <td><ul type="disc">
                    <li>kalyan-xxxxxxxxxx</li>
                    <li>raju-xxxxxxxxxx</li>
                    <li>jeethendra-xxxxxxxxxx</li>
                    </ul>
                </td>
            </tr>
            </table></p>
            </fieldset></form>
       
    </body>
    </html>
       