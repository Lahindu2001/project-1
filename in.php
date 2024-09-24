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

                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Adress</th>
                    <th>plan type</th>
                </tr>
            </table>
            <button class="btn btn-add"><a href ="http://localhost/admin/adduserform.php" target="_blank">ADD User</a></button>
            <button class="btn btn-delete"><a href ="#" target="_blank">Delete User</a></button>
            <button class="btn btn-edit"><a href ="#" target="_blank">Edit detail User</a></button>
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