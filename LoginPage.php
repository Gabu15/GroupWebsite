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
                $sq="SELECT * FROM users WHERE UserName = '$username' AND UserPass = '$password'";// Select query studture
                $result=mysqli_query($con,$sq);
                if (mysqli_num_rows($result) <= 0)
                {
                    echo "wrong user name and password";
                }
                else
                {
                    echo "You have signed in";
                }
            }
        }
  ?>
