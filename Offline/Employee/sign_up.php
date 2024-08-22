<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/sign.css">
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
                    <li class="menu"><span class="icon"><i class="fa-solid fa-user"></i></span><a href="../Employee/employee.php?page=1" class="menuname">Employee</a></li>
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
                <h2 id="dash-board-title">Add New User</h2>
                
            <div id="signs">
            <form action="create_acc.php" method="post" id="signs">
                <input type="text" name="fname" class="sign-inpts" placeholder="First Name" required/>
                <input type="text" name="lname" class="sign-inpts" placeholder="Last Name" required/>
                <input type="password" name="pass" class="sign-inpts" placeholder="Password" required/>
                <input type="submit" value="Add" class="bttn" />
        </form>
    </div>
            </div>
        </div>
    </section>
</body>
</html>