<?php
        
                echo "<br><br>";

                // include('conn2.php');
                $conn = mysqli_connect('localhost','root','','travel_website');
                $userid=$_POST['username'];
                $pass=$_POST['password'];

                $sql="SELECT * FROM master_login WHERE userid='$userid' and passwd='$pass'";
                $res=mysqli_query($conn,$sql);
                if($result=mysqli_fetch_assoc($res))
                {
                    // $_SESSION['userid']=$result['userid'];  // code is able to run properly without this line too
                    header('location:Dashboard_mydb.php');
                }
                else
                {
                   
                    header('location:form2.html');
                }
        ?>