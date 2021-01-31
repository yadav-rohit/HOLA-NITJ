<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <script src="JS/fm.js"> </script>
    <link rel="stylesheet" href="CSS/fm.css">

</head>

<body>
    
    <div id="lgfrm">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">

            <form method="POST" class="modal-content animate" action="#">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close Modal">×</span>
                    <img src="logo.png" alt="Avatar" class="avatar" height="300px" width="50px">
                </div>

                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
                <?php 
    $servername ="localhost";
    $username ="root";
        $password="";
    $d="qaforum";
    mysqli_connect($servername ,$username ,$password);
    mysqli_select_db($d);
    if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    $sql="SELECT*FROM `student` where NAME='".$username."' AND PASSWORD='".$password."' limit 1";
    $result= mysqli_query($sql);
    if(mysqli_num_rows($result)==1){
        echo "succesfull";
        exit();
    }
    else{
        echo "wrong input";
        exit();
    }
}
?>
            </form>
        </div>

    </div>
</body>

</html>