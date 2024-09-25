<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="src/asserts/css/in.css">
    <script src="in.js"></script>
</head>

<body>

    <div class="header">
        <center> <img src="profile.jpg" alt="logo" width="50px" length="50px"> </center>
        <h1>Admin Dashboard - Life Insurance Management System </h1>
        <script>document.write(Date());</script>
        <h4>Welcome, Admin</h4>
    </div>

    <ul class="navi">
        <li><a href="#"> Dashboard</a></li>
        <li><a href="#"> Manage Users</a></li>
        <li><a href="#"> Manage Fees</a></li>
        <li><a href="#"> Manage Employees</a></li>
        <li><a href="#"> Manage Policies</a></li>
        <li><a href="#"> Settings</a></li>
        <li style="float: right;"><a href="#"> Logout</a></li>
    </ul>

    <div class="scrollmenu">
        <a href="#"> Dashboard</a>
        <a href="#"> Manage Users</a>
        <a href="#"> Manage Fees</a>
        <a href="#"> Manage Employees</a>
        <a href="#"> Manage Policies</a>
        <a href="#"> Settings</a>
        <a href="#"> Logout</a>
    </div>


    <div class="main-content">

        <!-- Manage Users Section -->
        <div class="section">
            <h3>Manage Users</h3>
            <table>
                <div class="table">
                <?php

                require 'config.php';
                $sql = "SELECT User_ID,Name,email,Phone,Address,Plane_Type from userdetail";

                $result =$con->query($sql);
                echo "<table border='1'";


                    echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Adress</th><th>plane type</th><th>Action</th>";
                        while($row = $result->fetch_assoc()){
                        echo"<tr >";
                        echo "<td >".$row["User_ID"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["email"]."</td>". "<td>".$row["Phone"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Plane_Type"]."</td>";
                        echo "<td>
                        <form action='deleted1.php' method='POST'>
                            <input type='hidden' name='delete' value='" . $row["User_ID"] . "'>
                            <input type='submit' value='Delete'class='btn btn-delete'>

                        </form>
                         <form action='updatemain.php' method='POST'>
                            <input type='hidden' name='update' value='" . $row["User_ID"] . "'>
                            <input type='submit' value='Update'class='btn btn-edit'>

                        </form>
                      </td>";

                    echo "</tr>";
                    }
                 
                ?>
            </table>
            </div>
            <a href="http://localhost/admin/adduserform.php" ><button class="btn btn-add">ADD User</button></a>
        </div>

        <!-- Manage Fees Section -->
        <div class="section">
            <h3>Manage Fees</h3>
            <table>
                <tr>
                    <th>Fee ID</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </table>
        </div>

        <!-- Manage Employees Section -->
        <div class="section">
            <h3>Manage Employees</h3>
            <table>

                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>




            </table>
        </div>

    </div>


</body>

</html>