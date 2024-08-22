<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr DeenBro</title>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="css/employee_panel.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
    <section id="master">
        <div id="left">
            <div class="logo">Mr DeenBr<span id="logo-clr">o</span></div>
            <div class="menubar">
                <p class="menu-title">navigation</p>
                <ul id="menus">
                    <li class="menu"><span class="icon"><i class="fa-solid fa-house"></i></span><a href="../index.html" class="menuname">Dashboard</a></li>
                    <li class="menu"><span class="icon"><i class="fa-solid fa-bars-progress"></i></span><a href="../Todo/add_todo.php" class="menuname">Add Task</a></li>
                    <li class="menu"><span class="icon"><i class="fa-solid fa-list-check"></i></span><a href="../Todo/list_todo.php?page=1" class="menuname">View Task</a></li>
                </ul>
                <p class="menu-title">ToDo</p>
                <ul id="menus">
                    <li class="menu"><span class="icon"><i class="fa-solid fa-user"></i></span><a href="#" class="menuname">Employee</a></li>
                </ul>
            </div>
        </div>
        <div id="right">
            <div class="header">
                <div class="header-left">
                    <div class="header-left-menu">
                        <span class="menu-icn icn"><i class="fa-solid fa-bars"></i></span>
                        <div class="search-box">
                            <div class="input-group">
                            <i class="fa-solid fa-magnifying-glass mag-icn icn"></i>
                            <input type="search" class="inpts" placeholder="Search..." />
                            </div>
                            <input type="button" value="Search" class="btn">
                        </div>
                    </div>

                    <div class="header-right-menu">
                            <i class="fa-regular fa-bell rigt-icn icn"></i>
                            <i class="fa-solid fa-gear rigt-icn icn"></i>
                            <i class="fa-regular fa-moon rigt-icn icn"></i>
                            <i class="fa-solid fa-expand rigt-icn icn"></i>
                    </div>
                </div>

                <div class="header-right">
                    <img src="../assets/image/profile.png" alt="profile" class="profile"/>
                    <div class="header-right-profile">
                        <h5>RIYAS DEEN</h5>
                        <h6>Founder</h6>
                    </div>
                </div>
            </div>
            <div id="dash-board">
                <h1 class="arrange">Admin Panel</h1>
                <a href="sign_up.php" class="bttns">Add User</a>
                <table id="data">
                    <!-- <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <?php require_once "employee_list.php"; ?> 
                    </tbody>
                   
                </table>
                <div class="pagination">
                    <ul id="page-lst">
                        <li class="pages"><a href="" class="pageno">&laquo;</a></li>
                        <li class="pages"><a href="employee.php?page=1" class="pageno <?php echo ($page==1)? "active":"" ?>">1</a></li>
                        <li class="pages"><a href="employee.php?page=2" class="pageno <?php echo ($page==2)? "active":"" ?>">2</a></li>
                        <li class="pages"><a href="employee.php?page=3" class="pageno <?php echo ($page==3)? "active":"" ?>">3</a></li>
                        <li class="pages"><a href="employee.php?page=4" class="pageno <?php echo ($page==4)? "active":"" ?>">4</a></li>
                        <li class="pages"><a href="" class="pageno">&raquo;</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<script>
        function popup(){
   toastr.success('Deleted Succesfully..!');
        }
    </script>