<?php
session_start();
if(isset($_SESSION['id'])){header("location:php/mapview.php");}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find | Login</title>

    <link rel="stylesheet" href="styles/login_style.css">
    <link rel="stylesheet" href="styles/login_beer_style.css">
    <link rel="stylesheet" href="styles/reg_style.css">

    <script src="js/login_js.js"></script>
    <script src="js/reg_js.js"></script>


</head>
<body onload="call()" id="bod">
    <div class="left_container">
        <div class="left_inside_container">
                <div class="disc">
                    <div class="disc_content">
                        <h1><b id='a'>Sign in</b></h1>
                        <p id='b'>
                            To keep connected with us, please login with your unique credentials. <br><br>
                            If this device is not connected and you like to make it secure, register this device after Signing in.
                    </p>
                    </div>
                </div>

                <div class="smallbox">
                    <div class="data">
                        <div id="c">Not yet an user ?</div><!-- # Have an account ? -->
                        <a onclick="change_page()"><p><h2 id='d'>Sign up</h2></p></a>
                    </div>
                </div>
                <center><p class="forget"><a href="php/forget_pass.php">Forget password ?</a></p></center>
            
        </div>
    </div>

    <div class="right_container">

        <!-- Login page starts here ( have to call 'call()' onload) -->
        <div class="right_inside_conatiner" id="login_page">
            <div class="login">
                <div class="bucket">
                    <!-- bear animations -->
                    <div class="image_div">
                        <div class="hands">
                            <img src="images/hands_left.png" alt="" id="lefthand">
                            <img src="images/hands_right.png" alt="" id="righthand">
                        </div>
                        <div class="img">
                            <div class="eye">
                                <div class="ball"></div>
                            </div>
                            <div class="eye">
                                <div class="ball"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- login box animation  -->
                        <p id="err" style="visibility:hidden">Invalid username or password !</p>
                        <?php
                            if(isset($_GET['err']) && $_GET['err']=='wrong'){
                                echo "<script>document.getElementById('err').style.cssText='visibility:visable;color:red;font-size:14px;margin-bottom:18px;'</script>";
                            }
                        ?>

                        <div id="back_of_input" style="z-index:2;">
                            <input id='view1' class="inputs" type="text" placeholder="E-Mail" onkeypress="eye_move('view1')" onclick="rem(this.id)" required>
                            <input id='view2' class="inputs" type="Password" placeholder="Password" onkeypress="eye_move('view2'),eyes()" onclick="eyes()" required>
                        </div>
                        <br>
                        <center>
                            <button class="click_button" onclick="startanimation('back')" style="display: none;color: red;">Back</button>
                            <button class="click_button" onclick="startanimation('next')" style="color: blue;">Next</button>
                        </center>
                </div>
                <!-- hidden box  -->
                <div class="hidden" style="display:none">
                    <form action="php/login.php" method="POST" id="lo">
                        <input type="text" id="em" name="email">
                        <input type="password" id="pass" name="password">
                    </form>
                    <a id="mob" href="mobilepage.html"></a>
                </div>
                            
            </div>
        </div>
    <!-- login stops here  -->

    <!-- registration page starts from here (have to call 'typeWriter()' method on load) -->
    
       <div class="right_inside_conatiner" id="reg_page" style='visibility: hidden;opacity: 0;'>
            <form action="php/register_.php" method="POST" id="register">
                <div class="typewriter" ></div>
                <input type="button" value="Create account" id="create_account" onclick="sub()">
            </form>
        </div>
    <!-- registration page ends here  -->
    </div>
</body>
</html>
<?php
}
?>