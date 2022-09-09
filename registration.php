<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    
    </head>
    <body class="log">
        <div class="uphead">
            <div class="s1">
                <a href="tel:+918972538806" class="fa fa-phone"> Call now</a>
                
            </div>
            <div class="s2">
               <a href="mailto:cloud.library@gmail.com" > &#9993;  cloud.library@gmail.com</a>
            </div>
            <div class="s3">
                <ul>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-youtube"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-github"></a></li>
                    <li><a href="#" class="fa fa-whatsapp"></a></li>

                </ul>
            </div>
        </div>
        <!----------------------------navigation bar------------------------------->
        <div class="nav">
            <div class="logo">
                <a href="sign.html"><img src="logo.png" alt="logo"></a>
            </div>

        </div>
        <div class="head">
            <h2>Welcome to <span>Cloud Library</span></h2>

        </div>
        <hr>
        <?php
$conn = mysqli_connect("localhost" , "root" , "", "ahidur");
if($conn === false){
    die("ERROR: Could no connect." 
    .mysqli_connect_error());
}
$first_name = $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$phone_number = $_REQUEST['phno'];
$password = $_REQUEST['password'];


$sql = "INSERT INTO login VALUES ('$first_name' , '$last_name' , '$email' , '$phone_number' , '$password')" ;
if(mysqli_query($conn , $sql)){
    echo "<center><h3>Registration sucessfull.</h3></center>";
    echo nl2br ("<center><h3>$first_name  $last_name</h3></center>");
}
else{
    echo "error: $sql."
    .mysqli_error($conn);
}

mysqli_close($conn);

?>
        
        <div class="login">
            <h2>Login</h2>
             <table>
                <form action="authentication.php" onsubmit = "return validation()" method = "POST" name="f1">
                    <tr>
                        <th class="fn">User id /Email</th>
                        <td class="br">
                            <input type="text" id ="user" name  = "user">
                        </td>
                    </tr>
                    <tr>
                        <th class="fn">Password</th>
                        <td>
                            <input type="password" id ="pass" name  = "pass" >
                        </td>
                    </tr>
                    <tr>
                        <th ></th>
                        <td class="btn2">
                            <input type="submit" value="Login">
                        </td>
                    
                    </tr>
                   
                </form>
             </table>
             <h4>New user? <a href="login.html">Signup</a></h4>
             <h4>Forgot password ?<a href="">click</a></h4>
             <hr>
             <ul>
                <li><a href="" class="fa fa-google">  google</a></li>
                <li><a href="" class="fa fa-facebook">  facebook</a></li>
                
             </ul>
        </div>
        <br>
        <!---------------------footer---------------------------------------------->
        <div class="footer">
            <div class="sf">
                <h2>Download our App</h2>
                <p>Download app for Android and ios mobile phone.</p> 
             <img src="stores logo.png" alt="" height="70px" width="350px">

            </div>
            <div class="sf2">
                <h2>Our Partner</h2>
                <img src="partner.png" alt="" height="50px" width="350px">
            </div>
            <div class="sf3">
                <h2>  Follow Us</h2>
                <ul>
                    <li><a href="" class="fa fa-facebook"></a></li>
                    <li><a href="" class="fa fa-instagram"></a></li>
                    <li><a href="" class="fa fa-twitter"></a></li>
                    <li><a href="" class="fa fa-youtube"></a></li>
                    <li><a href="" class="fa fa-linkedin"></a></li>
                    <li><a href="" class="fa fa-github"></a></li>
                    <li><a href="" class="fa fa-whatsapp"></a></li>
                </ul>
            </div>
            <hr width="350px">
            <h4>Copyright©️2022 Cloud library, All Rights Reserved</h4>
        </div>

        <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
          
    </body>

</html>


<!-----------------------------------------------Author: Ahidur Rahaman------------------------------------------>