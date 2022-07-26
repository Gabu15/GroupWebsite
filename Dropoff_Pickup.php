  <?php
    if (isset($_POST['submit']))
            {
                $date = $_POST['date']; 
                $time = $_POST['Time']; 
                $PickOrDrop = $_POST['PickOrDrop']; 
                $fname = $_POST['Fname']; 
                $lname = $_POST['Lname']; 
                $homeaddr = $_POST['HomeAddress']; 
                $phonenumber = $_POST['PhoneNumber']; 
                $con=mysqli_connect("localhost","root","","group_project");
            if (!$con)
            {
                die("MySql conntection Failed " .mysqi_error());
            }
            else
            {
                $sq="SELECT * FROM customerschedule WHERE sch_date = '$date' AND sch_time = '$time' AND sch_pickordrop = '$PickOrDrop'";
                $result=mysqli_query($con,$sq);
                if (mysqli_num_rows($result) <= 0)
                {
                    $iq="INSERT INTO customerschedule VALUES(DEFAULT,'$fname','$lname','$homeaddr','$phonenumber','$date','$time','$PickOrDrop');";
                    $result=mysqli_query($con,$iq);
                    echo "have been scheduled see you then";
                }
                else
                {
                    echo "Please schedule a new time";
                }
            }
        }
  ?>
