  <?php
    if (isset($_POST['submit']))
            {
                $username = $_POST['UserName']; // define the username and password submitted
                $password = $_POST['Password'];
            $con=mysqli_connect("localhost","root","","group_project");
            if (!$con)
            {
                die("MySql conntection Failed " .mysqi_error());
            }
            else
            {
                $iq="INSERT INTO users VALUES(DEFAULT,'$username','$password');";
                $result=mysqli_query($con,$iq);
                echo "Your account has been created";
            }
        }
  ?>
